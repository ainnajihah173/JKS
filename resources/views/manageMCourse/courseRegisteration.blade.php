@extends('layout.userBase')

@section('content')
    <div class="tab">
        <button class="tablinks active" onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button>
        <a href="penangguhan-kursus"><button class="tablinks" onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
        <a href="senarai-cetak"><button class="tablinks" onclick="activity(event, 'cetak')">Cetak</button></a>
    </div>

    <form action="/action_page.php">
        <div id="daftarKursus" class="tabcontent">
            <div class="instruction-note">
                <p><b><i>***Sila isi semua bahagian.( * )adalah mandatori***</i></b></p>
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



            <input type="reset" value="Set Semula">
            <input type="submit" value="Simpan">
            <input type="submit" value="Hantar">
    </form>
    </div>
    <a href="status-permohonan"><input type="kembali" value="Kembali"></a>
@stop
