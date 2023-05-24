@extends('layout.kursusBase')

@section('nav-tab')
<div class="tab">
    <a href="registrationPage"><button class="tablinks" onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button></a>
    <a href="postponePage"><button class="tablinks" onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
    <button class="tablinks active" onclick="activity(event, 'cetak')">Cetak</button>
  </div>
@stop

@section('documentList')
<div id="documentList" class="tabcontent">
    <h6><b><i>Sila pilih dokumen untuk dicetak</i></b></h6>
    <ul>
        <li><a href=""><u>Cetak Slip Permohonan Kursus</u></a></li>
        <li><a href=""><u>Cetak Sijil Kursus Perkahwinan</u></a></li>
    </ul>  
</div>
<input type="submit" value="Kembali">
@stop