@extends('layouts.app')

<style type="text/css">
    .profile-image{
        max-width: 100px;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0,0,0,0.3);
        margin-bottom: 20px;
    }
</style>

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    Laporan telah dikirim. Kode tracking Anda: <h3>{{ session()->get('message') }}</h3> Silakan cek status laporan Anda dengan kode tersebut.
                </div>
            @else
                <div class="panel panel-default form-control">
                    <?php
                    $time = date("H");
                    $timezone = date("e");
                    $suasana = "";
                    if ($time < "12") {
                        $suasana = "Pagi";
                    } else
                        if ($time >= "12" && $time < "17") {
                            $suasana = "Siang";
                        } else
                            if ($time >= "17" && $time < "19") {
                                $suasana = "Sore";
                            } else
                                if ($time >= "19") {
                                    $suasana = "Malam";
                                }
                    ?>
                    <center>Selamat <?php echo $suasana ?>, {{ ucwords(Auth::user()->nama) }}!</center>
                </div>
                @forelse($data as $data)
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
                                        <td>{{ $data->detail }}</td>
                                    </tr>
                                    @if($data->id_status == 1)
                                        <tr class="alert alert-danger">
                                            <td width="200px"><div class="pull-right">Status</div></td>
                                            <td width="1px">:</td>
                                            <td>{{ $data->getStatus() }}</td>
                                        </tr>
                                    @elseif($data->id_status == 2)
                                        <tr class="alert alert-warning">
                                            <td width="200px"><div class="pull-right">Status</div></td>
                                            <td width="1px">:</td>
                                            <td>{{ $data->getStatus() }}</td>
                                        </tr>
                                    @elseif($data->id_status == 3)
                                        <tr class="alert alert-success">
                                            <td width="200px"><div class="pull-right">Status</div></td>
                                            <td width="1px">:</td>
                                            <td>{{ $data->getStatus() }}</td>
                                        </tr>
                                    @else

                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            @endif

        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <img class="profile-image" src="{{  url('/assets/img/malin.png') }}">
                    <ul class="list-group">
                        <a class="list-group-item" href="{{ route('lapor.create') }}">Lapor Gangguan</a>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>Cek status laporan</center>
                </div>
                <div class="panel-body">
                    <form class="form" role="form" method="post" action="{{ route('track.cek') }}">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="kode_tracking" class="form-control" placeholder="Kode Tracking">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Cek</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




