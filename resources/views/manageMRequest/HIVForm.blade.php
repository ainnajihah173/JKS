@extends('layout.userBase')

@section('content')
    <div class="instruction-note">
        <p><b><i>Maklumat HIV Pemohon</i></b></p>
        <p><b><i>*** Sila cetak dan muat naik borang yang telah disahkan oleh pengamal perubatan. ***</i></b></p>
    </div>

    <div id="defaultOpen">
        <table>
            <tr>
                <th>Kemaskini HIV Status (Telah Disahkan)</th>
            </tr>
            <tr>
                <td>
                    <div class="container mt-2">
                        <div class="left">
                            <span>Nama Pemohon</span>
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
                            <span>Alamat</span>
                        </div>
                        <div class="right">
                            <span>ssssssssssssss</span>
                        </div>
                    </div>
                    <div class="container mt-2">
                        <div class="left">
                            <span>No. Tel</span>
                        </div>
                        <div class="right">
                            <span>ssssssssssssss</span>
                        </div>
                    </div>
                    <div class="container mt-2">
                        <div class="left">
                            <span>Keputusan *</span>
                        </div>
                        <div class="right">
                            <select class="form-select" aria-label="Default select example" style="width:50%;">
                                <option selected></option>
                                <option value="1">Positif</option>
                                <option value="2">Negatif</option>
                            </select>
                        </div>
                    </div>

                    <div class="container mt-2">
                        <div class="left">
                            <span>Dokumen HIV Pemohon *</span>
                        </div>
                        <div class="right">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="file" id="receipt" name="receipt">
                                </div>
                            </div>
                     </div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="btn-kursus">
            <input type="submit" id="daftar" value="SIMPAN" onclick="daftar()">
        </div>
    </div>
@stop
