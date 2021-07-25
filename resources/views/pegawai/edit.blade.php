@extends('layout.main')

@section('container')
<form method="POST" action="{{ url('pegawai/'.$updatePegawai->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    {{-- Name --}}
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="{{ $updatePegawai->name }}">
      <div class="form-text">Masukkan Nama Anda</div>
    </div>

    {{-- Born  --}}
    <div class="mb-3">
      <label>Born</label>
      <input type="text" name="born" class="form-control" value="{{ $updatePegawai->born }}">
    </div>

    {{-- Jabatan --}}
    <div class="mb-3">
      <label>Jabatan</label>
      <input type="text" name="jabatan" class="form-control" value="{{ $updatePegawai->jabatan }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection