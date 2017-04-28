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
                    <form role="form" method="post" action="{{ route('update.simpan') }}">
                        {{ csrf_field() }}
                        <tr>
                            <td style="text-align: right">Hasil Perbaikan</td>
                            <td width="1px">:</td>
                            <td>
                                <input type="hidden" name="id_gangguan" value="{{ $lgangguan->id }}">
                                <input type="hidden" name="id_admin" value="{{ Auth::user()->id }}">
                                <textarea name="hasil" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right"></td>
                            <td width="1px"></td>
                            <td>
                                <button type="submit" class="btn btn-success btn-xs">
                                    Simpan
                                </button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </section>
@endsection