@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">NILAI MURNI - GANJIL</h6>
                <h6 class="my-0">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="#" class="btn btn-primary text-white">IMPORT SISWA</a>
                        <a href="#" class="btn btn-success text-white">INPUT NILAI</a>
                    </div>
                </h6>
            </div>

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="align-middle">
                        <tr class="text-center">
                            <th rowspan="2">No.</th>
                            <th rowspan="2">NIS</th>
                            <th rowspan="2">Nama Siswa</th>
                            <th colspan="{{ $data['colspan'] }}">Mata Pelajaran</th>
                            <th rowspan="2">Jml Nilai</th>
                            <th rowspan="2">Rata-rata</th>
                            <th rowspan="2">Rank</th>
                        </tr>
                        <tr>
                            @foreach ($data['mapel'] as $i => $row)
                                <th class="text-uppercase">{{ $row->singkatan }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['siswa'] as $i => $row)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $row->nis }}</td>
                                <td>{{ $row->nama }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
