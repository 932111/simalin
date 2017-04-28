<?php

namespace App\Http\Controllers;

use App\Gangguan;
use Illuminate\Http\Request;
use PDF;

class PDFDetilLaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function formulirTindakLanjutPDF($no_track)
    {
        $lgangguan = Gangguan::where('no_track',$no_track)->get();
        $pdf = PDF::loadView('pdf.formulirTL', ['gangguan' => $lgangguan]);
        return $pdf->stream();
    }

    public function suratTugasPDF($no_track)
    {
        $lgangguan = Gangguan::where('no_track',$no_track)->get();
        $pdf = PDF::loadView('pdf.suratTugas', ['gangguan' => $lgangguan]);
        return $pdf->stream();
    }
}
