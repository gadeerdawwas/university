@extends('dashboard.include.layout')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Edit Profile</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">

                <div class="col-xl-11">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <form action="{{ route('student.info') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">


                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputname">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputname" value="{{ Auth::user()->first_name }}" disabled placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputname1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputname1" value="{{ Auth::user()->last_name }}" disabled  placeholder="Enter Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CV</label>
                                <input type="file" class="form-control" name="file" id="exampleInputEmail1" placeholder="Email address">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputnumber">level</label>
                                <input type="text" class="form-control" name="level" value="{{ (($info ? $info->level : '')) }}" id="exampleInputnumber" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputnumber">major</label>
                                <input type="text" class="form-control" name="major" value="{{ (($info ? $info->major : '')) }}" id="exampleInputnumber" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputnumber">GPA</label>
                                <input type="text" class="form-control" name="GPA"  value="{{ (($info ? $info->GPA : '')) }}" id="exampleInputnumber" required>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            
                            <button  class="btn btnprimary my-1">Save</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- ROW-1 CLOSED -->

        </div>
        <!--CONTAINER CLOSED -->

    </div>
</div>
@endsection
