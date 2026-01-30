@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">Presensi</h6>
                <h6 class="my-0">
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('presensi.edit') }}" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Export PDF</a>
                    </div>
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th rowspan="2" class="align-middle text-center">No</th>
                            <th rowspan="2" class="align-middle text-center">Nama Siswa</th>
                            <th colspan="3" class="text-center">Kehadiran</th>
                        </tr>
                        <tr>
                            <th class="text-center">Sakit</th>
                            <th class="text-center">Izin</th>
                            <th class="text-center">Alfa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i => $row)
                            <tr>
                                <td class="text-center">{{ $i + 1 }}</td>
                                <td class="text-capitalize">{{ $row->siswa->nama }}</td>
                                <td class="text-center">{{ $row->sakit }}</td>
                                <td class="text-center">{{ $row->izin }}</td>
                                <td class="text-center">{{ $row->alpa }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
