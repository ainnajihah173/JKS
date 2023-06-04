@extends('layout.userBase')

@section('content')
    <div class="tab">
        <a href="daftar-kursus"><button class="tablinks" onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button></a>
        <button class="tablinks active" onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button>
        <a href="senarai-cetak"><button class="tablinks" onclick="activity(event, 'cetak')">Cetak</button></a>
    </div>

    <div class="container mt-4">
        <div class="left">
            <span>Anjuran</span>
        </div>
        <div class="right">
            <span>: Pejabat Agama Islam Bentong</span>
        </div>

        <div class="left">
            <span>Lokasi</span>
        </div>
        <div class="right">
            <span>: Masjid Ar-Redha</span>
        </div>

        <div class="left">
            <span>Status</span>
        </div>
        <div class="right">
            <span>: Lebig 7 hari RM40 dikenakan</span>
        </div>
    </div>

    <form action="/action_page.php">
        <div id="daftarKursus" class="tabcontent">
            <div class="instruction-note">
                <p><b><i>Nota: </b>Lokasi yang didaftarkan tidak menganjurkan kursus perkahwinan dalam masa
                    terdekat. Sila pilih lokasi baru. </i></p>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Pilih Anjuran *</label>
                    <select class="form-select">
                        <option selected>--Sila Pilih Anjuran--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Pilih Lokasi *</label>
                    <select class="form-select">
                        <option selected>--Sila Pilih Lokasi--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="example-text-input">Tarikh Kursus *</label>
                    <input class="form-control" type="date" id="tarikh-kursus" name="tarikh-kursus">
                </div>
            </div>


            <div class="form-lbl">


                <label class="example-text-input">Masa Kursus: </label>
                <label for="time" class="lbl-spacing">8:000000-9:00000 am</label>

                <label class="example-text-input">Pegawai Dihubungi: </label>
                <label for="dutyStaff" class="lbl-spacing">En Ahmadddddddddd</label>

                <label class="example-text-input">No. Tel: </label>
                <label for="staffPhoneNum" class="lbl-spacing">012-23456535</label>

            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="example-text-input">Bukti Pembayaran *</label>
                    <input class="form-control" type="file" id="receipt" name="receipt">
                </div>
            </div>
            <input type="submit" value="Hantar">
    </form>
    </div>
    <a href="status-permohonan"><input type="kembali" value="Kembali"></a>
@stop
