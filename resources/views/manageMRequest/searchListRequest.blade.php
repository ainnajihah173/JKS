@extends('layout.staffBase')

@section('content')


        <div class="instruction-note">
            <p><b><i>Pilih Carian</i></b></p>
        </div>

        <div class="row">
            <div class="column">
                <form action="/action_page.php">

                    <div class="container mt-2">
                        <div class="left">
                            <span><b>PAID</b></span>
                        </div>
                        <div class="right">
                            <select class="form-select" aria-label="Default select example" style="width:50%;">
                                <option selected>--- Sila Pilih PAID ---</option>
                                <option value="1">Pendaftaran Nikah Dengan Kebenaran</option>
                                <option value="2">Pendaftaran Nikah Sukarela</option>
                            </select>
                        </div>
                    </div>
                    <div>
                    <a href=""><input type="submit" value="Cari" style="margin-right:320px;margin-top:10px;"></a>
                    </div>
                </form>
            </div>

            <div class="column" style="width: 30%;">
                <a href="addCourse"><input type="submit" value="Daftar Permohonan" style="margin-right:100px;width:45%;"></a>
            </div>
        </div>


{{-- List Table  --}}

    <div class="instruction-note">
        <p><b><i>Senarai Carian</i></b></p>
    </div>

    <div class="col-md-12 mt-4">
        <div class="table-responsive">
            <table class="table table-bordered align-left mb-4" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th>Bil</th>
                        <th>No. Akuan Terima</th>
                        <th>Nama Pemohon</th>
                        <th>Tarikh Mohon</th>
                        <th>Tarikh KAd</th>
                        <th>Status</th>
                        <th>Operasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="line-height: 30px;">
                        <td>1</td>
                        <td>Bentong</td>
                        <td>Masjid</td>
                        <td>N/A</td>
                        <td>0/20</td>
                        <td class=""><span class="badge badge-pill badge-warning">Belum Hantar</span></td>
                        <td class="text-center"> 
                            <a href=""><i class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                            <a href=""><i class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                            <a href=""><i class="fas fa-trash" style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                            <a href=""><i class="fas fa-print" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                            <a href=""><i class="fas fa-file" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                        </td>
                    </tr>
                    <tr style="line-height: 30px;">
                        <td>1</td>
                        <td>Bentong</td>
                        <td>Masjid</td>
                        <td>N/A</td>
                        <td>0/20</td>
                        <td class=""><span class="badge badge-pill badge-warning">Belum Hantar</span></td>
                        <td class="text-center"> 
                            <a href=""><i class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                            <a href=""><i class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                            <a href=""><i class="fas fa-trash" style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                            <a href=""><i class="fas fa-print" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                            <a href=""><i class="fas fa-file" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                        </td>
                    </tr>
                    <tr style="line-height: 30px;">
                        <td>1</td>
                        <td>Bentong</td>
                        <td>Masjid</td>
                        <td>N/A</td>
                        <td>0/20</td>
                        <td class=""><span class="badge badge-pill badge-warning">Belum Hantar</span></td>
                        <td class="text-center"> 
                            <a href=""><i class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                            <a href=""><i class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                            <a href=""><i class="fas fa-trash" style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                            <a href=""><i class="fas fa-print" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                            <a href=""><i class="fas fa-file" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                        </td>
                    </tr>
                    <tr style="line-height: 30px;">
                        <td>1</td>
                        <td>Bentong</td>
                        <td>Masjid</td>
                        <td>N/A</td>
                        <td>0/20</td>
                        <td class=""><span class="badge badge-pill badge-warning">Belum Hantar</span></td>
                        <td class="text-center"> 
                            <a href=""><i class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                            <a href=""><i class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                            <a href=""><i class="fas fa-trash" style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                            <a href=""><i class="fas fa-print" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                            <a href=""><i class="fas fa-file" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                        </td>
                    </tr>
                    <tr style="line-height: 30px;">
                        <td>1</td>
                        <td>Bentong</td>
                        <td>Masjid</td>
                        <td>N/A</td>
                        <td>0/20</td>
                        <td class=""><span class="badge badge-pill badge-warning">Belum Hantar</span></td>
                        <td class="text-center"> 
                            <a href=""><i class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                            <a href=""><i class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                            <a href=""><i class="fas fa-trash" style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                            <a href=""><i class="fas fa-print" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                            <a href=""><i class="fas fa-file" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                        </td>
                    </tr>
                    <tr style="line-height: 30px;">
                        <td>1</td>
                        <td>Bentong</td>
                        <td>Masjid</td>
                        <td>N/A</td>
                        <td>0/20</td>
                        <td class=""><span class="badge badge-pill badge-warning">Belum Hantar</span></td>
                        <td class="text-center"> 
                            <a href=""><i class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                            <a href=""><i class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                            <a href=""><i class="fas fa-trash" style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                            <a href=""><i class="fas fa-print" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                            <a href=""><i class="fas fa-file" style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@stop
