@extends('layouts.admin')

@section('content')
    <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #2a3b48; color: #ffffff"><center>Petugas Penanganan Offline</center></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('petugas.gangguan') }}">
                            {{ csrf_field() }}

                            <table class="table">
                                <tr>
                                    <td width="30%" style="text-align: right">Laporan</td>
                                    <td width="1px">:</td>
                                    <td>
                                        {{ $lgangguan->getNoTrack() }}
                                    </td>
                                </tr>
                                <tr>
                                    <div class="form-group{{ $errors->has('id[]') ? ' has-error' : '' }}">
                                        <td width="30%" style="text-align: right">Tim Teknis</td>
                                        <td width="1px">:</td>
                                        <td>
                                            @forelse($admin as $admin)
                                                <div class="col-md-6">
                                                    <input id="id" type="checkbox" name="id[]" value="{{ $admin->id }}" autofocus> {{ ucwords($admin->nama) }}
                                                    <input type="hidden" name="id_gangguan" value="{{ $lgangguan->id }}">
                                                    <input type="hidden" name="no_track" value="{{ $lgangguan->getNoTrack() }}">
                                                </div><br>
                                            @empty
                                                Tidak Ada Petugas
                                            @endforelse
                                                @if ($errors->has('id[]'))
                                                    <span class="help-block">
                                                            <strong style="color: red">{{ $errors->first('id[]') }}</strong>
                                                        </span>
                                                @endif
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <td width="30%" style="text-align: right"></td>
                                    <td width="1px"></td>
                                    <td><button type="submit" class="btn btn-primary btn-xs"> SIMPAN</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection