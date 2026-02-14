@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">Rapor PSAS Genap</h6>
                <h6 class="my-0">
                    <a href="/genap/psts/nilai-murni/export" class="btn btn-sm btn-danger text-white" target="_blank">
                        Export PDF
                    </a>
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-bordered text-center">
                    <thead class="text-nowrap">
                        <tr class="align-middle">
                            <th scope="col" rowspan="2">#</th>
                            <th scope="col" rowspan="2">Nama</th>
                            <th scope="col" colspan="12">Mata Pelajaran</th>
                            <th scope="col" rowspan="2">Jumlah</th>
                            <th scope="col" rowspan="2">Rata-rata</th>
                            <th scope="col" rowspan="2">Rank</th>
                        </tr>
                        <tr class="align-middle">
                            <th scope="col">AGM</th>
                            <th scope="col">PANC</th>
                            <th scope="col">INDO</th>
                            <th scope="col">PJOK</th>
                            <th scope="col">SEJ</th>
                            <th scope="col">MTK</th>
                            <th scope="col">INGG</th>
                            <th scope="col">INFO</th>
                            <th scope="col">PIPAS</th>
                            <th scope="col">DDK</th>
                            <th scope="col">KKA</th>
                            <th scope="col">JWA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $i => $row)
                            <tr class="{{ $row->rank == 1 || $row->rank == 2 || $row->rank == 3 ? 'table-success' : '' }}">
                                <td>{{ $i + 1 }}</td>
                                <td class="text-nowrap text-start text-capitalize">{{ $row->siswa->nama }}</td>
                                <td>{{ $row->agm }}</td>
                                <td>{{ $row->panc }}</td>
                                <td>{{ $row->indo }}</td>
                                <td>{{ $row->pjok }}</td>
                                <td>{{ $row->sej }}</td>
                                <td>{{ $row->ingg }}</td>
                                <td>{{ $row->info }}</td>
                                <td>{{ $row->pipas }}</td>
                                <td>{{ $row->ddk }}</td>
                                <td>{{ $row->kka }}</td>
                                <td>{{ $row->jwa }}</td>
                                <td>{{ $row->ddk }}</td>
                                <td>{{ $row->jml }}</td>
                                <td>{{ $row->rerata }}</td>
                                <td>{{ $row->rank }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="23" class="bg-secondary">
                                    Tidak ada data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
