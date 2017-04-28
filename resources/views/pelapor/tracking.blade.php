@extends('layouts.pelapor')

@section('content')

    @if($data)
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #2a3b48;color:#ffffff;">
                <center>Status Laporan</center>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td width="200px"><div class="pull-right">Kode Tracking</div></td>
                            <td width="1px">:</td>
                            <td>{{ $data->no_track }}</td>
                        </tr>
                        <tr>
                            <td width="200px"><div class="pull-right">Jenis Gangguan</div></td>
                            <td width="1px">:</td>
                            <td>{{ $data->getJenisGangguan() }}</td>
                        </tr>
                        @if($data->id_jenis == 1)
                            <tr>
                                <td width="200px"><div class="pull-right">Nama Jaringan</div></td>
                                <td width="1px">:</td>
                                <td>{{ $data->getGangguan() }}</td>
                            </tr>
                            <tr>
                                <td width="200px"><div class="pull-right">Asal Laporan</div></td>
                                <td width="1px">:</td>
                                <td>{{ $data->getAsalLaporan() }}</td>
                            </tr>
                        @elseif($data->id_jenis == 2)
                            <tr>
                                <td width="200px"><div class="pull-right">Nama Aplikasi</div></td>
                                <td width="1px">:</td>
                                <td>{{ $data->getGangguan() }}</td>
                            </tr>
                        @else
                        @endif

                        <tr>
                            <td width="200px"><div class="pull-right">Detail Gangguan</div></td>
                            <td width="1px">:</td>
                            <td>{{ ucfirst($data->detail) }}.</td>
                        </tr>
                        @if($data->id_status == 1)
                            <tr class="alert alert-danger">
                                <td width="200px"><div class="pull-right">Status</div></td>
                                <td width="1px">:</td>
                                <td>{{ $data->getStatus() }}. </td>
                            </tr>
                        @elseif($data->id_status == 2)
                            <tr class="alert alert-warning">
                                <td width="200px"><div class="pull-right">Status</div></td>
                                <td width="1px">:</td>
                                <td>{{ $data->getStatus() }}</td>
                            </tr>
                        @elseif($data->id_status == 3)
                            <tr class="alert alert-info">
                                <td width="200px"><div class="pull-right">Status</div></td>
                                <td width="1px">:</td>
                                <td>{{ $data->getStatus() }}</td>
                            </tr>
                        @elseif($data->id_status == 4)
                            <tr class="alert">
                                <td width="200px"><div class="pull-right">Hasil Perbaikan</div></td>
                                <td width="1px">:</td>
                                <td>
                                    @foreach($data->hasil as $index => $hasil)
                                        {{ ucfirst($hasil->hasil_perbaikan) }}.
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="alert">
                                <td width="200px"><div class="pull-right">Update oleh</div></td>
                                <td width="1px">:</td>
                                <td>
                                    @foreach($data->hasil as $index => $hasil)
                                        {{ ucwords($data->petugas($hasil->id_admin)) }}
                                    @endforeach
                                </td>

                            </tr>
                            <tr class="alert alert-success">
                                <td width="200px"><div class="pull-right">Status</div></td>
                                <td width="1px">:</td>
                                <td>{{ $data->getStatus() }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <div class="alert alert-danger">
                        <p>
                            Kode Tracking tidak cocok dengan laporan apa pun.
                        <p>
                        </p>
                            Silakan cek kembali kode Anda!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
@endsection




