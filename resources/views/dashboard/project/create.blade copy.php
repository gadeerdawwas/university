@extends('dashboard.include.layout')

@push('style')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />

    <!-- Animate css -->
    <link href="{{ asset('asset/dashboard/assets/css/animated.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Add Product</h1>

                </div>
                <!-- PAGE-HEADER END -->
                @if (session()->has('success'))
                <div class=" text-center alert alert-success alert-dismissible alert-solid alert-label-icon fade show"
                    role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close btn-close-white text-center" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('error'))
                <div class=" text-center alert alert-danger alert-dismissible alert-solid alert-label-icon fade show mb-xl-0"
                    role="alert">
                    <strong></strong>
                    {{ session()->get('error') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif

                <!-- ROW-1 OPEN -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Add Project</div>
                            </div>
                            <div class="card-body">


                                <form action="{{ route('supervisor.projects.store') }}" method="post">
                                    @csrf

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Project Title :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" required name="title"
                                                placeholder="Project Title">
                                        </div>
                                    </div>



                                    <!-- Row -->
                                    <div class="row">
                                        <label class="col-md-3 form-label mb-4">Project Description :</label>
                                        <div class="col-md-9 mb-4">
                                            <textarea class="form-control mb-4 " name="description" placeholder="" required rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 form-label mb-4">Project Requirment :</label>
                                        <div class="col-md-9 mb-4">
                                            <textarea class="form-control mb-4 " name="requirment"  required  rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-3 form-label mb-4">Image :</label>
                                        <div class="col-md-9 mb-4">
                                           <input type="file" name="image" id="">
                                        </div>
                                    </div>
                                    <div class="row">


                                    <form method="post" class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Select2 elements</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Basic</label>
                                            <select class="form-control select2 form-select" data-placeholder="Choose one">
                                                    <option label="Choose one">
                                                    </option>
                                                    <option value="1">Chuck Testa</option>
                                                    <option value="2">Sage Cattabriga-Alosa</option>
                                                    <option value="3">Nikola Tesla</option>
                                                    <option value="4">Cattabriga-Alosa</option>
                                                    <option value="5">Nikola Alosa</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Basic Select2</label>
                                            <select class="form-control select2" data-placeholder="Choose one (with optgroup)">
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"> Select2 with search box</label>
                                            <select class="form-control select2-show-search form-select" data-placeholder="Choose one">
                                                    <option label="Choose one"></option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Users list</label>
                                            <select class="form-control select2" data-placeholder="Choose Browser" multiple>
                                                    <option value="Firefox">
                                                        Firefox
                                                    </option>
                                                    <option value="Chrome selected">
                                                        Chrome
                                                    </option>
                                                    <option value="Safari">
                                                        Safari
                                                    </option>
                                                    <option selected value="Opera">
                                                        Opera
                                                    </option>
                                                    <option value="Internet Explorer">
                                                        Internet Explorer
                                                    </option>
                                                </select>
                                        </div>
                                    </div>
                                </form>
                                    </div>
                                    <!--End Row-->

                                    <!--Row-->

                                    <!--End Row-->
                            </div>
                            <div class="card-footer">
                                <!--Row-->
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <button class="btn btnprimary">Add Product</button>
                                    </div>
                                </div>
                                <!--End Row-->
                            </div>



                            </form>
                        </div>
                    </div>
                </div>
                <!-- /ROW-1 CLOSED -->
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
@endsection

@push('scripte')
    <script src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script src="{{ asset('asset/dashboard/assets/js/froala.js') }}"></script>


    <!-- SIDEBAR JS -->
    <script src="{{ asset('asset/dashboard/assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('asset/dashboard/assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('asset/dashboard/assets/js/select2.js') }}"></script>

    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="{{ asset('assets/dashboard/plugins/wysiwyag/jquery.richtext.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/wysiwyag/wysiwyag.js') }}"></script>
@endpush
