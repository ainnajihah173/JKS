@extends('layout.userBase')

@section('content')
    <div class="page-title">
        <h6>Maklumat Pasangan</h6>
    </div>
    <div class="container mt-4">
        <div class="left">
            <span>Nama Suami</span>
        </div>
        <div class="right">
            <span>: Ali Bin Abu</span>
        </div>
    </div>
    <div class="container mt-2">
        <div class="left">
            <span>No. K/P Suami</span>
        </div>
        <div class="right">
            <span>: 981234050981</span>
        </div>
    </div>
    <div class="container mt-2">
        <div class="left">
            <span>Nama Isteri</span>
        </div>
        <div class="right">
            <span>: Zubaidah Binti Awang</span>
        </div>
    </div>
    <div class="container mt-2">
        <div class="left">
            <span>No. K/P Isteri</span>
        </div>
        <div class="right">
            <span>: 981234050982</span>
        </div>
    </div>
    <div class="container mt-2">
        <div class="left">
            <span>Kategori Pendaftaran Nikah</span>
        </div>
        <div class="right">
            <select class="form-select" aria-label="Default select example" style="width:50%;">
                <option selected>--- Sila Pilih ---</option>
                <option value="1">Pendaftaran Nikah Dengan Kebenaran</option>
                <option value="2">Pendaftaran Nikah Sukarela</option>
            </select>
        </div>
    </div>
    <div class="container mt-3">
        <div class="left">
            <span>No. Akaun Terima Kebenaran Berkahwin</span>
        </div>
        <div class="right">
            <span>: XXXXXXXXXXXXX</span>
        </div>
    </div>
    <div class="container d-flex justify-content-center mb-3">
      <a class="btn btn-primary" href="#" role="button">Seterusnya</a>
    </div>
@endsection
