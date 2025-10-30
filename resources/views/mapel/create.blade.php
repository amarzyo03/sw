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
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="nama" class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="singkatan" class="form-label">Singkatan</label>
                        <input type="text" class="form-control" id="singkatan" name="singkatan" required>
                    </div>
                </div>
                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-primary w-25">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
