@extends('dashboard.include.layout')

@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Course Work</h1>


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
            <div class="row row-cards">
                <div class="col-lg-12 col-xl-12">
                    <div class="input-group mb-5">

                    </div>
                    <div class="card">
                        <div class="card-header border-bottom-0">
                            <h2 class="card-title"></h2>
                            <div class="page-options ms-auto">

                            </div>
                        </div>

                        <div class="e-table px-5 pb-5">
                            <div class="table-responsive table-lg">
                                <table class="table border-top table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            {{-- <th>Required</th> --}}
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach ($tasks as $task)
                                       <tr>


                                            <td class="text-nowrap align-middle">{{ $loop->iteration }}</td>
                                            <td class="text-nowrap align-middle">{{ $task->title }}</td>
                                            <td class="text-nowrap align-middle">{{ $task->description }}</td>
                                            {{-- <td class="text-nowrap align-middle">{{ $task->required }}</td> --}}

                                            <td class="text-center align-middle">



                                                <li class="list-inline-item"
                                                data-bs-toggle="tooltip"
                                                data-bs-trigger="hover"
                                                data-bs-placement="top" title="detail">
                                                <a class="remove-item-btn"
                                                    data-bs-toggle="modal"
                                                    href="#infoRecordModal{{ $task->id }}">
                                                    <button class="btn btn-sm btnprimary badge" data-target="#user-form-modal" data-bs-toggle="" type="button">Detail</button> <button class="btn btn-sm btn-badge badge" type="button"><i class="fa fa-trash"></i></button>

                                                </a>
                                                <li class="list-inline-item"
                                                data-bs-toggle="tooltip"
                                                data-bs-trigger="hover"
                                                data-bs-placement="top" title="Delete">
                                                <a class="remove-item-btn"
                                                    data-bs-toggle="modal"
                                                    href="#deleteRecordModal{{ $task->id }}">
                                                    <button class="btn btn-sm btn-danger badge" data-target="#user-form-modal" data-bs-toggle="" type="button">Delete</button> <button class="btn btn-sm btn-badge badge" type="button"><i class="fa fa-trash"></i></button>

                                                </a>
                                            </li>


                                            <div class="modal fade zoomIn" id="deleteRecordModal{{ $task->id }}"
                                            tabindex="-1" aria-labelledby="deleteRecordLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"
                                                            id="btn-close"></button>
                                                    </div>
                                                    <div class="modal-body p-5 text-center">
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/gsqxdxog.json"
                                                            trigger="loop"
                                                            colors="primary:#405189,secondary:#f06548"
                                                            style="width:90px;height:90px"></lord-icon>
                                                        <form
                                                            action="{{ route('supervisor.tasks.destroy', $task->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <div class="mt-4 text-center">
                                                                <h4 class="fs-semibold"
                                                                >Are you sure you want to delete this course work?
                                                            </h4>
                                                                {{-- <p class="text-muted fs-14 mb-4 pt-1">Deleting your company will remove all of your information from our database.</p> --}}
                                                                <div
                                                                    class="hstack gap-2 justify-content-center remove">

                                                                    <button type="button" class="btn btn-danger"
                                                                    data-bs-dismiss="modal">Close</button>


                                                                    <button class="btn btn-success"
                                                                        id="delete-record">OK
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>



                                            <div class="modal fade zoomIn" id="infoRecordModal{{ $task->id }}"
                                            tabindex="-1" aria-labelledby="deleteRecordLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="fs-semibold">Required</h4>
                                                    </div>
                                                    <div class="modal-body p-5 text-center">
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/gsqxdxog.json"
                                                            trigger="loop"
                                                            colors="primary:#405189,secondary:#f06548"
                                                            style="width:90px;height:90px"></lord-icon>
                                                        <form
                                                            action="{{ route('supervisor.tasks.destroy', $task->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <div class="mt-4 text-center">

                                                                <span>{{ $task->required }}</span>

                                                                {{-- <p class="text-muted fs-14 mb-4 pt-1">Deleting your company will remove all of your information from our database.</p> --}}
                                                                <div
                                                                    class="hstack gap-2 justify-content-center remove">
                                                                    <button
                                                                        class="btn btnprimary link-success fw-medium text-decoration-none"
                                                                        data-bs-dismiss="modal"><i
                                                                            class="ri-close-line me-1 align-middle"></i>
                                                                        Close</button>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>




                                        </div>
                                            </td>
                                        </tr>
                                       @endforeach



                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <div class="dataTables_paginate paging_bootstrap_full_number"
                                        id="sample_1_paginate">

                                        {!! $tasks->withQueryString()->links('pagination::bootstrap-4') !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- COL-END -->
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
