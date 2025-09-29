@extends('templates');
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="my-0">EDIT SISWA</h6>
        </div>

        <form action="/user-siswa/update" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="existing_foto" value="{{ $siswa->foto }}">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">

                        <div class="mb-3 row">
                            <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nisn" name="nisn"
                                    value="{{ $siswa->nisn }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nis" name="nis"
                                    value="{{ $siswa->nis }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nik" name="nik"
                                    value="{{ $siswa->nik }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $siswa->nama }}">
                            </div>
                        </div>

                        <div class="mb-2 row">
                            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki"
                                        value="L" {{ $siswa->jenis_kelamin == 'l' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="laki_laki" role="button">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                        value="P" {{ $siswa->jenis_kelamin == 'p' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan" role="button">Perempuan</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control mb-2" id="tempat_lahir"
                                            name="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                            value="{{ $siswa->tanggal_lahir }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="agama" id="agama">
                                    <option value="{{ $siswa->agama }}" selected>{{ $siswa->agama }}</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="lainya">Lainya</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="telp" class="col-sm-3 col-form-label">No. Telp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="telp" name="telp"
                                    value="{{ $siswa->telp }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat">{{ $siswa->alamat }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" id="foto" name="foto"
                                    accept="image/*">
                                @if ($siswa->foto)
                                    <small class="text-muted">File saat ini: {{ $siswa->foto }}</small>
                                @else
                                    <small class="text-muted">Belum ada foto</small>
                                @endif
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-primary w-25">Simpan</button>
                                <a href="/user-siswa/show" class="btn btn-danger">Batal</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <img id="previewFoto"
                            src="{{ $siswa->foto ? asset('img/' . $siswa->foto) : asset('img/no-profile.png') }}"
                            alt="Foto Siswa" class="img-fluid rounded mx-auto d-block">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('foto').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('previewFoto');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                // kalau dibatalkan atau dihapus, kembali ke default
                preview.src = "{{ asset('img/no-profile.png') }}";
            }
        });
    </script>
@endsection
