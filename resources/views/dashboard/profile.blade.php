@extends('dashboard.include.layout')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Profile</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row" id="user-profile">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="wideget-user mb-2">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <div class="panel profile-cover">
                                                <div class="profile-cover__action bg-img"></div>
                                                <div class="profile-cover__img">
                                                    <div class="profile-img-1">
                                                        <img src="{{ asset('asset/dashboard/assets/images/users/21.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="profile-img-content text-dark text-start">
                                                        <div class="text-dark">
                                                            <h3 class="h3 mb-2">Percy Kewshun</h3>
                                                            <h5 class="text-muted">Web Developer</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-profile">
                                                    <button class="btn btn-primary mt-1 mb-1"> <i class="fa fa-edit"></i> <span>Edit</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="px-0 px-sm-4">
                                                <div class="social social-profile-buttons mt-5 float-end">
                                                    <div class="mt-3">
                                                        <a class="social-icon text-primary" href="https://www.facebook.com/" target="_blank"></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-profile-contact-list">
                                        <div class="me-5">
                                            <div class="media mb-4 d-flex">
                                                <div class="media-icon bg-secondary bradius me-3 mt-1">
                                                    <i class="fe fe-edit fs-20 text-white"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span class="text-muted">Groups</span>
                                                    <div class="fw-semibold fs-25">
                                                        5
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="me-5 mt-5 mt-md-0">
                                            <div class="media mb-4 d-flex">
                                                <div class="media-icon bg-danger bradius text-white me-3 mt-1">
                                                    <span class="mt-3">
                                                        <i class="fe fe-users fs-20"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <span class="text-muted">Student</span>
                                                    <div class="fw-semibold fs-25">
                                                        8
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="me-0 mt-5 mt-md-0">
                                            <div class="media">
                                                <div class="media-icon bg-primary text-white bradius me-3 mt-1">
                                                    <span class="mt-3">
                                                        <i class="fe fe-cast fs-20"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <span class="text-muted">Project</span>
                                                    <div class="fw-semibold fs-25">
                                                        3
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Groups</div>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <div class="media overflow-visible">
                                            <img class="avatar brround avatar-md me-3" src="{{ asset('asset/dashboard/assets/images/users/18.jpg')}}" alt="avatar-img">
                                            <div class="media-body valign-middle mt-2">
                                                <a href="javascript:void(0)" class=" fw-semibold text-dark">Groups name</a>
                                                <p class="text-muted mb-0">Groups title</p>
                                            </div>
                                            <div class="media-body valign-middle text-end overflow-visible mt-2">
                                                <button class="btn btn-sm btn-primary" type="button">view</button>
                                            </div>
                                        </div>
                                        <div class="media overflow-visible">
                                            <img class="avatar brround avatar-md me-3" src="{{ asset('asset/dashboard/assets/images/users/18.jpg')}}" alt="avatar-img">
                                            <div class="media-body valign-middle mt-2">
                                                <a href="javascript:void(0)" class=" fw-semibold text-dark">Groups name</a>
                                                <p class="text-muted mb-0">Groups title</p>
                                            </div>
                                            <div class="media-body valign-middle text-end overflow-visible mt-2">
                                                <button class="btn btn-sm btn-primary" type="button">view</button>
                                            </div>
                                        </div>
                                        <div class="media overflow-visible">
                                            <img class="avatar brround avatar-md me-3" src="{{ asset('asset/dashboard/assets/images/users/18.jpg')}}" alt="avatar-img">
                                            <div class="media-body valign-middle mt-2">
                                                <a href="javascript:void(0)" class=" fw-semibold text-dark">Groups name</a>
                                                <p class="text-muted mb-0">Groups title</p>
                                            </div>
                                            <div class="media-body valign-middle text-end overflow-visible mt-2">
                                                <button class="btn btn-sm btn-primary" type="button">view</button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
@endsection
