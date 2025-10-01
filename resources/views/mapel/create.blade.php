@extends('templates');
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="my-0">TAMBAH MAPEL</h6>
        </div>

        <form action="{{ route('mapel.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="card-body">

                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Nama Mata Pelajaran" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="singkatan" class="col-sm-3 col-form-label">Singkatan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="singkatan" name="singkatan" placeholder="Singkatan"
                            required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="guru" class="col-sm-3 col-form-label">Guru</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="guru" name="guru" placeholder="Nama Guru"
                            required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-primary w-25">Simpan</button>
                        <a href="{{ route('mapel.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
