@extends('layout.kursusBase')

@section('nav-tab')
<div class="tab">
    <button class="tablinks active" onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button>
    <a href="postponePage"><button class="tablinks" onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
    <a href="documentPage"><button class="tablinks" onclick="activity(event, 'cetak')">Cetak</button></a>
  </div>
@stop

@section('daftarKursus')
<form action="/action_page.php">
<div id="daftarKursus" class="tabcontent">
    <h6><b><i>*Maklumat Permohonan Kursus</i></b></h6>
    <div class="form-group">
        <label for="anjuranlbl">Anjuran :</label>
        <label for="anjuran">bentong</label><br>

        <label for="loclbl">Lokasi :</label>
        <label for="location">masjid</label><br>

        <label for="namelbl">Nama Pemohon :</label>
        <label for="name">ali bin abu</label><br>

        <label for="datelbl">Tarikh Kursus :</label>
        <label for="date">12/4/2023</label><br>

        <label for="timelbl">Masa Kursus : </label>
        <label for="time">8:00 - 4:00p.m</label><br>

        <label for="dutyStafflbl">Pegawai Dihubungi :</label>
        <label for="dutyStaff">Encik Ahmad</label><br>

        <label for="staffPhonelbl">No. Tel : </label>
        <label for="staffPhone">019-3002345</label><br>

        <label for="receiptlbl">Bukti Pembayaran : </label>
        <label for="receipt">receiptttt </label>
        <input type="file" id="receipt" name="receipt">
    </div>
</div>

<input type="submit" value="Kembali">
</form>
@stop