@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Gangguan
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-list-alt"></i> Laporan Gangguan</a></li>
            <li>
                @if($lgangguan)
                    {{ $lgangguan->getAsalLaporan() }}
                @endif
            </li>
        </ol>
    </section>
    <section class="content">
            <div class="box">
                <div class="box-header">

                </div>
                <div class="box-body">
                    <table class="table table-condensed">
                        <tr>
                            <td width="40%" style="text-align: right">Kode Tracking</td>
                            <td width="1px">:</td>
                            <td>{{ $lgangguan->no_track }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Asal Laporan</td>
                            <td width="1px">:</td>
                            <td>{{ $lgangguan->getAsalLaporan() }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Jenis Gangguan</td>
                            <td width="1px">:</td>
                            <td>{{ $lgangguan->getJenisGangguan() }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Gangguan</td>
                            <td width="1px">:</td>
                            <td>{{ $lgangguan->getGangguan() }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Status</td>
                            <td width="1px">:</td>
                            <td>{{ $lgangguan->getStatus() }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Detail</td>
                            <td width="1px">:</td>
                            <td>{{ ucfirst($lgangguan->detail) }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Nama Pelapor</td>
                            <td width="1px">:</td>
                            <td>{{ ucwords($lgangguan->pelapor()) }}</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn btn-default pull-right">
                                    Cek
                                </div>
                            </td>
                            <td></td>
                            <td>
                                @if($lgangguan->id_status == 1)
                                    <div class="btn btn-warning">
                                        Proses
                                    </div>
                                    @elseif($lgangguan->id_status == 2)
                                        <div class="btn btn-success">
                                            Selesai
                                        </div>
                                    @else
                                    
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    </section>
@endsection