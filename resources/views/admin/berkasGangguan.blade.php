@extends('layouts.admin')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #2a3b48; color: #ffffff"><center>Berkas Layanan Gangguan</center></div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td width="30%" style="text-align: right">Formulir Tindak Lanjut</td>
                                <td width="1px">:</td>
                                <td><a target="_blank" href="{{ route('pdf.formulir.laporan',$lgangguan->no_track) }}" class="btn btn-default btn-xs"><i class="fa fa-print"></i> Cetak</a></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right">Surat Tugas</td>
                                <td width="1px">:</td>
                                <td><a target="_blank" href="{{ route('pdf.surat.laporan',$lgangguan->no_track) }}" class="btn btn-default btn-xs"><i class="fa fa-print"></i> Cetak</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection