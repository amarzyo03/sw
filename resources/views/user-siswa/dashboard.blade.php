@extends('templates')
@section('content')
    <!-- Profil -->
    <div class="card mb-2">
        <div class="card-body d-flex align-items-center">
            <img src="{{ $siswa->foto ? asset('img/' . $siswa->foto) : asset('img/default.jpg') }}" class="rounded-circle me-3 img-fluid" width="60" height="60" alt="Foto Siswa">
            <div>
                <h5 class="mb-1">{{ ucwords($siswa->nama) }}</h5>
                <small class="text-muted">
                    NIS: {{ $siswa->nis }} | NISN: {{ $siswa->nisn }} | <a href="{{ route('siswa.show-profil') }}" class="text-decoration-none fw-semibold">Detail</a>
                </small>
            </div>
        </div>
    </div>

    <!-- Ringkasan -->
    <div class="row mb-2 g-2 align-items-stretch">

        <!-- Informasi Siswa -->
        <div class="col-md-3 col-6">
            <div class="card h-100 text-center">
                <div class="card-body d-flex flex-column">
                    <h6 class="text-muted">Informasi</h6>
                    <h5 class="fw-bold mb-2">X TKJ-2</h5>
                    <small class="text-muted">Tahun 2024/2025</small>
                </div>
            </div>
        </div>

        <!-- Kehadiran -->
        <div class="col-md-3 col-6">
            <div class="card h-100">
                <div class="card-body d-flex flex-column text-center">
                    <h6 class="text-muted">Kehadiran</h6>
                    <h5 class="fw-bold mb-2">{{ $persen_hadir }}%</h5>
                    <div class="d-flex justify-content-around mt-auto">
                        <small>S: {{ $presensi->sakit }}</small>
                        <small>I: {{ $presensi->izin }}</small>
                        <small>A: {{ $presensi->alpa }}</small>
                    </div>
                    <small class="text-muted mt-2">Update: {{ $presensi->updated_at }}</small>
                </div>
            </div>
        </div>

        <!-- Penilaian Ganjil -->
        <div class="col-md-3 col-6">
            <div class="card h-100 text-center">
                <div class="card-body d-flex flex-column">
                    <h6 class="text-muted">Penilaian Ganjil</h6>
                    <div class="d-grid gap-2 mt-auto">
                        <a href="{{ route('siswa.ganjil-nilai-murni') }}" class="btn btn-sm btn-primary">
                            PSTS : Nilai Murni
                        </a>
                        <a href="{{ route('siswa.ganjil-rapor') }}" class="btn btn-sm btn-success text-white">
                            PSAS : Rapor
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Penilaian Genap -->
        <div class="col-md-3 col-6">
            <div class="card h-100 text-center">
                <div class="card-body d-flex flex-column">
                    <h6 class="text-muted">Penilaian Ganjil</h6>
                    <div class="d-grid gap-2 mt-auto">
                        <a href="{{ route('siswa.genap-nilai-murni') }}" class="btn btn-sm btn-primary">
                            PSTS : Nilai Murni
                        </a>
                        <a href="{{ route('siswa.genap-rapor') }}" class="btn btn-sm btn-success text-white">
                            PSAS : Rapor
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
