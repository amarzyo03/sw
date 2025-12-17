<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF - Nilai Murni PSTS Ganjil</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12px;
        margin: 10px;
    }

    .judul {
        text-align: center;
        margin: 0;
        margin-bottom: 6px;
    }

    .judul h3,
    .judul p {
        margin: 2px 0;
    }

    /* Identitas */
    .tabel-identitas {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 6px;
    }

    .tabel-identitas td {
        padding: 1px 2px;
        white-space: nowrap;
    }

    .program-keahlian {
        white-space: normal !important;
    }

    .label {
        width: 90px;
    }

    .titik {
        width: 5px;
    }

    /* Tabel nilai */
    table.tg {
        width: 100%;
        border-collapse: collapse;
        font-size: 12px;
    }

    .tg td,
    .tg th {
        border: 1px solid #000;
        padding: 2px 4px;
    }

    .tg th {
        background: #e6e6e6;
        font-weight: bold;
        text-align: center;
    }

    .tg-uzvj {
        text-align: center;
        font-weight: bold;
    }

    .tg-9wq8 {
        text-align: center;
    }

    .tg-lboi {
        text-align: left;
    }

    .tg-g7sd {
        font-weight: bold;
        text-align: left;
        background: #f3f3f3;
    }

    /* Tanda tangan */
    table.table-ttd {
        width: 100%;
        margin-top: 2px;
        /* sangat kecil */
        border-collapse: collapse;
    }

    table.table-ttd td {
        font-size: 12px;
        text-align: center;
        vertical-align: top;
        padding: 0;
        line-height: 14px;
        /* mengecilkan jarak antar baris */
    }

    table.table-ttd p {
        margin: 0;
        /* HAPUS jarak bawaan <p> */
        padding: 0;
    }

    .ttd-space {
        height: 10px;
        /* ruang tanda tangan kecil */
    }
</style>

<body>
    @foreach ($siswa as $i => $row)
        <main>
            <img src="{{ asset('img/kop.png') }}" width="100%">

            <div class="judul">
                <h3>LAPORAN NILAI MURNI</h3>
                <p>PENILAIAN SUMATIF TENGAH SEMESTER (PSTS) GANJIL</p>
                <p>TAHUN AJARAN 2025/2026</p>
            </div>

            <table class="tabel-identitas">
                <tr>
                    <td class="label">Nama</td>
                    <td class="titik">:</td>
                    <td>{{ strtoupper($row->siswa->nama) }}</td>
                    <td class="label">Kelas</td>
                    <td class="titik">:</td>
                    <td>X TKJ-2</td>
                </tr>
                <tr>
                    <td class="label">NIS</td>
                    <td class="titik">:</td>
                    <td>{{ $row->siswa->nis }}</td>
                    <td class="label">KKTP</td>
                    <td class="titik">:</td>
                    <td>80 - 85</td>
                </tr>
                <tr>
                    <td class="label">NISN</td>
                    <td class="titik">:</td>
                    <td>{{ $row->siswa->nisn }}</td>
                    <td class="label">Program</td>
                    <td class="titik">:</td>
                    <td class="program-keahlian">Teknik Jaringan Komputer dan Telekomunikasi</td>
                </tr>
            </table>

            <table class="tg">
                <thead>
                    <tr>
                        <th>No</th>
                        <th colspan="4">Mata Pelajaran</th>
                        <th>Nilai</th>
                        <th colspan="3">Keterangan</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="tg-uzvj" rowspan="8">A</td>
                        <td class="tg-g7sd" colspan="8">KELOMPOK MAPEL UMUM</td>
                    </tr>

                    <tr>
                        <td class="tg-9wq8">1.</td>
                        <td colspan="3">Pendidikan Agama dan Budi Pekerti</td>
                        <td class="tg-9wq8">{{ $row->agm }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td class="tg-9wq8">2.</td>
                        <td colspan="3">Pendidikan Pancasila</td>
                        <td class="tg-9wq8">{{ $row->panc }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td class="tg-9wq8">3.</td>
                        <td colspan="3">Bahasa Indonesia</td>
                        <td class="tg-9wq8">{{ $row->indo }}</td>
                        <td colspan="3">Tuntas</td>
                    </tr>
                    <tr>
                        <td class="tg-9wq8">4.</td>
                        <td colspan="3">PJOK</td>
                        <td class="tg-9wq8">{{ $row->pjok }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td class="tg-9wq8">5.</td>
                        <td colspan="3">Sejarah</td>
                        <td class="tg-9wq8">{{ $row->sej }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td class="tg-9wq8">6.</td>
                        <td colspan="3">Seni Budaya</td>
                        <td class="tg-9wq8">{{ $row->sbd }}</td>
                        <td colspan="3">Tuntas</td>
                    </tr>
                    <tr>
                        <td class="tg-9wq8">7.</td>
                        <td colspan="3">Bahasa Jawa</td>
                        <td class="tg-9wq8">{{ $row->jwa }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>

                    <tr>
                        <td class="tg-uzvj" rowspan="10">B</td>
                        <td class="tg-g7sd" colspan="8">KELOMPOK MAPEL KEJURUAN</td>
                    </tr>

                    <tr>
                        <td>1.</td>
                        <td colspan="3">Matematika</td>
                        <td class="tg-9wq8">{{ $row->mtk }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td colspan="3">Bahasa Inggris</td>
                        <td class="tg-9wq8">{{ $row->ingg }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td colspan="3">Informatika</td>
                        <td class="tg-9wq8">{{ $row->info }}</td>
                        <td colspan="3">Tuntas</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td colspan="3">Projek IPAS</td>
                        <td class="tg-9wq8">{{ $row->pipas }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td colspan="3">Profesi & Kewirausahaan TJKT</td>
                        <td class="tg-9wq8">{{ $row->ddk1 }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td colspan="3">Dasar-dasar TJKT</td>
                        <td class="tg-9wq8">{{ $row->ddk2 }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td colspan="3">Media & Jaringan Telekomunikasi</td>
                        <td class="tg-9wq8">{{ $row->ddk3 }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td colspan="3">Proses Bisnis TJKT</td>
                        <td class="tg-9wq8">{{ $row->ddk4 }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td colspan="3">Koding & Kecerdasan Artifisial</td>
                        <td class="tg-9wq8">{{ $row->kka }}</td>
                        <td colspan="3">Remedial</td>
                    </tr>

                    <tr>
                        <td colspan="5">Jumlah Nilai</td>
                        <td class="tg-9wq8">{{ $row->jml }}</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="5">Rata-Rata</td>
                        <td class="tg-9wq8">{{ $row->rerata }}</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="5">Peringkat</td>
                        <td class="tg-9wq8">{{ $row->rank }}</td>
                        <td colspan="3">dari 36 Murid</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
            <table class="table-ttd">
                <tr>
                    <td>
                        Orang Tua/Wali Murid<br><br>
                        <div class="ttd-space"></div>
                        (................................)
                    </td>
                    <td>
                        Kroya, 10 Oktober 2025<br>
                        Wali Kelas<br><br>
                        <div class="ttd-space"></div>
                        <strong>ADIS MARBATRI, S.Kom</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Kepala Sekolah<br><br>
                        <div class="ttd-space"></div>
                        (...............................)
                    </td>
                </tr>
            </table>
        </main>
    @endforeach
</body>

</html>
