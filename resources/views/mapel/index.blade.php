<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
</div>
@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">DATA MATA PELAJARAN</h6>
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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i => $row)
                        <tr class="align-middle">
                            <td>{{ $i + 1 }}</td>
                            <td>{{ ucwords($row->nama) }}</td>
                            <td>{{ strtoupper($row->singkatan) }}</td>
                            <td>
                                <button type="button" class="btn btn-link text-warning text-decoration-none fw-bold"
                                    onclick="window.location='{{ route('mapel.edit', $row->id) }}'">Edit
                                </button>
                                <form action="{{ route('mapel.destroy', $row->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="btn btn-link text-danger text-decoration-none fw-bold">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
