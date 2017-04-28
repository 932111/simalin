@extends('layouts.admin')

<style>
    .box{
        height:72%;
    }
</style>

@section('content')

        <section class="content-header">
            <h1>
                Laporan Gangguan
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-list-alt"></i> Laporan Gangguan</a></li>

            </ol>
        </section>
            <section class="content">
                <div class="row equal">
                    <div class="col-md-3">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title"><span class="label label-danger">{{ $baruhitung }}</span> Laporan Baru</h3>
                            </div>
                            <div class="box-body chat">
                                <div class="list-group" style="overflow-y: auto; height: 88%">
                                    @forelse($baru as $baru)
                                        <a class="list-group-item" href="{{ route('detail.laporan',$baru->id) }}">{{ ucwords($baru->namaDepanPelapor()) }} <span class="badge bg-red pull-right"><i class="fa fa-clock-o"> </i> {{ $baru->getCreatedAt()->diffForHumans() }}</span></a>

                                    @empty
                                        <center>Tidak ada laporan.</center>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box box-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title"><span class="label label-warning">{{ $offlinehitung }}</span> Penanganan Offline</h3>
                            </div>
                            <div class="box-body">
                                <div class="list-group" style="overflow-y: auto; height: 88%">
                                    @forelse($offline as $offline)
                                        <a class="list-group-item" href="{{ route('detail.laporan',$offline->id) }}">{{ ucwords($offline->namaDepanPelapor()) }} <span class="badge bg-yellow pull-right"><i class="fa fa-clock-o"> </i> {{ $offline->getUpdatedAt()->diffForHumans() }}</span></a>

                                    @empty
                                        <center>Tidak ada laporan.</center>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"><span class="label label-info">{{ $onlinehitung }}</span> Penanganan Online</h3>
                            </div>
                            <div class="box-body">
                                <div class="list-group" style="overflow-y: auto; height: 88%">
                                    @forelse($online as $online)
                                        <a class="list-group-item" href="{{ route('detail.laporan',$online->id) }}">{{ ucwords($online->namaDepanPelapor()) }} <span class="badge bg-light-blue pull-right"><i class="fa fa-clock-o"> </i> {{ $online->getUpdatedAt()->diffForHumans() }}</span></a>

                                    @empty
                                        <center>Tidak ada laporan.</center>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title"><span class="label label-success">{{ $selesaihitung }}</span> Selesai</h3>
                            </div>
                            <div class="box-body">
                                <div class="list-group" style="overflow-y: auto; height: 88%">
                                    @forelse($selesai as $selesai)
                                        <a class="list-group-item" href="{{ route('detail.laporan',$selesai->id) }}">{{ ucwords($selesai->namaDepanPelapor()) }} <p><span class="badge bg-green">{{ $selesai->getUpdatedAt()->diffForHumans() }}</span></p></a>

                                    @empty
                                        <center>Tidak ada laporan.</center>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection