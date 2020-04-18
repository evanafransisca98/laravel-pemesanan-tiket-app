@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Upload Kategori</div>
                      <div class="card-body">
                          @include('validasi')
                            {!! Form::open(['route'=>'kategori.upload.excel','method'=>'POST','enctype'=>'multipart/form-data'])!!}

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Upload kategori</label>
                                    <div class="col-md-6">
                                        {!! Form::file('file',['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Upload data</button>
                                        <a href="{{ route('kategori.index') }}" class="btn btn-info">Kembali</a>
                                    </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection