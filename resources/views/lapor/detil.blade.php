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
                            <td style="text-align: right">Penanganan</td>
                            <td width="1px">:</td>
                            <td>
                                @if($lgangguan->id_status == 1)

                                    <form role="form" method="POST" action="{{ route('penanganan.offline.simpan') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_gangguan" value="{{ $lgangguan->id }}">
                                        <input type="hidden" name="id_jenis_penanganan" value="1">
                                        <button type="submit" class="btn btn-warning btn-xs">Offline</button>
                                    </form>

                                    <form role="form" method="POST" action="{{ route('penanganan.online.simpan') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_gangguan" value="{{ $lgangguan->id }}">
                                        <input type="hidden" name="id_jenis_penanganan" value="2">
                                        <button type="submit" class="btn btn-info btn-xs">Online</button>
                                    </form>

                                @elseif($lgangguan->id_status == 2 or $lgangguan->id_status == 3)
                                    <a href="{{ route('update.gangguan',$lgangguan->id) }}" class="btn btn-success btn-xs">
                                        Update
                                    </a>
                                @else
                                    Penanganan Laporan telah selesai secara @foreach($lgangguan->penanganan as $index => $jenis)
                                    {{ ucfirst($jenis->nama) }}
                                    @endforeach
                                    oleh: <br> @foreach($lgangguan->admin as $index => $admin)
                                        {{ $index+1 }}. {{ ucwords($admin->nama) }}<br>
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    </section>
@endsection