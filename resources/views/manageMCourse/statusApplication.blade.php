@extends('layout.userBase')

@section('content')
    <div class="tab">
        <a href="daftar-kursus"><button class="tablinks" onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button></a>
        <a href="penangguhan-kursus"><button class="tablinks" onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
        <a href="senarai-cetak"><button class="tablinks" onclick="activity(event, 'cetak')">Cetak</button></a>
    </div>

    <div id="defaultOpen">
        <img src="assets/img/logo-jks.png" alt="Logo">
        <h6>TERMA DAN PERATURAN KURSUS PRA-PERKAHWINAN ISLAM<br>JABATAN AGAMA ISLAM PAHANG</h6>
        <p style="padding-top: 20px;">1. Hanya peserta yang berdaftar sahaja dibenarkan menyertai kursus pada hari yang
            berkenaan.</p>
        <p>2. Penangguhan kursus dibenarkan untuk satu kali sahaja dan hendaklah dibuat sekurang-kurangnya
            seminggu awal daripada tarikh yang didaftarkan.</p>
        <p>3. Penangguhan kurang dari tempoh seminggu, bayaran penangguhan sebanyak RM40.00 akan dikenakan.</p>
        <p style="padding-bottom: 20px;">4. Ketidakhadiran tanpa maklum akan mengakibatkan pendaftaran kursus terbatal dan
            yuran tidak akan dikembalikan.</p>

        <table id="kursus-status">
            <tr>
                <th>Bil</th>
                <th>Nama</th>
                <th>Tarikh Kursus</th>
                <th>Status</th>
                <th>Operasi</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align:center;">
                    <a href="papar-kursus"><i class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                    <a href="kemaskini-kursus"><i class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                    <i class="fas fa-trash" style="padding-right:15px;color:red">
                        <a href="senarai-cetak"></i><i class="fas fa-print"></i>
                </td></a>
            </tr>
        </table>
        <div class="btn-kursus">
            <a href="daftar-kursus"><input type="submit" id="daftar" value="DAFTAR KURSUS" onclick="daftar()"></a>
        </div>
    </div>
@stop
