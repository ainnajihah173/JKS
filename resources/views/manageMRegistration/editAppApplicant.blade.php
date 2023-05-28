@extends('layout.userBase')

@section('content')

<div class="nav-wrapper position-relative end-0">
    <ul class="nav nav-pills nav-fill p-1" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                href="#profile-tabs-simple" role="tab" aria-controls="profile"
                aria-selected="true">
                My Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-simple"
                role="tab" aria-controls="dashboard" aria-selected="false">
                Address
            </a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="profile-tabs-simple" role="tabpanel"
            aria-labelledby="home-tab">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Enter
                            Name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Enter
                            Email</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="dashboard-tabs-simple" role="tabpanel"
            aria-labelledby="profile-tab">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Enter
                            Address</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Enter
                            State</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
