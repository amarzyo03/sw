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
                <h6 class="my-0">Jumlah Siswa : {{ $data->total() }}</h6>
                <form action="{{ route('siswa.index') }}" method="GET" class="d-flex" role="search">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Pencarian..." name="search"
                            value="{{ request()->get('search') }}">
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
                    @foreach ($data as $siswa)
                        <tr>
                            <th scope="row">{{ $loop->iteration + ($data->currentPage() - 1) * $data->perPage() }}</th>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ ucwords($siswa->nama) }}</td>
                            <td>{{ $siswa->telp }}</td>
                            <td>
                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                    <div class="btn-group btn-group-sm " role="group">
                                        <button id="btnGroupVerticalDrop1" type="button"
                                            class="btn btn-primary dropdown-toggle" data-coreui-toggle="dropdown"
                                            aria-expanded="false">
                                            menu
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                            <li><a class="dropdown-item text-primary"
                                                    href="{{ route('siswa.show', $siswa->id) }}">Detail</a></li>
                                            <li><a class="dropdown-item text-warning"
                                                    href="{{ route('siswa.edit', $siswa->id) }}">Edit</a></li>
                                            <li><a class="dropdown-item text-danger"
                                                    href="/siswa/{{ $siswa->id }}/delete">Delete</a></li>
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
