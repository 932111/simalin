@extends('layouts.pelapor')

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
        @if(session()->has('message'))
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                            <div class="alert alert-success">
                                Laporan telah dikirim. Kode tracking Anda: <h3><code>{{ session()->get('message') }}</code></h3> Silakan cek status laporan Anda dengan kode tersebut.
                            </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection




