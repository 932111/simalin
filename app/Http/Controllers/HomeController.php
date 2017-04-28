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
    public function index()
    {
        return view('pelapor.dashboard');
    }

    public function tracking(Request $request)
    {
        $kode = $request->kode_tracking;
        $data = Gangguan::whereRaw('no_track = ?', [$kode])->first();
        return view('pelapor.tracking',compact('data') );
    }
}
