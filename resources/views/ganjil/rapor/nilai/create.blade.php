@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="my-0">NILAI : {{ $mapel->nama }}</h6>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="/nilai-rapor-ganjil" method="post">
                        @csrf
                        @foreach ($siswa as $i => $row)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td class="text-capitalize">{{ $row->nama }}</td>
                                <td>
                                    <input type="hidden" name="siswa_id[]" value="{{ $row->id }}">
                                    <input type="hidden" name="mapel_id" value="{{ $mapel->id }}">
                                    <input type="text" class="form-control form-control-sm" name="nilai[]" placeholder="Masukan Nilai">
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">
                                <button type="submit" class="btn btn-primary btn-sm w-100">Simpan Nilai</button>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
@endsection
