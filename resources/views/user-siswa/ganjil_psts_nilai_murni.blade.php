@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">Nilai Murni PSTS Ganjil</h6>
                <h6 class="my-0">
                    <a href="#" class="btn btn-sm btn-danger text-white disabled" target="_blank">
                        Export PDF
                    </a>
                </h6>
            </div>

        </div>

        <div class="card-body">

            {{-- <table class="table table-sm table-hover table-bordered text-center">
                    <thead class="text-nowrap">
                        <tr class="align-middle">
                            <th scope="col" rowspan="2">#</th>
                            <th scope="col" rowspan="2">Nama</th>
                            <th scope="col" colspan="16">Mata Pelajaran</th>
                            <th scope="col" rowspan="2">Jumlah</th>
                            <th scope="col" rowspan="2">Rerata</th>
                            <th scope="col" rowspan="2">Rank</th>
                        </tr>
                        <tr class="align-middle">
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
                        @forelse ($data as $i => $row)
                            <tr class="{{ $row->rank == 1 || $row->rank == 2 || $row->rank == 3 ? 'table-success' : '' }}">
                                <td>{{ $i + 1 }}</td>
                                <td class="text-nowrap text-start text-capitalize">{{ $row->siswa->nama }}</td>
                                <td>{{ $row->agm }}</td>
                                <td>{{ $row->panc }}</td>
                                <td>{{ $row->indo }}</td>
                                <td>{{ $row->pjok }}</td>
                                <td>{{ $row->sej }}</td>
                                <td>{{ $row->sbd }}</td>
                                <td>{{ $row->jwa }}</td>
                                <td>{{ $row->mtk }}</td>
                                <td>{{ $row->ingg }}</td>
                                <td>{{ $row->info }}</td>
                                <td>{{ $row->pipas }}</td>
                                <td>{{ $row->ddk1 }}</td>
                                <td>{{ $row->ddk2 }}</td>
                                <td>{{ $row->ddk3 }}</td>
                                <td>{{ $row->ddk4 }}</td>
                                <td>{{ $row->kka }}</td>
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
                </table> --}}

            <!-- HEADER -->
            <div class="text-center mb-3">
                <h6 class="fw-bold mb-1">LAPORAN NILAI MURNI</h6>
                <div class="fw-bold">PENILAIAN SUMATIF TENGAH SEMESTER (PSTS) GANJIL</div>
                <div class="fw-bold">TAHUN AJARAN 2025/2026</div>
            </div>
            @foreach ($data as $i => $row)
                <!-- IDENTITAS SISWA -->
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <div class="row mb-1">
                            <div class="col-4 fw-semibold">Nama</div>
                            <div class="col-8 text-capitalize">: {{ $row->siswa->nama }}</div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-4 fw-semibold">NIS</div>
                            <div class="col-8">: {{ $row->siswa->nis }}</div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-4 fw-semibold">NISN</div>
                            <div class="col-8">: {{ $row->siswa->nisn }}</div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="row mb-1">
                            <div class="col-4 fw-semibold">Kelas</div>
                            <div class="col-8">: X TKJ-2</div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-4 fw-semibold">KKTP</div>
                            <div class="col-8">: 80 - 89</div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-4 fw-semibold">Program</div>
                            <div class="col-8">
                                : Teknik JKT
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TABEL NILAI -->
                <table class="table table-bordered table-sm">
                    <thead class="text-center fw-bold">
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Nilai</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- KELOMPOK A -->
                        <tr class="fw-bold">
                            <td colspan="4">A. KELOMPOK MAPEL UMUM</td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Pendidikan Agama dan Budi Pekerti</td>
                            <td class="text-center">{{ $row->agm }}</td>
                            <td>{{ $row->agm == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Pendidikan Pancasila</td>
                            <td class="text-center">{{ $row->panc }}</td>
                            <td>{{ $row->panc == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Bahasa Indonesia</td>
                            <td class="text-center">{{ $row->indo }}</td>
                            <td>{{ $row->indo == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Pendidikan Jasmani,
                                Olahraga, dan Kesehatan</td>
                            <td class="text-center">{{ $row->pjok }}</td>
                            <td>{{ $row->pjok == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Sejarah</td>
                            <td class="text-center">{{ $row->sej }}</td>
                            <td>{{ $row->sej == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Seni Budaya</td>
                            <td class="text-center">{{ $row->sbd }}</td>
                            <td>{{ $row->sbd == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Bahasa Jawa</td>
                            <td class="text-center">{{ $row->jwa }}</td>
                            <td>{{ $row->jwa == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>

                        <!-- KELOMPOK B -->
                        <tr class="fw-bold">
                            <td colspan="4">B. KELOMPOK MAPEL KEJURUAN</td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Matematika</td>
                            <td class="text-center">{{ $row->mtk }}</td>
                            <td>{{ $row->mtk == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Bahasa Inggris</td>
                            <td class="text-center">{{ $row->ingg }}</td>
                            <td>{{ $row->ingg == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Informatika</td>
                            <td class="text-center">{{ $row->info }}</td>
                            <td>{{ $row->info == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Projek P5</td>
                            <td class="text-center">{{ $row->pipas }}</td>
                            <td>{{ $row->pipas == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Profesi & Kewirausahaan TJKT</td>
                            <td class="text-center">{{ $row->ddk1 }}</td>
                            <td>{{ $row->ddk1 == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Dasar-dasar TJKT</td>
                            <td class="text-center">{{ $row->ddk2 }}</td>
                            <td>{{ $row->ddk2 == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Media & Jaringan Telekomunikasi</td>
                            <td class="text-center">{{ $row->ddk3 }}</td>
                            <td>{{ $row->ddk3 == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>Proses Bisnis TJKT</td>
                            <td class="text-center">{{ $row->ddk4 }}</td>
                            <td>{{ $row->ddk4 == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>Koding & Kecerdasan Artifisial</td>
                            <td class="text-center">{{ $row->kka }}</td>
                            <td>{{ $row->kka == 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>

                        <!-- TOTAL -->
                        <tr class="fw-bold">
                            <td colspan="2">Jumlah Nilai</td>
                            <td colspan="2" class="text-center">{{ $row->jml }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Rata-Rata</td>
                            <td colspan="2" class="text-center">{{ $row->rerata }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Peringkat</td>
                            <td colspan="2" class="text-center">{{ $row->rank }} dari {{ $jml_siswa }} Siswa</td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
@endsection
