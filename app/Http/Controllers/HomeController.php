<?php

namespace App\Http\Controllers;

use App\Gangguan;
use App\JenisLayanan;
Use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kode = $request->kode_tracking;
        $data = Gangguan::whereRaw('no_track = ?', [$kode])->get();
        return view('pelapor.dashboard',compact('data'));
    }
}
