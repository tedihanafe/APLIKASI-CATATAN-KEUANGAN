@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
        Filter Laporan Keuangan
        </div>
        <div class="card-body">
        <form method="get" action="{{ url('/laporan/hasil') }}">
        @csrf
        <div class="row justify-content-center">
        <div class="col-md-3">
        <div class="form-group">
        <label>Dari Tanggal</label>
        <input type="date" name="dari" class="formcontrol">

        @if($errors->has('dari'))
 <span class="text-danger">
 <strong>{{ $errors->first('dari') }}</strong>
 </span>
 @endif
 </div>
 </div>
 <div class="col-md-3">
 <div class="form-group">
 <label>Sampai Tanggal</label>
 <input type="date" name="sampai" class="formcontrol">
 @if($errors->has('sampai'))
 <span class="text-danger">

    <strong>{{ $errors->first('sampai') }}</strong>
 </span>
 @endif
 </div>
 </div>
 <div class="col-md-4">
 <div class="form-group">
 <label>Kategori</label>
 <select class="form-control" name="kategori">
 <option value="semua">- Semua Kategori</option>
 @foreach($kategori as $k)
 <option value="{{ $k->id }}">{{ $k->kategori }}</option>
 @endforeach
 </select>

 @if($errors->has('kategori'))
 <span class="text-danger">
 <strong>{{ $errors->first('kategori') }}</strong>
 </span>
 @endif
 </div>
 </div>
 <div class="col-md-2">
 <input type="submit" class="btn btn-primary mt-4"
value="Tampilkan">
 </div>
 </div>
 </form>

</div>
</div>
</div>
</div>
</div>
@endsection