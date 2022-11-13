@extends('dashboard.include.layout')

@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title"> Supervisor</h1>


                </div>

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

                                <div class="row ">
                                    <div class="col-xxl-5 col-sm-12">


                                        <form action="{{ route('GPcommittee.searchsupervisor') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <div class="row" style="">

                                                    <div class="col-md-3">

                                                        <button class="btn btn-primary ">search</button>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input
                                                        class="form-control"
                                                        name="search"

                                                      />
                                                    </div>

                                                </div>



                                            </div>

                                        </form>
                                    </div><!--end col-->




                                </div><!--end row-->
                            </div>

                            <div class="e-table px-5 pb-5">
                                <div class="table-responsive table-lg">
                                    <table class="table border-top table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>Description</th>
                                                <th>Department</th>
                                                <th>cv</th>
                                                <th>level</th>
                                                <th>major</th>
                                                <th>GPA</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($users as $user)
                                                <tr>

                                                    <td class="text-nowrap align-middle">{{ $loop->iteration }}</td>

                                                    <td class="text-nowrap align-middle">{{ $user->first_name }} {{ $user->last_name }} </td>
                                                    <td class="text-nowrap align-middle"> {{ $user->email }}</td>
                                                    <td class="text-nowrap align-middle"> {{ $user->description }}</td>
                                                    <td class="text-nowrap align-middle"> {{ $user->department }}</td>
                                                    <td class="text-nowrap align-middle">  <a href="{{ (($user->Userinfo) ? asset('upload/info/'.$user->Userinfo->cv) : '' )}}" download>
                                                        {{ (($user->Userinfo) ? $user->Userinfo->cv : '' )}}
                                                      </a></td>
                                                    <td class="text-nowrap align-middle"> {{ (($user->Userinfo) ? $user->Userinfo->level : '' )}}</td>
                                                    <td class="text-nowrap align-middle"> {{ (($user->Userinfo) ? $user->Userinfo->major : '') }} </td>
                                                    <td class="text-nowrap align-middle"> {{ (($user->Userinfo) ? $user->Userinfo->GPA : '' )}}</td>


                                            </tr>
                                            @endforeach



                                </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">

                                        {!! $users->withQueryString()->links('pagination::bootstrap-4') !!}
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
