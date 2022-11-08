@extends('dashboard.include.layout')


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


                                <form action="{{ route('supervisor.projects.store') }}" method="post" enctype="multipart/form-data">
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
                                            <input class="form-control" type="file" name="requirment">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-3 form-label mb-4">Image :</label>
                                        <div class="col-md-9 mb-4">
                                            <input class="form-control" type="file" name="file">
                                        </div>
                                    </div>
                                    <div class="row">





                                            <label class="col-md-3 form-label mb-4">Tag :</label>

                                            <div class="col-md-9 mb-4">
                                                <select class="form-control select2" name="tag[]" data-placeholder="Choose Browser"  multiple="">

                                                    <option value="Artificial Intelligence">
                                                        Artificial Intelligence
                                                    </option>
                                                    <option value="Python">
                                                        Python
                                                    </option>
                                                    <option value="Web Developer">
                                                        Web Developer
                                                    </option>
                                                    <option  value="Data science">
                                                        Data science
                                                    </option>

                                                </select>


                                        </div>

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
