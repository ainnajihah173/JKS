@extends('layout.staffBase')

@section('content')
<div class="instruction-note">
    <p><b><i>Kemaskini Maklumat Peserta </i></b></p>
    <div id="daftarKursus" class="tabcontent">
    <form action="/action_page.php">
        <div class="container mt-2">
            <div class="left">
                <span>Tarikh Permohonan </span>
            </div>
            <div class="right">
                <span>ssssssssssssss</span>
            </div>
        </div>
        <div class="container mt-2">
            <div class="left">
                <span>No. Kad Pengenalan</span>
            </div>
            <div class="right">
                <span>ssssssssssssss</span>
            </div>
        </div>
        <div class="container mt-2">
            <div class="left">
                <span>Nama</span>
            </div>
            <div class="right">
                <span>ssssssssssssss</span>
            </div>
        </div>
        <div class="container mt-2">
            <div class="left">
                <span>Anjuran</span>
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
                <span>Tarikh Kursus *</span>
            </div>
            <div class="right">
                <input class="form-control" type="date" id="startDate" name="startDate">
            </div>
        </div>

        <div class="container mt-2">
            <div class="left">
                <span>Masa Kursus</span>
            </div>
            <div class="right">
                <input class="form-control" type="text" id="capacity" name="capacity">
            </div>
        </div>
        <div class="container mt-2">
            <div class="left">
                <span>Kehadiran Kursus</span>
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
                <span>Kelulusan Kursus</span>
            </div>
            <div class="right">
                <select class="form-select" aria-label="Default select example" style="width:50%;">
                    <option selected>--- Sila Pilih PAID ---</option>
                    <option value="1">Pendaftaran Nikah Dengan Kebenaran</option>
                    <option value="2">Pendaftaran Nikah Sukarela</option>
                </select>
            </div>
        </div>
        <input type="reset" value="Set Semula">
        <input type="submit" value="Daftar">

</div>
<a href="senarai-carian"><input type="kembali" value="Kembali"></a>
</form>
</div>
@stop
