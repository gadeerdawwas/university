@extends('dashboard.include.layout')

@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Course Work </h1>


            </div>
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
            <!-- PAGE-HEADER END -->
            <div class="row">

                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $task->Task->title  }}</h3>
                        </div>
                        <div class="card-body">
                           <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Title</label>
                                <div class="col-sm-10">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">{{ $task->Task->title }}</label>
                                </div>
                            </div>

                           <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
                                <div class="col-sm-10">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">{{ $task->Task->description }}</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <form action="{{ route('student.submittask',$task->id) }}" method="post" enctype="multipart/form-data">
                               @csrf
                                <div class="form">
                                    <input type="hidden" name="id" value="{{  $task->id }}">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-label">file</label>
                                            <input type="file" class="form-control" name="file" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-footer mt-2">
                                    <button class="btn btnprimary">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Row -->

            <!-- End Row -->
            <!-- Row -->

            <!-- End Row -->
        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
@endsection

@push('script')


  <!-- Select2 JS-->
  <script src="{{ asset('asset/dashboard/assets/plugins/select2/select2.full.min.js')}}"></script>
  <script src="{{ asset('asset/dashboard/assets/js/select2.js')}}"></script>


@endpush
