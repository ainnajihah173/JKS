@extends('layout.userBase')

@section('content')
    <div class="tab">
        <a href="registrationPage"><button class="tablinks" onclick="activity(event, 'daftar-kursus')">Daftar
                Kursus</button></a>
        <a href="postponePage"><button class="tablinks" onclick="activity(event, 'tangguh-kursus')">Penagguhan
                Kursus</button></a>
        <a href="documentPage"><button class="tablinks" onclick="activity(event, 'cetak')">Cetak</button></a>
    </div>

    <div id="daftarKursus" class="tabcontent">

        <div class="container mt-4">
            <div class="left">
                <span>Anjuran</span>
            </div>
            <div class="right">
                <span>: Pejabat Agama Islam Bentong</span>
            </div>
        </div>

        <div class="container mt-4">
            <div class="left">
                <span>Lokasi</span>
            </div>
            <div class="right">
                <span>: Masjid Ar-Redha</span>
            </div>
        </div>

        <div class="container mt-4">
            <div class="left">
                <span>Nama Pemohon </span>
            </div>
            <div class="right">
                <span>: Ali Bin Abu</span>
            </div>
        </div>

        <div class="container mt-4">
            <div class="left">
                <span>Tarikh Kursus </span>
            </div>
            <div class="right">
                <span>: 12/4/2023</span>
            </div>
        </div>

        <div class="container mt-4">
            <div class="left">
                <span>Masa Kursus </span>
            </div>
            <div class="right">
                <span>: 8:00 - 4:00p.m</span>
            </div>
        </div>

        <div class="container mt-4">
            <div class="left">
                <span>Pegawai Dihubungi </span>
            </div>
            <div class="right">
                <span>: Encik Ahmad</span>
            </div>
        </div>

        <div class="container mt-4">
            <div class="left">
                <span>No. Tel</span>
            </div>
            <div class="right">
                <span>: 019-3002345</span>
            </div>
        </div>

        <div class="container mt-4">
            <div class="left">
                <span>Bukti Pembayaran </span>
            </div>
            <div class="right">
                <span>: receiptttt.jpeg</span>
            </div>
        </div>
    </div>
    <a href="status-permohonan"><input type="kembali" value="Kembali"></a>
@stop
