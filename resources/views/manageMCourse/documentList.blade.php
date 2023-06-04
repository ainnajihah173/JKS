@extends('layout.userBase')

@section('content')
    <div class="tab">
        <a href="daftar-kursus"><button class="tablinks" onclick="activity(event, 'daftar-kursus')">Daftar
                Kursus</button></a>
        <a href="penangguhan-kursus"><button class="tablinks" onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
        <button class="tablinks active" onclick="activity(event, 'cetak')">Cetak</button>
    </div>

    <div id="documentList" class="tabcontent">
        <div class="instruction-note">
            <p><b><i>***Sila pilih dokumen untuk dicetak***</i></b></p>
        </div>
        <div class="print-list">
            <ul>
                <li style="margin-bottom: 30px;"><a href=""><u>Cetak Slip Permohonan Kursus</u></a></li>
                <li><a href=""><u>Cetak Sijil Kursus Perkahwinan</u></a></li>
            </ul>
        </div>

    </div>
    <a href="status-permohonan"><input type="kembali" value="Kembali"></a>
@stop
