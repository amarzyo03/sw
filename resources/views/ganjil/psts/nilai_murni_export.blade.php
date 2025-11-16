<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF - Nilai Murni PSTS Ganjil</title>
</head>

<style>
    .judul {
        text-align: center;
        margin: 0 auto;
        margin-bottom: 10px;
        margin-top: 10px;
    }

    .judul h3,
    .judul p {
        margin: 3px 0;
    }

    .tabel-identitas {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    /* Semua kolom nowrap */
    .tabel-identitas td {
        padding: 1px 2px;
        vertical-align: top;
        border: none;
        white-space: nowrap;
    }

    /* Program Keahlian boleh wrap */
    .tabel-identitas .program-keahlian {
        white-space: normal !important;
    }

    /* Label kiri lebih pendek supaya titik tidak jauh */
    .tabel-identitas .label {
        width: 100px;
        /* dari 130 → 100 agar lebih dekat */
        font-weight: 500;
    }

    /* Titik dibuat super rapat */
    .tabel-identitas .titik {
        width: 1px;
        /* sangat kecil */
        padding-left: 0;
        padding-right: 1px;
    }

    .tabel-nilai {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    .tabel-nilai th {
        background: #e6e6e6;
        border: 1px solid #000;
        padding: 6px;
        text-align: center;
        font-weight: bold;
    }

    .tabel-nilai td {
        border: 1px solid #000;
        padding: 4px 6px;
        vertical-align: top;
    }

    /* Kolom nilai */
    .tabel-nilai .nilai {
        text-align: center;
        font-weight: bold;
    }

    /* Subjudul kelompok */
    .subjudul td {
        background: #f3f3f3;
        font-weight: bold;
        padding: 5px;
    }

    /* Baris total / rata-rata / peringkat */
    .subjudul2 td {
        font-weight: bold;
        background: #fafafa;
    }

    /* Kolom A/B */
    .kelompok {
        text-align: center;
        font-weight: bold;
        width: 30px;
    }

    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 3px 6px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 3px 6px;
        word-break: normal;
    }

    .tg .tg-lboi {
        border-color: inherit;
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-9wq8 {
        border-color: inherit;
        text-align: center;
        vertical-align: middle
    }

    .tg .tg-uzvj {
        border-color: inherit;
        font-weight: bold;
        text-align: center;
        vertical-align: middle
    }

    .tg .tg-g7sd {
        border-color: inherit;
        font-weight: bold;
        text-align: left;
        vertical-align: middle
    }

    table.table-ttd {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table.table-ttd td {
        vertical-align: top;
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
    }

    table.table-ttd .ttd-space {
        height: 60px;
        /* ruang ttd */
    }
</style>

<body>
    <img src="{{ asset('img/kop.png') }}" width="100%">

    {{-- Judul --}}
    <div class="judul">
        <h3>LAPORAN NILAI MURNI</h3>
        <P>PENILAIAN SUMATIF TENGAH SEMESTER (PSTS GANJIL)</P>
        <P>TAHUN AJARAN 2025/2026</P>
    </div>

    {{-- Table Inditas --}}
    <table class="tabel-identitas">
        <tr>
            <td class="label">Nama Murid</td>
            <td class="titik">:</td>
            <td>AFRILIANA NURUL KHASANAH</td>

            <td class="label">Kelas</td>
            <td class="titik">:</td>
            <td>X TKJ-2</td>
        </tr>

        <tr>
            <td class="label">NIS</td>
            <td class="titik">:</td>
            <td>15570</td>

            <td class="label">KKTP</td>
            <td class="titik">:</td>
            <td>80 - 85</td>
        </tr>

        <tr>
            <td class="label">NISN</td>
            <td class="titik">:</td>
            <td>0119609313</td>

            <td class="label">Program Keahlian</td>
            <td class="titik">:</td>
            <td>Teknik Jaringan Komputer dan<br>Telekomunikasi</td>
        </tr>
    </table>

    {{-- Tabel Nilai --}}
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-uzvj">No</th>
                <th class="tg-uzvj" colspan="4">Mata&nbsp;&nbsp;&nbsp;Pelajaran</th>
                <th class="tg-uzvj">Nilai</th>
                <th class="tg-uzvj" colspan="3">Kriteria dan Tindak Lanjut</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-uzvj" rowspan="8">A</td>
                <td class="tg-g7sd" colspan="8">KELOMPOK MATA PELAJARAN&nbsp;&nbsp;&nbsp;UMUM :</td>
            </tr>
            <tr>
                <td class="tg-9wq8">1.</td>
                <td class="tg-lboi" colspan="3">Pendidikan Agama dan Budi Pekerti</td>
                <td class="tg-9wq8">66 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-9wq8">2.</td>
                <td class="tg-lboi" colspan="3">Pendidikan Pancasila</td>
                <td class="tg-9wq8">60 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-9wq8">3.</td>
                <td class="tg-lboi" colspan="3">Bahasa Indonesia</td>
                <td class="tg-9wq8">93 </td>
                <td class="tg-lboi" colspan="3">Sudah Mencapai Ketuntasan Belajar</td>
            </tr>
            <tr>
                <td class="tg-9wq8">4.</td>
                <td class="tg-lboi" colspan="3">Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                <td class="tg-9wq8">67 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-9wq8">5.</td>
                <td class="tg-lboi" colspan="3">Sejarah</td>
                <td class="tg-9wq8">61 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-9wq8">6.</td>
                <td class="tg-lboi" colspan="3">Seni Budaya</td>
                <td class="tg-9wq8">82 </td>
                <td class="tg-lboi" colspan="3">Sudah Mencapai Ketuntasan Belajar</td>
            </tr>
            <tr>
                <td class="tg-9wq8">7.</td>
                <td class="tg-lboi" colspan="3">Bahasa Jawa</td>
                <td class="tg-9wq8">42 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-uzvj" rowspan="10">B</td>
                <td class="tg-g7sd" colspan="8">KELOMPOK MATA PELAJARAN&nbsp;&nbsp;&nbsp;KEJURUAN :</td>
            </tr>
            <tr>
                <td class="tg-lboi">1.</td>
                <td class="tg-lboi" colspan="3">Matematika</td>
                <td class="tg-9wq8">77 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-lboi">2.</td>
                <td class="tg-lboi" colspan="3">Bahasa Inggris</td>
                <td class="tg-9wq8">58 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-lboi">3.</td>
                <td class="tg-lboi" colspan="3">Informatika</td>
                <td class="tg-9wq8">87 </td>
                <td class="tg-lboi" colspan="3">Sudah Mencapai Ketuntasan Belajar</td>
            </tr>
            <tr>
                <td class="tg-lboi">4.</td>
                <td class="tg-lboi" colspan="3">Projek Ilmu Pengetahuan Alam dan Sosial</td>
                <td class="tg-9wq8">67 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-lboi">5.</td>
                <td class="tg-lboi" colspan="3">Profesi dan&nbsp;&nbsp;&nbsp;Kewirausahaan di Bidang TJKT</td>
                <td class="tg-9wq8">65 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-lboi">6.</td>
                <td class="tg-lboi" colspan="3">Dasar-dasar TJKT</td>
                <td class="tg-9wq8">69 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-lboi">7.</td>
                <td class="tg-lboi" colspan="3">Media dan Jaringan Telekomunikasi</td>
                <td class="tg-9wq8">74 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-lboi">8.</td>
                <td class="tg-lboi" colspan="3">Proses Bisnis di Bidang TJKT</td>
                <td class="tg-9wq8">58 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-lboi">9.</td>
                <td class="tg-lboi" colspan="3">Koding dan Kecerdasan Artifisial</td>
                <td class="tg-9wq8">68 </td>
                <td class="tg-lboi" colspan="3">Belum Mencapai Ketuntasan Belajar dan Harus Mengikuti Remedial</td>
            </tr>
            <tr>
                <td class="tg-lboi" colspan="5"> Jumlah Nilai</td>
                <td class="tg-9wq8">1094 </td>
                <td class="tg-lboi" colspan="3"> </td>
            </tr>
            <tr>
                <td class="tg-lboi" colspan="5"> Rata-Rata Nilai</td>
                <td class="tg-9wq8">68,38 </td>
                <td class="tg-lboi" colspan="3"> </td>
            </tr>
            <tr>
                <td class="tg-lboi" colspan="5"> Peringkat Ke-</td>
                <td class="tg-9wq8">17 </td>
                <td class="tg-lboi" colspan="3">dari 36 &nbsp;&nbsp;&nbsp;Murid</td>
            </tr>
        </tbody>
    </table>

    <table class="table-ttd">
        <tr>
            <td>
                Mengetahui, <br>
                Orang Tua/Wali Murid<br><br><br>
                (sini utk ttd)<br><br><br>
                (...........................................)
            </td>

            <td>
                Kroya, 10 Oktober 2025<br>
                Wali Kelas<br><br><br>
                (sini utk ttd)<br><br><br>
                (............................................)
            </td>
        </tr>

        <tr>
            <td colspan="2">
                Mengetahui,<br>
                Kepala Sekolah<br><br><br>
                (sini utk ttd)<br><br><br>
                (.................................)
            </td>
        </tr>
    </table>

</body>

</html>
