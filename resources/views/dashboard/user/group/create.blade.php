@extends('dashboard.include.layout')

@push('style')
<script type = "text/javascript"
src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
@endpush
@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Create Group</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Group</li>
                        </ol>
                    </div>
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

                    <div class="col-xl-11">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create Group</h3>
                            </div>
                            {{-- <form id="postcontent" enctype="multipart/form-data"> --}}
                            <form action="{{ route('student.savegroup') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">



                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Group name</label>
                                        <input type="text" class="form-control" required name="name"
                                            id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputnumber">member 1</label>
                                        <select name="user_id_1" id="" class="form-control">
                                            <option value="{{ auth()->user()->id }}">{{ auth()->user()->first_name }}
                                                {{ auth()->user()->last_name }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputnumber">member 2</label>
                                        <select name="user_id_2" id="" class="form-control">
                                            <option value=""></option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->first_name }}
                                                    {{ $user->last_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputnumber">member 3</label>
                                        <select name="user_id_3" id="" class="form-control">
                                            <option value=""></option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->first_name }}
                                                    {{ $user->last_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputnumber">member 4</label>
                                        <select name="user_id_4" id="" class="form-control">
                                            <option value=""></option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->first_name }}
                                                    {{ $user->last_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputnumber">member 5</label>
                                        <select name="user_id_5" id="" class="form-control">
                                            <option value=""></option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->first_name }}
                                                    {{ $user->last_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputnumber">member 6</label>
                                        <select name="user_id_6" id="" class="form-control">
                                            <option value=""></option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->first_name }}
                                                    {{ $user->last_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <label for="exampleInputnumber">Tag :</label>

                                        <div class="form-control">
                                            <select class="form-control select2" name="tag" data-placeholder="Choose Browser" >
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value="Artificial Intelligence">
                                                    Artificial Intelligence
                                                </option>
                                                <option value="Python">
                                                    Python
                                                </option>
                                                <option value="Web Development">
                                                    Web Development
                                                </option>
                                                <option  value="Data science">
                                                    Data science
                                                </option>

                                            </select>


                                    </div>
                                    <div class="form-group">

                                        <label for="exampleInputnumber">Project :</label>

                                        <div class="form-control">
                                            <select class="form-control select2" name="project" data-placeholder="Choose Browser"  >

                                            </select>


                                    </div>



                                </div>
                                <div class="card-footer text-end">

                                    <button class="btn btnprimary my-1 ">Save</button>
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


@push('script')
<script>
    $('select[name="tag"]').on('change', function() {
                var tag=$(this).val();
                console.log(tag);

                $.ajax({
                        url: "{{ URL::to('student/project_tag') }}/" + tag,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            console.log(data);

                            $('select[name="project"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="project"]').append('<option value="' +
                                    value + '">' + key + '</option>');
                            });
                        },
                    });
    });

</script>
@endpush
