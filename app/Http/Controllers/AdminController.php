<?php

namespace App\Http\Controllers;

use App\Gangguan;
use App\JenisAdmin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$idjenis = Auth()->user()->id_jenis;
        //$jenis = JenisAdmin::whereRaw('id = ?', [$idjenis])->get();
        $baru = Gangguan::whereRaw('id_status = ?',[1])->orderBy('created_at', 'DESC')->get();
        $baruhitung = Gangguan::whereRaw('id_status = ?',[1])->count();
        $proses = Gangguan::whereRaw('id_status = ?',[2])->orderBy('updated_at', 'DESC')->get();
        $proseshitung = Gangguan::whereRaw('id_status = ?',[2])->count();
        $selesai = Gangguan::whereRaw('id_status = ?',[3])->orderBy('updated_at', 'DESC')->get();
        $selesaihitung = Gangguan::whereRaw('id_status = ?',[3])->count();
        return view('admin.dashboard', compact('baru', 'proses', 'selesai', 'baruhitung', 'proseshitung', 'selesaihitung'));
    }

    public function show($id)
    {
        $lgangguan = Gangguan::findOrFail($id);
        return view('lapor.detil', compact('lgangguan'));
    }

}
