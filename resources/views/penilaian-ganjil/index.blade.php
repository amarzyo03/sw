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
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="align-middle text-center">#</th>
                            <th rowspan="2" class="align-middle text-center">NIS</th>
                            <th rowspan="2" class="align-middle text-center">Nama</th>
                            <th colspan="14" class="align-middle text-center">Nilai Mapel</th>
                            <th rowspan="2" class="align-middle text-center">Aksi</th>
                        </tr>
                        <tr>
                            <th class="align-middle text-center">AGM</th>
                            <th class="align-middle text-center">PNC</th>
                            <th class="align-middle text-center">IND</th>
                            <th class="align-middle text-center">PJK</th>
                            <th class="align-middle text-center">SEJ</th>
                            <th class="align-middle text-center">SBD</th>
                            <th class="align-middle text-center">JWA</th>
                            <th class="align-middle text-center">ING</th>
                            <th class="align-middle text-center">INF</th>
                            <th class="align-middle text-center">PPS</th>
                            <th class="align-middle text-center">E1,2</th>
                            <th class="align-middle text-center">E3</th>
                            <th class="align-middle text-center">E4,6</th>
                            <th class="align-middle text-center">E5,7</th>
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
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">82</td>
                            <td class="align-middle text-center">
                                <div class="btn-group btn-group-sm " role="group">
                                    <button id="btnGroupVerticalDrop1" type="button"
                                        class="btn btn-primary dropdown-toggle" data-coreui-toggle="dropdown"
                                        aria-expanded="false">
                                        Aksi
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                        <li><a class="dropdown-item text-primary" href="#">Detail</a></li>
                                        <li><a class="dropdown-item text-warning" href="#">Edit</a></li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
