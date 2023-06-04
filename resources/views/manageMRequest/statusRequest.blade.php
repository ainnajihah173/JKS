@extends('layout.userBase')

@section('content')
    <div class="page-title">
        <h6>Maklumat Permohonan</h6>
    </div>

    <div class="row align-items-center">
        <div class="col-auto text-end ms-auto">
            <a href="add-exam.html" class="btn btn-primary">Daftar Kebenaran</a>
        </div>
    </div>

   <div class="col-md-12 mt-4">
        <div class="table-responsive">
            <table class="table table-bordered align-left mb-4" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th>Bil</th>
                        <th>Anjuran</th>
                        <th>Lokasi</th>
                        <th>Nama Peserta</th>
                        <th>Kelulusan</th>
                        <th>Kehadiran</th>
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
@endsection
