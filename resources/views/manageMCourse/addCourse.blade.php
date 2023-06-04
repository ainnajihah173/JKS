@extends('layout.staffBase')

@section('content')

    <p><b><i>Daftar Kursus Baru</i></b></p>
    <div id="daftarKursus" class="tabcontent">
        <form action="/action_page.php">

            <div class="container mt-2">
                <div class="left">
                    <span>PAID *</span>
                </div>
                <div class="right">
                    <select class="form-select" aria-label="Default select example" style="width:50%;">
                        <option selected>--- Sila Pilih PAID ---</option>
                        <option value="1">Pendaftaran Nikah Dengan Kebenaran</option>
                        <option value="2">Pendaftaran Nikah Sukarela</option>
                    </select>
                </div>
            </div>

            <div class="container mt-2">
                <div class="left">
                    <span>Lokasi & Alamat *</span>
                </div>
                <div class="right">
                    <input class="form-control" type="text" id="loc" name="loc">
                </div>
            </div>

            <div class="container mt-2">
                <div class="left">
                    <span>Tarikh Mula *</span>
                </div>
                <div class="right">
                    <input class="form-control" type="date" id="startDate" name="startDate">
                </div>
            </div>
            <div class="container mt-2">
                <div class="left">
                    <span>Tarikh Tamat</span>
                </div>
                <div class="right">
                    <input class="form-control" type="date" id="endDate" name="endDate">
                </div>
            </div>

            <div class="container mt-2">
                <div class="left">
                    <span>Masa Mula *</span>
                </div>
                <div class="right">
                    <input class="form-control" type="text" id="startTime" name="startTime">
                </div>
            </div>

            <div class="container mt-2">
                <div class="left">
                    <span>Masa Tamat *</span>
                </div>
                <div class="right">
                    <input class="form-control" type="text" id="endTime" name="endTime">
                </div>
            </div>

            <div class="container mt-2">
                <div class="left">
                    <span>Pegawai Dihubungi *</span>
                </div>
                <div class="right">
                    <input class="form-control" type="text" id="dutyStaff" name="dutyStaff">
                </div>
            </div>

            <div class="container mt-2">
                <div class="left">
                    <span>No. Tel *</span>
                </div>
                <div class="right">
                    <input class="form-control" type="text" id="phoneNum" name="phoneNum">
                </div>
            </div>

            <div class="container mt-2">
                <div class="left">
                    <span>Kapasiti Peserta *</span>
                </div>
                <div class="right">
                    <input class="form-control" type="text" id="capacity" name="capacity">
                </div>
            </div>

            <div class="container mt-2">
                <div class="left">
                    <span>Terbitkan Kepada Umum *</span>
                </div>
                <div class="right">
                    <input class="form-control" type="date" id="issued" name="issued">
                </div>
            </div>
            <input type="reset" value="Set Semula">
            <input type="submit" value="Daftar">

    </div>
    <a href="senarai-carian"><input type="kembali" value="Kembali"></a>
    </form>
    </div>
@stop
