@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">Rapor Bayangan PSA Ganjil</h6>
                <h6 class="my-0">
                    <a href="#" class="btn btn-sm btn-danger text-white disabled" target="_blank">
                        Export PDF
                    </a>
                </h6>
            </div>

        </div>

        <div class="card-body">

            <!-- HEADER -->
            <div class="text-center mb-3">
                <h6 class="fw-bold mb-1">RAPOR BAYANGAN SEMESTER GANJIL</h6>
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
                            <td colspan="4">Mata Pelajaran Umum</td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Pendidikan Agama Islam dan Budi Pekerti</td>
                            <td class="text-center">{{ $row->agm }}</td>
                            <td>{{ $row->agm >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Pendidikan Pancasila</td>
                            <td class="text-center">{{ $row->panc }}</td>
                            <td>{{ $row->panc >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Bahasa Indonesia</td>
                            <td class="text-center">{{ $row->indo }}</td>
                            <td>{{ $row->indo >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
                            <td class="text-center">{{ $row->pjok }}</td>
                            <td>{{ $row->pjok >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Sejarah</td>
                            <td class="text-center">{{ $row->sej }}</td>
                            <td>{{ $row->sej >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>

                        <!-- KELOMPOK B -->
                        <tr class="fw-bold">
                            <td colspan="4">Mata Pelajaran Kejuruan</td>
                        </tr>

                        <tr>
                            <td class="text-center">6</td>
                            <td>Matematika</td>
                            <td class="text-center">{{ $row->mtk }}</td>
                            <td>{{ $row->mtk >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Bahasa Inggris</td>
                            <td class="text-center">{{ $row->ingg }}</td>
                            <td>{{ $row->ingg >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>Informatika</td>
                            <td class="text-center">{{ $row->info }}</td>
                            <td>{{ $row->info >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>Projek IPAS</td>
                            <td class="text-center">{{ $row->pipas }}</td>
                            <td>{{ $row->pipas >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td>Dasar - dasar Teknik JKT</td>
                            <td class="text-center">{{ $row->ddk }}</td>
                            <td>{{ $row->ddk >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>
                        <!-- KELOMPOK B -->
                        <tr class="fw-bold">
                            <td colspan="4">Mata Pelajaran Pilihan</td>
                        </tr>

                        <tr>
                            <td class="text-center">11</td>
                            <td>Koding & Kecerdasan Artifisial</td>
                            <td class="text-center">{{ $row->kka }}</td>
                            <td>{{ $row->kka >= 80 ? 'Tuntas' : 'Remedial' }}</td>
                        </tr>

                        <!-- KELOMPOK C -->
                        <tr class="fw-bold">
                            <td colspan="4">Muatan Lokal</td>
                        </tr>

                        <tr>
                            <td class="text-center">12</td>
                            <td>Bahasa Jawa</td>
                            <td class="text-center">{{ $row->jwa }}</td>
                            <td>{{ $row->jwa >= 80 ? 'Tuntas' : 'Remedial' }}</td>
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
