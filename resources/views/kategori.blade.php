@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Kategori
                    <a href="{{ url('/kategori/tambah') }}" class="float-right btn btn-sm btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    @if(Session::has('sukses'))
                    <div class="alert alert-success">
                    {{ Session::get('sukses') }}
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Kategori</th>
                                <th width="25%" class="text-center">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($kategori as $k)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $k->kategori }}</td>
                                <td class="text-center">
                                    <a href="{{ url('/kategori/edit/'.$k->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ url('/kategori/hapus/'.$k->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
