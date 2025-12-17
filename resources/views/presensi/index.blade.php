@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">DATA SISWA</h6>
                <h6 class="my-0">
                    <a href="#" class="btn btn-sm btn-primary text-white">
                        SIMPAN
                    </a>
                </h6>
            </div>

        </div>

        <div class="card-body">
            <table class="table table-hover table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Sakit</th>
                        <th scope="col">Izin</th>
                        <th scope="col">Alpa</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $i => $row)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $row->siswa->nama }}</td>
                            <td>{{ $row->sakit }}</td>
                            <td>{{ $row->izin }}</td>
                            <td>{{ $row->alpa }}</td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
