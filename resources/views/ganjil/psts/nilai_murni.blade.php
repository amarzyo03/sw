@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">Nilai Murni PSTS Ganjil</h6>
                {{-- <h6 class="my-0">
                    <a href="#" class="text-decoration-none text-success">
                        TAMBAH SISWA
                    </a>
                </h6> --}}
            </div>

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                        <tr class="align-middle">
                            <th scope="col" rowspan="2">#</th>
                            <th scope="col" rowspan="2">NIS</th>
                            <th scope="col" rowspan="2">NISN</th>
                            <th scope="col" rowspan="2">Nama Siswa</th>
                            <th scope="col" colspan="16">Mata Pelajaran</th>
                        </tr>
                        <tr>
                            <th scope="col">AGM</th>
                            <th scope="col">PNC</th>
                            <th scope="col">IND</th>
                            <th scope="col">PJK</th>
                            <th scope="col">SEJ</th>
                            <th scope="col">SBD</th>
                            <th scope="col">JWA</th>
                            <th scope="col">MTK</th>
                            <th scope="col">ING</th>
                            <th scope="col">INF</th>
                            <th scope="col">PPS</th>
                            <th scope="col">PDK 1</th>
                            <th scope="col">PDK 2</th>
                            <th scope="col">PDK 3</th>
                            <th scope="col">PDK 4</th>
                            <th scope="col">KKA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilaiMurniPSTSGanjil as $i => $row)
                            <tr role="button">
                                <td scope="col">{{ $i + 1 }}</td>
                                <td scope="col">{{ $row->siswa->nis }}</td>
                                <td scope="col">{{ $row->siswa->nisn }}</td>
                                <td scope="col" class="text-start text-capitalize">{{ $row->siswa->nama }}</td>
                                <td scope="col">{{ $row->agm }}</td>
                                <td scope="col">{{ $row->pnc }}</td>
                                <td scope="col">{{ $row->ind }}</td>
                                <td scope="col">{{ $row->pjk }}</td>
                                <td scope="col">{{ $row->sej }}</td>
                                <td scope="col">{{ $row->sbd }}</td>
                                <td scope="col">{{ $row->jwa }}</td>
                                <td scope="col">{{ $row->mtk }}</td>
                                <td scope="col">{{ $row->ing }}</td>
                                <td scope="col">{{ $row->inf }}</td>
                                <td scope="col">{{ $row->pps }}</td>
                                <td scope="col">{{ $row->pdk1 }}</td>
                                <td scope="col">{{ $row->pdk2 }}</td>
                                <td scope="col">{{ $row->pdk3 }}</td>
                                <td scope="col">{{ $row->pdk4 }}</td>
                                <td scope="col">{{ $row->kka }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
