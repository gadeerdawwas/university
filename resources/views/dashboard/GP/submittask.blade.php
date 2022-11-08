@extends('dashboard.include.layout')

@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Announcement</h1>


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
                                                <th>Note</th>
                                                <th>Grade</th>
                                                <th>submit status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($tasks as $task)
                                                <tr>

                                                    <td class="text-nowrap align-middle">{{ $loop->iteration }}</td>
                                                    <td class="text-nowrap align-middle">{{ $task->Task->title }}</td>
                                                    <td class="text-nowrap align-middle">{{ $task->Task->description }}</td>
                                                    <td class="text-nowrap align-middle">{{ $task->note }}</td>
                                                    <td class="text-nowrap align-middle">{{ $task->grade }}</td>
                                                    <td class="text-nowrap align-middle">


                                                        @if ($task->submit_status == 1)
                                                            <span
                                                                class="badge bg-success badge-sm  me-1 mb-1 mt-1">submited</span>
                                                        @else
                                                            <span
                                                                class="badge bg-danger badge-sm  me-1 mb-1 mt-1">no submite</span>
                                                        @endif
                                                    </td>

                                                    <td class="text-center align-middle">

                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="detail">
                                                            <a class="remove-item-btn"
                                                                href="{{ route('supervisor.detailtask',$task->id) }}">
                                                                <button class="btn btn-sm btnprimary badge"
                                                                    data-target="#user-form-modal" data-bs-toggle=""
                                                                    type="button">Detail</button> <button
                                                                    class="btn btn-sm btn-badge badge" type="button"></button>

                                                            </a>











                                </div>
                                </td>
                                </tr>
                                @endforeach



                                </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">

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
    <script src="{{ asset('asset/dashboard/assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('asset/dashboard/assets/js/select2.js') }}"></script>
@endpush
