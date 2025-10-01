@extends('templates')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="my-0">NILAI MURNI - GANJIL</h6>
                <h6 class="my-0">
                    <a href="" class="text-decoration-none text-success">
                        TAMBAH NILAI
                    </a>
                </h6>
            </div>

        </div>

        <div class="card-body">
            <table class="table table-hover table-bordered table-responsive">
                <thead>
                    <tr>
                        <th rowspan="3">No.</th>
                        <th rowspan="3">NIS</th>
                        <th rowspan="3">Nama Siswa</th>
                        <th colspan="12">Mata Pelajaran & Kelompok Muatan</th>
                        <th rowspan="3">Jml Nilai</th>
                        <th rowspan="3">Rata-rata</th>
                        <th rowspan="3">Rank</th>
                    </tr>
                    <tr>
                        <th colspan="6">UMUM</th>
                        <th colspan="6">KEJURUAN</th>
                    </tr>
                    <tr>
                        <!-- UMUM -->
                        <th>AGM</th>
                        <th>PANC</th>
                        <th>INDO</th>
                        <th>PJOK</th>
                        <th>SEJ</th>
                        <th>SBD</th>
                        <!-- KEJURUAN -->
                        <th>JWA</th>
                        <th>MTK</th>
                        <th>INGG</th>
                        <th>INFO</th>
                        <th>PIPAS</th>
                        <th>DDTJKT E1,2</th>
                        <th>DDTJKT E3</th>
                        <th>DDTJKT E4,6</th>
                        <th>DDTJKT E5,7</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data siswa bisa ditambahkan di bawah -->
                    <tr>
                        <td>1</td>
                        <td>123456</td>
                        <td>Nama Contoh</td>
                        <td>80</td>
                        <td>85</td>
                        <td>90</td>
                        <td>88</td>
                        <td>75</td>
                        <td>78</td>
                        <td>82</td>
                        <td>87</td>
                        <td>89</td>
                        <td>85</td>
                        <td>90</td>
                        <td>91</td>
                        <td>93</td>
                        <td>88</td>
                        <td>1425</td>
                        <td>83.8</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
