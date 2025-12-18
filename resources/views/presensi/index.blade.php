@extends('templates')
@section('content')
    <form action="{{ route('presensi.update') }}" method="POST">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="my-0">Rapor PSAS Ganjil</h6>
                    <h6 class="my-0">
                        <a href="#" class="btn btn-sm btn-danger text-white" target="_blank">
                            Export PDF
                        </a>
                    </h6>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover table-striped table-bordered mt-3">
                    @csrf
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alpa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $i => $row)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td class="text-capitalize">{{ $row->siswa->nama }}</td>

                                    {{-- id absensi --}}
                                    <input type="hidden" name="id[]" value="{{ $row->id }}">

                                    <td>
                                        <input type="number" name="sakit[]" class="form-control"
                                            value="{{ $row->sakit }}">
                                    </td>
                                    <td>
                                        <input type="number" name="izin[]" class="form-control"
                                            value="{{ $row->izin }}">
                                    </td>
                                    <td>
                                        <input type="number" name="alpa[]" class="form-control"
                                            value="{{ $row->alpa }}">
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data tidak tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Simpan
                        </button>
                    </div>
                </table>
            </div>
        </div>
    </form>
@endsection
