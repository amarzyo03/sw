@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">Presensi</h6>
                <h6 class="my-0">
                    <a href="{{ route('presensi.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th rowspan="2" class="align-middle text-center">No</th>
                            <th rowspan="2" class="align-middle text-center">Nama Siswa</th>
                            <th colspan="3" class="text-center">Kehadiran</th>
                        </tr>
                        <tr>
                            <th class="text-center">Sakit</th>
                            <th class="text-center">Izin</th>
                            <th class="text-center">Alfa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('presensi.update') }}" method="POST">
                            @csrf
                            @foreach ($data as $i => $row)
                                <tr>
                                    <td class="text-center">{{ $i + 1 }}</td>
                                    <td class="text-capitalize">{{ $row->siswa->nama }}</td>
                                    <td class="text-center">
                                        <input type="hidden" name="id[]" value="{{ $row->id }}">
                                        <input type="number" name="sakit[]" value="{{ $row->sakit }}"
                                            class="form-control form-control-sm text-center">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="izin[]" value="{{ $row->izin }}"
                                            class="form-control form-control-sm text-center">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="alpa[]" value="{{ $row->alpa }}"
                                            class="form-control form-control-sm text-center">
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" class="text-end">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
