@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">DATA MAPEL</h6>
                <h6 class="my-0">
                    <a href="{{ route('mapel.create') }}" class="text-decoration-none text-success">
                        TAMBAH MAPEL
                    </a>
                </h6>
            </div>

        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Singkatan</th>
                        <th scope="col">Guru</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mapel as $i => $row)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->singkatan }}</td>
                            <td>{{ $row->guru }}</td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <a href="{{ route('mapel.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('mapel.destroy', $row->id) }}" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
