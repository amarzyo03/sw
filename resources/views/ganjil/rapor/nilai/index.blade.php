@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="my-0">NILAI SISWA</h6>
        </div>

        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">Jumlah Siswa : {{ $siswa->count() }}</h6>
                <form action="\nilai-rapor-ganjil" method="GET" class="d-flex" role="search">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Cari nama siswa" name="search" value="{{ request()->get('search') }}">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered">
                    <thead class="align-middle text-center">
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">NIS</th>
                            <th rowspan="2">NISN</th>
                            <th rowspan="2">Nama</th>
                            <th colspan="{{ $mapel->count() }}">Mata Pelajaran</th>
                            <th rowspan="2">Peringkat</th>
                        </tr>
                        <tr>
                            @foreach ($mapel as $mpl)
                                <th class="text-uppercase text-nowrap">
                                    <a href="/nilai-rapor-ganjil/{{ $mpl->id }}/create" class="btn btn-sm btn-primary">
                                        {{ $mpl->singkatan }}
                                    </a>
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
                        @foreach ($nilaiPivot as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row['nis'] }}</td>
                                <td>{{ $row['nisn'] }}</td>
                                <td class="text-capitalize text-nowrap text-start">{{ $row['nama'] }}</td>
                                @foreach ($mapel as $mpl)
                                    <td>{{ $row[$mpl->nama] }}</td>
                                @endforeach
                                <td>{{ $row['peringkat'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="flex justify-content-ened">
            </div>
        </div>
    </div>
@endsection
