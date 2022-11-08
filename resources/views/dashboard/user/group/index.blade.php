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
                                                <th>name</th>
                                                <th>member</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($groups as $group)
                                                <tr>


                                                    <td class="text-nowrap align-middle">{{ $loop->iteration }}</td>
                                                    <td class="text-nowrap align-middle">{{ $group->name }}</td>
                                                    <td class="text-nowrap align-middle">{{ $group->User->first_name }}  {{ $group->User->last_name }}</td>
                                                    <td class="text-nowrap align-middle">
                                                        @if ($group->status == 1)
                                                            <span
                                                                class="badge bg-success badge-sm  me-1 mb-1 mt-1">accepte</span>
                                                        @else
                                                            <span class="badge bg-info badge-sm  me-1 mb-1 mt-1">wait</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-nowrap align-middle">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Apply">
                                                            <a class="remove-item-btn" data-bs-toggle="modal"
                                                                href="#join">
                                                                <button class="btn btn-sm btnprimary badge"
                                                                    data-target="#user-form-modal" data-bs-toggle=""
                                                                    type="button">Edit</button> <button
                                                                    class="btn btn-sm btn-badge badge" type="button"></button>

                                                            </a>
                                                    </td>
                                                    <div class="modal fade zoomIn" id="join" tabindex="-1"
                                                        aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="btn-close"></button>
                                                                </div>
                                                                <div class="modal-body p-5 text-center">
                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                        trigger="loop"
                                                                        colors="primary:#405189,secondary:#f06548"
                                                                        style="width:90px;height:90px"></lord-icon>
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">Create Group</h3>
                                                                        </div>
                                                                        <form
                                                                            action="{{ route('student.groupupdate', $group->id) }}"
                                                                            method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="card-body">



                                                                                <div class="form-group">
                                                                                    <label for="exampleInputEmail1">Group
                                                                                        name</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $group->name }}"
                                                                                        name="name"
                                                                                        id="exampleInputEmail1">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="exampleInputnumber">member
                                                                                        1</label>
                                                                                    <select name="user_id_1" id=""
                                                                                        class="form-control">
                                                                                        <option
                                                                                            value="{{ $group->user_id_1 }}">
                                                                                            {{ $group->User->first_name }}
                                                                                            {{ $group->User->last_name }}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputnumber">member
                                                                                        2</label>
                                                                                    <select name="user_id_2" id=""
                                                                                        class="form-control">

                                                                                        @if ($group->user_id_2 == null)
                                                                                        <option value=""></option>
                                                                                            @foreach ($users as $user)
                                                                                                <option
                                                                                                    {{ $user->id == $group->user_id_2 ? 'disabled' : '' }}
                                                                                                    value="{{ $user->id }}"
                                                                                                    @if ($user->id == $group->user_id_2) selected @endif>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        @else
                                                                                        @endif
                                                                                        @foreach ($users as $user)
                                                                                            @if ($user->id == $group->user_id_2)
                                                                                                <option
                                                                                                    value="{{ $user->id }}"
                                                                                                    selected>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach

                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputnumber">member
                                                                                        3</label>
                                                                                    <select name="user_id_3" id=""
                                                                                        class="form-control">
                                                                                        @if ($group->user_id_3 == null)
                                                                                        <option value=""></option>
                                                                                            @foreach ($users as $user)
                                                                                                <option
                                                                                                    {{ $user->id == $group->user_id_3 ? 'disabled' : '' }}
                                                                                                    value="{{ $user->id }}"
                                                                                                    @if ($user->id == $group->user_id_3) selected @endif>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        @else
                                                                                        @endif
                                                                                        @foreach ($users as $user)
                                                                                            @if ($user->id == $group->user_id_3)
                                                                                                <option
                                                                                                    value="{{ $user->id }}"
                                                                                                    selected>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach

                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputnumber">member
                                                                                        4</label>
                                                                                    <select name="user_id_4"
                                                                                        id=""
                                                                                        class="form-control">
                                                                                        @if ($group->user_id_4 == null)
                                                                                        <option value=""></option>
                                                                                            @foreach ($users as $user)
                                                                                                <option
                                                                                                    {{ $user->id == $group->user_id_4 ? 'disabled' : '' }}
                                                                                                    value="{{ $user->id }}"
                                                                                                    @if ($user->id == $group->user_id_4) selected @endif>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        @else
                                                                                        @endif
                                                                                        @foreach ($users as $user)
                                                                                            @if ($user->id == $group->user_id_4)
                                                                                                <option
                                                                                                    value="{{ $user->id }}"
                                                                                                    selected>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputnumber">member
                                                                                        5</label>
                                                                                    <select name="user_id_5"
                                                                                        id=""
                                                                                        class="form-control">
                                                                                        @if ($group->user_id_5 == null)
                                                                                        <option value=""></option>
                                                                                            @foreach ($users as $user)
                                                                                                <option
                                                                                                    {{ $user->id == $group->user_id_5 ? 'disabled' : '' }}
                                                                                                    value="{{ $user->id }}"
                                                                                                    @if ($user->id == $group->user_id_5) selected @endif>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        @else
                                                                                        @endif
                                                                                        @foreach ($users as $user)
                                                                                            @if ($user->id == $group->user_id_5)
                                                                                                <option
                                                                                                    value="{{ $user->id }}"
                                                                                                    selected>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach

                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputnumber">member
                                                                                        6</label>
                                                                                    <select name="user_id_6"
                                                                                        id=""
                                                                                        class="form-control">

                                                                                        @if ($group->user_id_6 == null)
                                                                                        <option value=""></option>
                                                                                            @foreach ($users as $user)
                                                                                                <option
                                                                                                    {{ $user->id == $group->user_id_6 ? 'disabled' : '' }}
                                                                                                    value="{{ $user->id }}"
                                                                                                    @if ($user->id == $group->user_id_6) selected @endif>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        @else
                                                                                        @endif
                                                                                        @foreach ($users as $user)
                                                                                            @if ($user->id == $group->user_id_6)
                                                                                                <option
                                                                                                    value="{{ $user->id }}"
                                                                                                    selected>
                                                                                                    {{ $user->first_name }}
                                                                                                    {{ $user->last_name }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach

                                                                                    </select>
                                                                                </div>


                                                                            </div>
                                                                            <div class="card-footer text-end">

                                                                                <button
                                                                                    class="btn btnprimary my-1">update</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <div class="dataTables_paginate paging_bootstrap_full_number"
                                            id="sample_1_paginate">

                                            {!! $groups->withQueryString()->links('pagination::bootstrap-4') !!}
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
