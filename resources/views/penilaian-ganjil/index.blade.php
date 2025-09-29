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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">NAMA</th>
                        <th scope="col" rowspan="15">Mata Pelajaran</th>
                        <th scope="col">---</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
