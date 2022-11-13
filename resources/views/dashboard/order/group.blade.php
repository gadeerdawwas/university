@extends('dashboard.include.layout')

@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Group</h1>


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
                                                <th>Group title</th>
                                                <th>Project Name</th>
                                                <th>Student </th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($order_group as $Group)
                                                <tr>


                                                    <td class="text-nowrap align-middle">{{ $loop->iteration }}</td>
                                                    <td class="text-nowrap align-middle">{{ $Group->Group->name }} </td>
                                                    <td class="text-nowrap align-middle">{{ $Group->Project->title }}</td>
                                                    <td class="text-nowrap align-middle">



                                                        @foreach ($users as $user)
                                                            @if ($user->id == $Group->Group->user_id_1)
                                                                <a class="remove-item-btn"
                                                                    href="{{ route('supervisor.groupinfo',$Group->id) }}">
                                                                    <li>{{ $user->first_name }} {{ $user->last_name }}</li>
                                                                </a>
                                                            @endif

                                                            @if ($user->id == $Group->Group->user_id_2)
                                                                <a class="remove-item-btn"
                                                                   href="{{ route('supervisor.groupinfo',$Group->id) }}">
                                                                    <li>{{ $user->first_name }} {{ $user->last_name }}</li>
                                                                </a>
                                                            @endif

                                                            @if ($user->id == $Group->Group->user_id_3)
                                                                <a class="remove-item-btn"
                                                                   href="{{ route('supervisor.groupinfo',$Group->id) }}">
                                                                    <li>{{ $user->first_name }} {{ $user->last_name }}
                                                                    </li>
                                                                </a>
                                                            @endif
                                                            @if ($user->id == $Group->Group->user_id_4)
                                                                <a class="remove-item-btn"
                                                                   href="{{ route('supervisor.groupinfo',$Group->id) }}">
                                                                    <li>{{ $user->first_name }} {{ $user->last_name }}
                                                                    </li>
                                                                </a>
                                                            @endif
                                                            @if ($user->id == $Group->Group->user_id_5)
                                                                <a class="remove-item-btn"
                                                                   href="{{ route('supervisor.groupinfo',$Group->id) }}">
                                                                    <li>{{ $user->first_name }} {{ $user->last_name }}
                                                                    </li>
                                                                </a>
                                                            @endif
                                                            @if ($user->id == $Group->Group->user_id_6)
                                                                <a class="remove-item-btn"
                                                                   href="{{ route('supervisor.groupinfo',$Group->id) }}">
                                                                    <li>{{ $user->first_name }} {{ $user->last_name }}
                                                                    </li>
                                                                </a>
                                                            @endif
                                                        @endforeach

                                                    </td>
                                                    <td class="text-nowrap align-middle">
                                                        @if ($Group->status == 1)
                                                            <span
                                                                class="badge bg-success badge-sm  me-1 mb-1 mt-1">accepte</span>
                                                        @else
                                                            <span
                                                                class="badge bg-danger badge-sm  me-1 mb-1 mt-1">decline</span>
                                                        @endif
                                                    </td>


                                                    <td class="text-center align-middle">



                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Apply">
                                                            <a class="remove-item-btn" data-bs-toggle="modal"
                                                                href="#deleteRecordModal{{ $Group->id }}">
                                                                <button class="btn btn-sm btnprimary badge"
                                                                    data-target="#user-form-modal" data-bs-toggle=""
                                                                    type="button">Edit</button> <button
                                                                    class="btn btn-sm btn-badge badge" type="button"><i
                                                                        class="fa fa-trash"></i></button>

                                                            </a>
                                                        </li>


                                                        <div class="modal fade zoomIn"
                                                            id="deleteRecordModal{{ $Group->id }}" tabindex="-1"
                                                            aria-labelledby="deleteRecordLabel" aria-hidden="true">
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
                                                                            action="{{ route('supervisor.accepteorder', $Group->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <div class="mt-4 text-center">


                                                                                <h4 class="fs-semibold">
                                                                                    Are you sure to accept apply ?
                                                                                </h4>

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
                                                        {{-- <div class="modal fade zoomIn"
                                                            id="infoRecordModal{{ $Group->id }}" tabindex="-1"
                                                            aria-labelledby="deleteRecordLabel" aria-hidden="true">
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
                                                                        <form action="#" method="post">
                                                                            @csrf
                                                                            <div class="">
                                                                                <div class="row">




                                                                                @foreach ($users as $user)
                                                                                <div class="col-md-4">
                                                                                    @if ($user->id == $Group->Group->user_id_1)
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Name
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->first_name }}
                                                                                                {{ $user->last_name }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Email
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->email }}
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Deparment
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->department }}
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">level
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->level : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">major
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->major : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">GPA
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->GPA : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">CV
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">
                                                                                                {{ $user->Userinfo ? $user->Userinfo->cv : '' }}</label>
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    @if ($user->id == $Group->Group->user_id_2)
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Name
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->first_name }}
                                                                                                {{ $user->last_name }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Email
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->email }}
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Deparment
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->department }}
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">level
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->level : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">major
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->major : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">GPA
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->GPA : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">CV
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">
                                                                                                {{ $user->Userinfo ? $user->Userinfo->cv : '' }}</label>
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    @if ($user->id == $Group->Group->user_id_3)
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Name
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->first_name }}
                                                                                                {{ $user->last_name }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Email
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->email }}
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Deparment
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->department }}
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">level
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->level : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">major
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->major : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">GPA
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">{{ $user->Userinfo ? $user->Userinfo->GPA : '' }}</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputEmail1">CV
                                                                                                : </label>
                                                                                            <label
                                                                                                for="exampleInputEmail1">
                                                                                                {{ $user->Userinfo ? $user->Userinfo->cv : '' }}</label>
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                                @endforeach
                                                                            </div>
                                                                                <div
                                                                                    class="hstack gap-2 justify-content-center remove">
                                                                                    <button class="btn btn btn-danger"
                                                                                        data-bs-dismiss="modal"><i
                                                                                            class="ri-close-line me-1 align-middle"></i>
                                                                                        close</button>

                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <div class="modal fade zoomIn" id="#deleteRecordModal{{$Group->id}}" tabindex="-1"
                                                            aria-labelledby="deleteRecordLabel" aria-hidden="true">
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
                                                                            action="{{ route('supervisor.accepteorder', $Group->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <div class="mt-4 text-center">


                                                                                <h4 class="fs-semibold">
                                                                                    Are you sure to accept apply ?
                                                                                </h4>

                                                                                <div
                                                                                    class="hstack gap-2 justify-content-center remove">
                                                                                    <button class="btn btn btn-danger"
                                                                                        data-bs-dismiss="modal"><i
                                                                                            class="ri-close-line me-1 align-middle"></i>
                                                                                        close</button>
                                                                                    <button class="btn btn-success"
                                                                                        id="delete-record">OK
                                                                                        !!</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
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

                                            {!! $order_group->withQueryString()->links('pagination::bootstrap-4') !!}
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
