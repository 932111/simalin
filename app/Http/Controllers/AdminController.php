<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Gangguan;
use App\HasilPerbaikan;
use App\JenisAdmin;
use App\PenangananLaporan;
use App\PetugasGangguan;
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
        $offline = Gangguan::whereRaw('id_status = ?',[2])->orderBy('updated_at', 'DESC')->get();
        $offlinehitung = Gangguan::whereRaw('id_status = ?',[2])->count();
        $online = Gangguan::whereRaw('id_status = ?',[3])->orderBy('updated_at', 'DESC')->get();
        $onlinehitung = Gangguan::whereRaw('id_status = ?',[3])->count();
        $selesai = Gangguan::whereRaw('id_status = ?',[4])->orderBy('updated_at', 'DESC')->get();
        $selesaihitung = Gangguan::whereRaw('id_status = ?',[4])->count();
        return view('admin.dashboard', compact('baru', 'offline', 'online', 'selesai', 'baruhitung', 'offlinehitung', 'onlinehitung','selesaihitung'));
    }

    public function show($id)
    {
        $lgangguan = Gangguan::findOrFail($id);
        $baruhitung = Gangguan::whereRaw('id_status = ?',[1])->count();
        $offlinehitung = Gangguan::whereRaw('id_status = ?',[2])->count();
        $onlinehitung = Gangguan::whereRaw('id_status = ?',[3])->count();
        $selesaihitung = Gangguan::whereRaw('id_status = ?',[4])->count();
        return view('lapor.detil', compact('lgangguan','baruhitung', 'offlinehitung', 'onlinehitung', 'selesaihitung'));
    }

    public function offlineStore(Request $request)
    {

        $penanganan = new PenangananLaporan();
        $penanganan->id_gangguan = $request->id_gangguan;
        $penanganan->id_jenis_penanganan = $request->id_jenis_penanganan;
        $penanganan->save();
        return redirect()->route('penanganan.offline.view',$request->id_gangguan);
    }

    public function onlineStore(Request $request)
    {
        $penanganan = new PenangananLaporan();
        $penanganan->id_gangguan = $request->id_gangguan;
        $penanganan->id_jenis_penanganan = $request->id_jenis_penanganan;
        $penanganan->save();
        return redirect()->route('penanganan.online.view',$request->id_gangguan);
    }

    public function offline($id)
    {
        $lgangguan = Gangguan::findOrFail($id);
        $baruhitung = Gangguan::whereRaw('id_status = ?',[1])->count();
        $offlinehitung = Gangguan::whereRaw('id_status = ?',[2])->count();
        $onlinehitung = Gangguan::whereRaw('id_status = ?',[3])->count();
        $selesaihitung = Gangguan::whereRaw('id_status = ?',[4])->count();
        $admin = Admin::whereRaw('id_jenis = ?',[2])->get();
        return view('penanganan.offline', compact('lgangguan','baruhitung', 'offlinehitung', 'onlinehitung', 'selesaihitung','admin'));
    }

    public function online($id)
    {
        $lgangguan = Gangguan::findOrFail($id);
        $baruhitung = Gangguan::whereRaw('id_status = ?',[1])->count();
        $offlinehitung = Gangguan::whereRaw('id_status = ?',[2])->count();
        $onlinehitung = Gangguan::whereRaw('id_status = ?',[3])->count();
        $selesaihitung = Gangguan::whereRaw('id_status = ?',[4])->count();
        return view('penanganan.online', compact('lgangguan','baruhitung', 'offlinehitung', 'onlinehitung', 'selesaihitung'));
    }

    public function petugasGangguan(Request $request)
    {

        $idArray = $request->input('id');
        $count = '';

        if (count($idArray) >= 1)
        {
            $count = count($idArray);
        }

        if($count < 1)
        {
            $this->validate($request,[
                'id[]' => 'required'
            ]);
        }

        $petugas = array();
        $gangguan = array();
        for($i = 0; $i < $count; $i++)
        {
            $petugas[$i] = new PetugasGangguan();
            $petugas[$i]->id_gangguan = $request->id_gangguan;
            $petugas[$i]->id_admin = $request->id[$i];
            $petugas[$i]->save();
        }

        for($i = 0; $i < $count; $i++)
        {
            $gangguan = Gangguan::findOrFail($request->id_gangguan);
            $gangguan->id_status = 2;
            $gangguan->save();
        }

        return redirect()->route('berkas.gangguan',$request->id_gangguan);
    }

    public  function berkas($id)
    {
        $lgangguan = Gangguan::findOrFail($id);
        $baruhitung = Gangguan::whereRaw('id_status = ?',[1])->count();
        $offlinehitung = Gangguan::whereRaw('id_status = ?',[2])->count();
        $onlinehitung = Gangguan::whereRaw('id_status = ?',[3])->count();
        $selesaihitung = Gangguan::whereRaw('id_status = ?',[4])->count();
        return view('admin.berkasGangguan', compact('lgangguan', 'baruhitung', 'offlinehitung', 'onlinehitung', 'selesaihitung'));
    }

    public function updateGangguan($id)
    {
        $lgangguan = Gangguan::findOrFail($id);
        $baruhitung = Gangguan::whereRaw('id_status = ?',[1])->count();
        $offlinehitung = Gangguan::whereRaw('id_status = ?',[2])->count();
        $onlinehitung = Gangguan::whereRaw('id_status = ?',[3])->count();
        $selesaihitung = Gangguan::whereRaw('id_status = ?',[4])->count();
        return view('lapor.update', compact('lgangguan', 'baruhitung', 'offlinehitung', 'onlinehitung', 'selesaihitung'));
    }

    public function simpanHasil(Request $request)
    {

        $hasil = new HasilPerbaikan();
        $hasil->hasil_perbaikan = $request->hasil;
        $hasil->id_admin = $request->id_admin;
        $hasil->save();

        $gangguan = Gangguan::findOrFail($request->id_gangguan);
        $gangguan->id_status = 4;
        $gangguan->save();
        $gangguan->hasil()->attach($hasil);

        return redirect()->route('admin.dashboard');
    }

    public function tracking(Request $request)
    {
        $kode = $request->kode_tracking;
        $data = Gangguan::whereRaw('no_track = ?', [$kode])->first();
        $baruhitung = Gangguan::whereRaw('id_status = ?',[1])->count();
        $offlinehitung = Gangguan::whereRaw('id_status = ?',[2])->count();
        $onlinehitung = Gangguan::whereRaw('id_status = ?',[3])->count();
        $selesaihitung = Gangguan::whereRaw('id_status = ?',[4])->count();
        return view('admin.tracking',compact('data', 'baruhitung', 'offlinehitung', 'onlinehitung', 'selesaihitung') );
    }

}
