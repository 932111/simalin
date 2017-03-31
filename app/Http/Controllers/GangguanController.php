<?php

namespace App\Http\Controllers;

use App\Aplikasi;
use App\Gangguan;
use App\Jaringan;
use App\JenisLayanan;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GangguanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jgangguan = JenisLayanan::all();
        $app = Aplikasi::all();
        $jar = Jaringan::all();
        return view('lapor.create', compact('jgangguan','app','jar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_jenis' => 'required',
            'id_app_jar' =>'required'
        ]);

        //$status = Status::all();
        $status = 1;
        $codeH = substr(strftime("%H", time()),0);
        $codeM = substr(strftime("%M", time()),0);
        $codeS = substr(strftime("%S", time()),0);
        $id = Auth::user()->id;
        $id_app_jar = $request->id_app_jar;
        $id_jenis = $request->id_jenis;
        $no_track = $id.$codeS.$codeM.$codeH;

        $gangguan = new Gangguan();
        $gangguan->id_pelapor = $id;
        $gangguan->id_jenis = $id_jenis;
        $gangguan->id_aplikasi_atau_jaringan = $id_app_jar;
        $gangguan->detail = $request->detail;
        $gangguan->id_status = $status;
        $gangguan->no_track = $no_track;
        $gangguan->save();

        $idgangguan = $gangguan->id;
        $track = $gangguan->no_track = $idgangguan.$codeH.$codeM;
        $gangguan->save();

        return redirect()
            ->route('dashboard')
            ->with('message',$track);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dataJar(){
        $jar = Jaringan::all();
        return response()->json($jar);
    }
    public function dataApp(){
        $app = Aplikasi::all();
        return response()->json($app);
    }
}
