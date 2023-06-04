@extends('layout.staffBase')

@section('content')
    <div class="instruction-note">
        <p><b><i>Kelulusan Permohonan</i></b></p>
    </div>

    <div id="defaultOpen">
        <table>
            <tr>
                <th>Status Kebenaran (Untuk Diluluskan)</th>
            </tr>
            <tr>
                <td>
                    <div class="container mt-2">
                        <div class="left">
                            <span>No. Akuan Terima</span>
                        </div>
                        <div class="right">
                            <span>ssssssssssssss</span>
                        </div>
                    </div>
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
                            <span>Nama Pasangan</span>
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
                                <option selected>---</option>
                                <option value="1">Lulus</option>
                                <option value="2">Gagal</option>
                            </select>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="btn-kursus">
            <input type="submit" id="daftar" value="KEMASKINI" onclick="daftar()">
        </div>
    </div>
@stop
