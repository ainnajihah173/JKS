@extends('layout.kursusBase')

@section('nav-tab')
<div class="tab">
    <a href="registrationPage"><button class="tablinks" onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button></a>
    <button class="tablinks active" onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button>
    <a href="documentPage"><button class="tablinks" onclick="activity(event, 'cetak')">Cetak</button></a>
  </div>
@stop

@section('tangguhKursus')
<label for="anjuranlbl">Anjuran: </label>
    <label for="anjuran">Pejabat Agama Islam Bentong</label><br>

    <label for="loclbl">Lokasi: </label>
    <label for="location">Masjid Ar-Redha</label><br>

    <label for="datelbl">Status: </label>
    <label for="courseDate">019-3002345</label><br>

<form action="/action_page.php">
    <div id="tangguhKursus" class="tabcontent">
        <label for="nota"><b>Nota: </b>LOkasi yang didaftarkan tidak menganjurkan kursus perkahwinan dalam masa terdekat. Sila pilih lokasi baru. </label>
        <div class="form-group">
            <label class="col-lg-3 col-form-label">Pilih Anjuran *</label>
            <select class="form-control select">
            <option>Select State</option>
            <option value="1">California</option>
            <option value="2">Texas</option>
            <option value="3">Florida</option>
            </select>
    
            <label class="col-lg-3 col-form-label">Pilih Lokasi *</label>
            <select class="form-control select">
            <option>--Pilih Anjuran--</option>
            <option value="1">California</option>
            <option value="2">Texas</option>
            <option value="3">Florida</option>
            </select>
    
            <label for="birthday">Tarikh Kursus *:</label>
            <input type="date" id="tarikh-kursus" name="tarikh-kursus">
    
            <label for="timelbl">Masa: </label>
            <label for="time">8:00 - 4:00p.m</label>
    
            <label for="dutyStaff">Pegawai Dihubungi:</label>
            <label for="dutyStaff">Encik Ahmad</label>
    
            <label for="staffPhone">No. Tel: </label>
            <label for="staffPhone">019-3002345</label><br>
    
            <label for="receipt">Bukti Pembayaran *: </label>
            <input type="file" id="receipt" name="receipt">
        </div>
    </div>
    <input type="submit" value="Hantar">
    <input type="submit" value="Kembali">
</form>
@stop