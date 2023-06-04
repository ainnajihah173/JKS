@extends('layout.userBase')

@section('content')

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
    <a href="statusApplication"><input type="kembali" value="Kembali"></a>
@stop
