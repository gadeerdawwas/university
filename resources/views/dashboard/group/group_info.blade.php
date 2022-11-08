@extends('dashboard.include.layout')

@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Group info</h1>


            </div>

            <!-- PAGE-HEADER END -->
            <div class="row">
                @foreach ($group as $Group)

                @foreach ($users as $user)
                @if ($user->id == $Group->user_id_1)
                <div class="col-xl-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Name : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->first_name }} {{ $user->last_name }}</label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Email : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->email }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Description : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->description }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Department : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->department }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">level : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->level : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">major : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->major : '') }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">GPA : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->GPA : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">CV : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">
                                             <a href="{{ (($user->Userinfo) ? asset('upload/info/'.$user->Userinfo->cv) : '' )}}" download>
                                                {{ (($user->Userinfo) ? $user->Userinfo->cv : '' )}}
                                              </a>
                                            </label>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                @endif

                @if ($user->id == $Group->user_id_2)
                <div class="col-xl-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Name : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->first_name }} {{ $user->last_name }}</label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Email : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->email }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Description : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->description }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Department : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->department }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">level : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->level : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">major : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->major : '') }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">GPA : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->GPA : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">CV : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">
                                             <a href="{{ (($user->Userinfo) ? asset('upload/info/'.$user->Userinfo->cv) : '' )}}" download>
                                                {{ (($user->Userinfo) ? $user->Userinfo->cv : '' )}}
                                              </a>
                                            </label>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                @endif

                @if ($user->id == $Group->user_id_3)
                <div class="col-xl-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Name : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->first_name }} {{ $user->last_name }}</label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Email : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->email }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Description : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->description }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Department : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->department }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">level : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->level : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">major : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->major : '') }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">GPA : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->GPA : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">CV : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">
                                             <a href="{{ (($user->Userinfo) ? asset('upload/info/'.$user->Userinfo->cv) : '' )}}" download>
                                                {{ (($user->Userinfo) ? $user->Userinfo->cv : '' )}}
                                              </a>
                                            </label>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @if ($user->id == $Group->user_id_4)
                <div class="col-xl-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Name : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->first_name }} {{ $user->last_name }}</label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Email : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->email }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Description : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->description }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Department : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->department }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">level : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->level : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">major : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->major : '') }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">GPA : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->GPA : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">CV : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">
                                             <a href="{{ (($user->Userinfo) ? asset('upload/info/'.$user->Userinfo->cv) : '' )}}" download>
                                                {{ (($user->Userinfo) ? $user->Userinfo->cv : '' )}}
                                              </a>
                                            </label>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @if ($user->id == $Group->user_id_5)
                <div class="col-xl-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Name : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->first_name }} {{ $user->last_name }}</label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Email : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->email }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Description : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->description }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Department : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->department }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">level : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->level : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">major : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->major : '') }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">GPA : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->GPA : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">CV : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">
                                             <a href="{{ (($user->Userinfo) ? asset('upload/info/'.$user->Userinfo->cv) : '' )}}" download>
                                                {{ (($user->Userinfo) ? $user->Userinfo->cv : '' )}}
                                              </a>
                                            </label>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @if ($user->id == $Group->user_id_6)
                <div class="col-xl-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Name : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->first_name }} {{ $user->last_name }}</label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Email : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->email }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Description : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->description }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Department : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ $user->department }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">level : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->level : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">major : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->major : '') }} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">GPA : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">{{ (($user->Userinfo) ? $user->Userinfo->GPA : '' )}} </label>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">CV : </label>
                                    <div class="col-md-9">
                                        <label class="form-label">
                                            <a href="{{ (($user->Userinfo) ? asset('upload/info/'.$user->Userinfo->cv) : '' )}}" download>
                                                {{ (($user->Userinfo) ? $user->Userinfo->cv : '' )}}
                                              </a>
                                        </label>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            @endforeach

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
