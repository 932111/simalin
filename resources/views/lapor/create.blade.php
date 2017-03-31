@extends('layouts.app')

@section('content')
    </br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #2a3b48; color: #ffffff"><center>Entri Data Gangguan</center></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('lapor.submit') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('id_jenis') ? ' has-error' : '' }}">
                                <label for="id_jenis" class="col-md-4 control-label">Jenis Gangguan</label>

                                <div class="col-md-6">
                                    <select name="id_jenis" id="id_jenis" class="form-control jgangguan" value="{{ old('id_jenis') }}" required>
                                        <option disabled="true" selected="true">- Pilihan -</option>
                                    @forelse($jgangguan as $jgangguan)
                                            <option value="{{ $jgangguan->id }}">{{ $jgangguan->nama_layanan }}</option>
                                        @empty

                                        @endforelse
                                    </select>
                                    @if ($errors->has('id_jenis'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_jenis') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('id_app_jar') ? ' has-error' : '' }} cgangguan">
                                <label for="id_app_jar" class="col-md-4 control-label"></label>

                                <div class="col-md-6">
                                    <select name="id_app_jar" id="id_app_jar" class="form-control jappjar" value="{{ old('id_app_jar') }}" required>
                                        <option value="0" disabled selected>- Pilihan -</option>
                                    </select>

                                    @if ($errors->has('id_app_jar'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_app_jar') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                                <label for="detail" class="col-md-4 control-label"></label>

                                <div class="col-md-6">
                                    <textarea name="detail" id="detail" class="form-control" value="{{ old('detail') }}" placeholder="Detail Gangguan">

                                    </textarea>

                                    @if ($errors->has('detail'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('detail') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-danger col-md-3">
                                        Lapor
                                    </button>
                                </div>
                            </div>
                        </form>

                        <script src="{{ url('/assets/vendor/jquery/jquery.min.js') }}"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $(document).on('change','.jgangguan', function () {
                                    //console.log('its change');

                                    var id_jenis=$(this).val();
                                    //console.log(id_jenis);
                                    var div=$(this).parents();
                                    var op="";

                                    switch (id_jenis){
                                        case '1' : $.ajax({
                                                        type:'get',
                                                        url:'{!! URL::to('data-jar') !!}',
                                                        data:{'id':id_jenis},
                                                        success:function (data) {
                                                            //console.log('success');
                                                            //console.log(data);
                                                            //console.log(data);
                                                            op+='<option value="0" selected disabled>- Pilih Jaringan -</option>';
                                                            for(i=0;i<data.length;i++){
                                                                op+='<option value="'+data[i].id+'">'+data[i].nama_jaringan+'</option>';
                                                            }
                                                            div.find('.jappjar').html("");
                                                            div.find('.jappjar').append(op);

                                                        },
                                                        error:function () {

                                                        }
                                                    });
                                        break;
                                        case '2' : $.ajax({
                                                        type:'get',
                                                        url:'{!! URL::to('data-app') !!}',
                                                        data:{'id':id_jenis},
                                                        success:function (data) {
                                                            //console.log('success');
                                                            //console.log(data);
                                                            //console.log(data);
                                                            op+='<option value="0" selected disabled>- Pilih Aplikasi -</option>';
                                                            for(i=0;i<data.length;i++){
                                                                op+='<option value="'+data[i].id+'">'+data[i].nama+'</option>';
                                                            }
                                                            div.find('.jappjar').html("");
                                                            div.find('.jappjar').append(op);

                                                        },
                                                        error:function () {

                                                        }
                                                    });
                                        break;
                                    }

                                });
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>

@endsection