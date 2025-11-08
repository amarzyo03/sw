@extends('templates');
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="my-0">SHOW SISWA</h6>
        </div>

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="existing_foto" value="{{ $siswa->foto }}">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-4">
                        <img id="previewFoto" src="{{ $siswa->foto ? asset('img/' . $siswa->foto) : asset('img/default.jpg') }}" alt="Foto Siswa" class="img-fluid rounded mx-auto d-block">

                    </div>
                    <div class="col-md-8">

                        <div class="mb-3 row">
                            <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="nisn" name="nisn" value=": {{ $siswa->nisn }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="nis" name="nis" value=": {{ $siswa->nis }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext text-uppercase" id="nama" name="nama" value=": {{ $siswa->nama }}" disabled>
                            </div>
                        </div>

                        <div class="mb-2 row">
                            <label for="jenis_kelamin" class="col-sm-3 col-form-label">L/P</label>
                            <div class="col-sm-9">
                                @if ($siswa->jenis_kelamin == 'l')
                                    <span>:</span>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_kelamin" id="laki_laki" checked disabled>
                                        <label class="form-check-label" for="laki_laki" role="button">Laki-laki</label>
                                    </div>
                                @endif
                                @if ($siswa->jenis_kelamin == 'p')
                                    <span>:</span>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_kelamin" id="perempuan" checked disabled>
                                        <label class="form-check-label" for="perempuan" role="button">Perempuan</label>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tempat_lahir" class="col-sm-3 col-form-label">TTL</label>
                            <div class="col-sm-9">
                                <div class="row g-0">
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control-plaintext text-capitalize mb-2" id="tempat_lahir" name="tempat_lahir" value=": {{ $siswa->tempat_lahir }}" disabled>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-plaintext" id="tanggal_lahir" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext text-capitalize" id="tanggal_lahir" name="tanggal_lahir" value=": {{ $siswa->agama }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="telp" class="col-sm-3 col-form-label">No. Telp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="telp" name="telp" value=": {{ $siswa->telp }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control-plaintext text-capitalize" id="alamat" name="alamat" rows="1" cols="1" placeholder="Masukkan Alamat" disabled>: {{ $siswa->alamat }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                @if ($siswa->foto)
                                    <input type="text" class="form-control-plaintext" id="foto" name="foto" value=" File Saat ini: {{ $siswa->foto }}" disabled>
                                @else
                                    <input type="text" class="form-control-plaintext" id="foto" name="foto" value=" File Saat ini: Belum ada foto" disabled>
                                @endif
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-9 offset-sm-3">
                                <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-primary w-25">Edit</a>
                                <a href="{{ route('siswa.index') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
