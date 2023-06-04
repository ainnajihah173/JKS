@extends('layout.staffBase')

@section('content')

<p><b><i>Daftar Peserta Baru</i></b></p>

    <div class="container mt-4">
        <div class="left">
            <span>No. Kad Pengenalan</span>
        </div>
        <div class="right">
            <form action="/action_page.php">
            <span><input class="form-control" type="text" id="" name=""></span>
        </div>
        <a href=""><input type="submit" value="Cari" style="margin:20px 440px;"></a>
    </form>
    </div>
    <div class="container mt-4">
        <div class="left">
            <span>Name</span>
        </div>
        <div class="right">
            <span>blabla</span>
        </div>

        <div class="left">
            <span>No. Kad Pengenalan</span>
        </div>
        <div class="right">
            <span>: blalbla</span>
        </div>
    </div>

    <form action="/action_page.php">
        <div id="daftarKursus" class="tabcontent">
            <div class="instruction-note">
                <p><b><i>*** Sila isi semua bahagian (*) adalah mandatori. *** </i></p>
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
            <input type="Reset" value="Set Semula">
    </form>
    </div>
    <a href="senarai-carian"><input type="kembali" value="Kembali"></a>
@stop
