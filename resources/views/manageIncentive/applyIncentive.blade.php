@extends('layout.userBase')

@section('nav-tab')
<div class="tab">
    <button class="tablinks active" onclick="activity(event, 'maklumat-pemohon')">Maklumat Pemohon</button>
    <button class="tablinks" onclick="activity(event, 'maklumat-pasangan')">Maklumat Pasangan</button>
    <button class="tablinks" onclick="activity(event, 'maklumat-waris')">Maklumat Waris</button>
    <button class="tablinks" onclick="activity(event, 'dokumen')">Dokumen</button>
</div>
@stop

@section('content')
<form action="/action_page.php">
    <div id="daftarKursus" class="tabcontent">
        <h6><b><i>**Sila isi semua bahagian. (*) adalah mandatori**</i></b></h6>

        <div class="form-group row">
            <div class="col-lg-6">
                <label for="namaPemohon">Nama Pemohon:</label>
                <input type="text" id="namaPemohon" name="namaPemohon">
                <br>
                <label for="tarikhLahir">Tarikh Lahir:</label>
                <input type="date" id="tarikhLahir" name="tarikhLahir">

                <label for="tempatLahir">Tempat Lahir:</label>
                <input type="text" id="tempatLahir" name="tempatLahir">

                <label for="noPassport">No. Passport:</label>
                <input type="text" id="noPassport" name="noPassport">

                <label for="namaBank">Nama Bank:</label>
                <input type="text" id="namaBank" name="namaBank">
            </div>

            <div class="col-lg-6">
                <label for="noKadPengenalan">No. Kad Pengenalan:</label>
                <input type="text" id="noKadPengenalan" name="noKadPengenalan">

                <label for="umur">Umur:</label>
                <input type="text" id="umur" name="umur">

                <label for="warganegara">Warganegara:</label>
                <input type="text" id="warganegara" name="warganegara">

                <label for="noTelefon">No. Telefon:</label>
                <input type="text" id="noTelefon" name="noTelefon">

                <label for="noAkaunBank">No. Akaun Bank:</label>
                <input type="text" id="noAkaunBank" name="noAkaunBank">
            </div>
        </div>

        <div class="form-group">
            <label for="alamatSemasa">Alamat Semasa:</label>
            <input type="text" id="alamatSemasa" name="alamatSemasa">
        </div>

        <div class="form-group">
            <label for="alamatDalamKP">Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam K/P:</label>
            <input type="checkbox" id="alamatDalamKP" name="alamatDalamKP">
        </div>

        <div class="form-group">
            <h5><b>Maklumat Pekerjaan</b></h5>
        </div>

        <div class="form-group row">
            <div class="col-lg-6">
                <label for="namaPekerjaan">Nama Pekerjaan:</label>
                <input type="text" id="namaPekerjaan" name="namaPekerjaan">

                <label for="pendapatan">Pendapatan:</label>
                <input type="text" id="pendapatan" name="pendapatan">
            </div>

            <div class="col-lg-6">
                <label for="jenisPekerjaan">Jenis Pekerjaan:</label>
                <input type="text" id="jenisPekerjaan" name="jenisPekerjaan">

                <label for="namaMajikan">Nama Majikan:</label>
                <input type="text" id="namaMajikan" name="namaMajikan">
            </div>
        </div>

        <div class="form-group">
            <label for="alamatPremisPerniagaan">Alamat Premis Perniagaan:</label>
            <input type="text" id="alamatPremisPerniagaan" name="alamatPremisPerniagaan">
        </div>

        <input type="submit" value="Seterusnya">
    </div>
</form>
@stop
