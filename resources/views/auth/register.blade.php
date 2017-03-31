@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2a3b48; color: #ffffff"><center>Daftar</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('no_id') ? ' has-error' : '' }}">
                            <label for="no_id" class="col-md-4 control-label">No ID</label>

                            <div class="col-md-6">
                                <input id="no_id" type="text" class="form-control" name="no_id" value="{{ old('no_id') }}" required autofocus placeholder="NIK/NIP">

                                @if ($errors->has('no_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_asal') ? ' has-error' : '' }}">
                            <label for="id_asal" class="col-md-4 control-label">Asal</label>

                            <div class="col-md-6">

                                <select id="id_asal" class="form-control" name="id_asal" value="{{ old('id_asal') }}" required autofocus>
                                    <option disabled selected value="0" name="id_asal">- Pilih Asal -</option>
                                    @foreach($asal as $asal)
                                        <option name="id_asal" value="{{ $asal->id }}">{{ $asal->nama_asal }}</option>
                                    @endforeach
                                </select>

                                    @if ($errors->has('id_asal'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('id_asal') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus placeholder="Nama Lengkap">

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Alamat Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Ketik Ulang Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
