@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah Kategori
                    <a href="{{ url('/kategori') }}" class="float-right btn btn-sm btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('/kategori/aksi') }}">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kategori Baru</label>
                            <input type="text" name="kategori" class="form-control">
                            @if($errors->has('kategori'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('kategori') }}</strong>
                            </span>
                            @endif
                        </div>
                        <input type="submit" class="btn btn-primary mt-2" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
