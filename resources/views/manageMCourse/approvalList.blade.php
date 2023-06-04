@extends('layout.staffBase')

@section('content')


    <div class="instruction-note">
        <p><b><i>Kelulusan</i></b></p>
    </div>
    <div id="daftarKursus" class="tabcontent">
        <div class="row">
            <div class="column">

                <div class="container mt-2">
                    <div class="left">
                        <span>Anjuran</span>
                    </div>
                    <div class="right">
                        <span>ssssssssssssss</span>
                    </div>
                </div>

                <div class="container mt-2">
                    <div class="left">
                        <span>Lokasi & Alamat *</span>
                    </div>
                    <div class="right">
                        <span>ssssssssssssss</span>
                    </div>
                </div>
            </div>
        </div>



        {{-- List Table  --}}

        <div class="col-md-12 mt-4">
            <div class="table-responsive">
                <table class="table table-bordered align-left mb-4" id="myTable">
                    <thead class="thead-light">
                        <tr>
                            <th style="text-align: left;">Nama Peserta</th>
                            <th style="text-align: left;">Hadir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="line-height: 30px;">
                            <td>nameeeeeeeeeee</td>
                            <td> <input class="form-check-input" type="checkbox" value="" id="customCheck1"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="submit" value="Simpan">
        </div>
    </div>

    <a href="senarai-carian"><input type="kembali" value="Kembali"></a>
@stop
