@extends('layout.main')

@section('container')
<form method="POST" action="{{ url('pegawai') }}">
    @csrf

    {{-- Name --}}
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
      <div class="form-text">Masukkan Nama Anda</div>
    </div>

    {{-- Born --}}
    <div class="mb-3">
      <label>Born</label>
      <input type="text" name="born" class="form-control">
    </div>

    {{-- Jabatan --}}
    <div class="mb-3">
      <label>Jabatan</label>
      <input type="text" name="jabatan" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

{{-- <form method="POST" action="{{ url('pegawai') }}">
    @csrf
    Name : <input type="text" name="name"> <br/>
    Born : <input type="text" name="born"> <br/>
    Jabatan : <input type="text" name="jabatan"> <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> --}}