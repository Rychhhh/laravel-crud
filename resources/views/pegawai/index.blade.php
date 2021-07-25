@extends('layout.main')

@section('container')
<a class="btn btn-secondary" href="{{ url('pegawai/create') }}">Tambah</a>
<table class="table table-success table-striped mt-5">
    <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Born</th>
      <th scope="col">Jabatan</th>
      <th colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item=>$value)
        <tr>
            <td class="ms-3">{{ $value->name }}</td>
            <td>{{ $value->born }}</td>
            <td>{{ $value->jabatan }}</td>
            <td>
              <a class="btn btn-primary" href="{{ url('pegawai/'.$value->id.'/edit') }}">Edit
              </a>
            </td>

            {{-- Form Delete --}}
            <td>
              <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>

        </tr>
    @endforeach
  </tbody>
  </table>
@endsection