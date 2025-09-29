@extends('templates');
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">Nilai Murni</h6>
                <h6 class="my-0">
                    <a href="{{ route('siswa.create') }}" class="text-decoration-none text-success">
                        INPUT NILAI
                    </a>
                </h6>
            </div>

        </div>

        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle text-center">#</th>
                        <th rowspan="2" class="align-middle text-center">Nama</th>
                        <th rowspan="2" class="align-middle text-center">NIS</th>
                        <th colspan="3" class="align-middle text-center">Nilai Mapel</th>
                        <th rowspan="2" class="align-middle text-center">Aksi</th>
                    </tr>
                    <tr>
                        <th class="align-middle text-center">MTK</th>
                        <th class="align-middle text-center">Indo</th>
                        <th class="align-middle text-center">Inggris</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle text-center">1</td>
                        <td>aa</td>
                        <td class="align-middle text-center">213213</td>
                        <td class="align-middle text-center">100</td>
                        <td class="align-middle text-center">90</td>
                        <td class="align-middle text-center">75</td>
                        <td class="align-middle text-center">Delete</td>
                    </tr>
                    <!-- Tambahkan baris siswa lain di bawah sini -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
