@extends('templates')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="my-0">NILAI MURNI PSTS GANJIL</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h3 class="fw-bold">LAPORAN NULAI MURNI</h3>
                <h6>PENILIAN SUMATIF TENGAH SEMESTER (PSTS) GANJIL</h6>
                <h6>TAHUN AJARAN 2025/2026</h6>
                <hr>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 d-flex flex-md-row flex-column">
                    <div class="fw-bold col-md-5">
                        <span class="d-md-none">Nama Murid :</span>
                        <span class="d-none d-md-inline">Nama Murid</span>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-md-end">:</div>
                    <div class="col-md-6 ms-1 text-capitalize">{{ $nilai->siswa->nama }}</div>
                </div>
                <div class="col-md-6 d-flex flex-md-row flex-column">
                    <div class="fw-bold col-md-5">
                        <span class="d-md-none">Kelas :</span>
                        <span class="d-none d-md-inline">Kelas</span>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-md-end">:</div>
                    <div class="col-md-6 ms-1">X TKJ-2</div>
                </div>
            </div>

            <!-- Baris 2 -->
            <div class="row mb-3">
                <div class="col-md-6 d-flex flex-md-row flex-column">
                    <div class="fw-bold col-md-5">
                        <span class="d-md-none">NIS :</span>
                        <span class="d-none d-md-inline">NIS</span>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-md-end">:</div>
                    <div class="col-md-6 ms-1">{{ $nilai->siswa->nis }}</div>
                </div>
                <div class="col-md-6 d-flex flex-md-row flex-column">
                    <div class="fw-bold col-md-5">
                        <span class="d-md-none">KKTP :</span>
                        <span class="d-none d-md-inline">KKTP</span>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-md-end">:</div>
                    <div class="col-md-6 ms-1">80 - 85</div>
                </div>
            </div>

            <!-- Baris 3 -->
            <div class="row mb-3">
                <div class="col-md-6 d-flex flex-md-row flex-column">
                    <div class="fw-bold col-md-5">
                        <span class="d-md-none">NISN :</span>
                        <span class="d-none d-md-inline">NISN</span>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-md-end">:</div>
                    <div class="col-md-6 ms-1">{{ $nilai->siswa->nilai }}</div>
                </div>
                <div class="col-md-6 d-flex flex-md-row flex-column">
                    <div class="fw-bold col-md-5">
                        <span class="d-md-none">Program Keahlian :</span>
                        <span class="d-none d-md-inline">Program Keahlian</span>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-md-end">:</div>
                    <div class="col-md-6 ms-1">Teknik Jaringan Komputer dan Telekomunikasi</div>
                </div>
            </div>

            <div class="row mb-3 justify-content-end">
                <div class="col-md-3">
                    <a href="#" class="btn btn-success text-white w-100">Print PDF</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th class="text-start">Mata Pelajaran</th>
                            <th>Nilai</th>
                            <th>Kriteria</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
                        <tr>
                            <td class="text-start">Pendidikan Agama & Budi Pekerti</td>
                            <td>{{ $nilai->agm }}</td>
                            <td>{{ $nilai->agm >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Pendidikan Pancasila</td>
                            <td>{{ $nilai->pnc }}</td>
                            <td>{{ $nilai->pnc >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Bahasa Indonesia</td>
                            <td>{{ $nilai->ind }}</td>
                            <td>{{ $nilai->ind >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Pendidikan Jasmani, Olahraha & Kesehatan</td>
                            <td>{{ $nilai->pjk }}</td>
                            <td>{{ $nilai->pjk >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Sejarah</td>
                            <td>{{ $nilai->sej }}</td>
                            <td>{{ $nilai->sej >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Seni Budaya</td>
                            <td>{{ $nilai->sbd }}</td>
                            <td>{{ $nilai->sbd >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Bahasa Jawa</td>
                            <td>{{ $nilai->jwa }}</td>
                            <td>{{ $nilai->jwa >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Matematika</td>
                            <td>{{ $nilai->mtk }}</td>
                            <td>{{ $nilai->mtk >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Bahasa Inggris</td>
                            <td>{{ $nilai->ing }}</td>
                            <td>{{ $nilai->ing >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Informatika</td>
                            <td>{{ $nilai->inf }}</td>
                            <td>{{ $nilai->inf >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Projek Ilmu Pengetahuan Alam & Sosial</td>
                            <td>{{ $nilai->pps }}</td>
                            <td>{{ $nilai->pps >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Profesi dan Kewirausahaan di Bidang TJKT</td>
                            <td>{{ $nilai->pdk1 }}</td>
                            <td>{{ $nilai->pdk1 >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Dasar - Dasar TJKT</td>
                            <td>{{ $nilai->pdk2 }}</td>
                            <td>{{ $nilai->pdk2 >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Media Jaringan & Telekomunikasi</td>
                            <td>{{ $nilai->pdk3 }}</td>
                            <td>{{ $nilai->pdk3 >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Proses Bisnis di Bidang TJKT</td>
                            <td>{{ $nilai->pdk4 }}</td>
                            <td>{{ $nilai->pdk4 >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>
                        <tr>
                            <td class="text-start">Koding & Kecerdasan Artificial</td>
                            <td>{{ $nilai->kka }}</td>
                            <td>{{ $nilai->kka >= 80 ? 'Lulus' : 'Tidak Lulus' }}</td>
                        </tr>

                        <tr class="table-dark">
                            <th>Jumlah Nilai</th>
                            <th colspan="2"></th>
                        </tr>
                        <tr class="table-dark">
                            <th>Rata-Rata Nilai</th>
                            <th colspan="2"></th>
                        </tr>
                        <tr class="table-dark">
                            <th>Peringkat Ke-</th>
                            <th colspan="2">dari {{ $nilai->siswa->count() }} siswa</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
