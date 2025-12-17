@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">DATA SISWA</h6>
                <h6 class="my-0">
                    <a href="{{ route('siswa.create') }}" class="btn btn-sm btn-success text-white">
                        TAMBAH SISWA
                    </a>
                </h6>
            </div>

        </div>

        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <span class="my-0">Jumlah Siswa : {{ $data->total() }} | L : {{ $laki }} - P : {{ $perempuan }} |</span>
                <form action="{{ route('siswa.index') }}" method="GET" class="d-flex" role="search">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Pencarian..." name="search" value="{{ request()->get('search') }}">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
            <table class="table table-hover table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i => $row)
                        <tr>
                            <th scope="row">{{ $loop->iteration + ($data->currentPage() - 1) * $data->perPage() }}</th>
                            <td>{{ $row->nis }}</td>
                            <td>{{ ucwords($row->nama) }}</td>
                            <td>{{ $row->telp }}</td>
                            <td>
                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                    <div class="btn-group btn-group-sm " role="group">
                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-coreui-toggle="dropdown" aria-expanded="false">
                                            menu
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                            <li><a class="dropdown-item text-primary" href="{{ route('siswa.show', $row->id) }}">Detail</a></li>
                                            <li><a class="dropdown-item text-warning" href="{{ route('siswa.edit', $row->id) }}">Edit</a></li>
                                            <form action="{{ route('siswa.destroy', $row->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <li>
                                                    <button type="submit" class="dropdown-item btn btn-link text-danger">Delete</button>
                                                </li>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex justify-content-ened">
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
