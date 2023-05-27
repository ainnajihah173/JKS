@extends('layout.userBase')

@section('content')
<div class="tab">
    <button class="tablinks active" onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button>
    <a href="postponePage"><button class="tablinks" onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
    <a href="documentPage"><button class="tablinks" onclick="activity(event, 'cetak')">Cetak</button></a>
  </div>

<form action="/action_page.php">
<div id="daftarKursus" class="tabcontent">
    <h6><b><i>***Sila isi semua bahagian.( * )adalah mandatori***</i></b></h6>
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

<input type="reset" value="Set Semula">
<a href="statusApplication"><button type="button">Simpan</button></a>
<input type="submit" value="Hantar">
<a href="statusApplication"><button type="button">Kembali</button></a>
</form>
@stop