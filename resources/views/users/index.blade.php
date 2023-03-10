{{--************************* start links ************************* --}}

@extends('layout.app')

{{--**************** start title **************** --}}

@section('title_page')
    <title> All Users </title>
@endsection

{{--**************** end title **************** --}}

{{--************************* end links *************************  --}}


{{--************************* start side links ************************* --}}

@section('side_links')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">All Users</li>
        </ol>
    </div>

    <div class="p-2 d-flex justify-content-around w-100">
        <div>
            <div>
                <h5><i class="fa-solid fa-upload"></i> upload your sheet excel Users </h5>
            </div>
            <div>
                <form class="row g-3" method="post" action="{{route('upload_users')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-auto border-0">

                        <input type="file" name="upload_users" class="p-2 btn btn-primary select_file "
                               id="exampleFormControlFile1">

                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary upload_button">Upload</button>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <div>
                <h5><i class="fa-solid fa-download"></i> upload your sheet excel Users </h5>
            </div>
            <div>
                <form class="row g-3" method="post" action="{{route('upload_users')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-auto border-0">

                        <input type="file" name="upload_users" class="p-2 btn btn-success select_file "
                               id="exampleFormControlFile1">

                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-success upload_button">Download</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

{{--************************* end side links ************************* --}}

{{--************************* start content ************************* --}}

@section('content')



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2"
                                       class="text-center table table-bordered table-hover dataTable dtr-inline"
                                       role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">
                                            ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Engine version: activate to sort column ascending">
                                            Phone
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Engine version: activate to sort column ascending">
                                            Delete
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Engine version: activate to sort column ascending">
                                            Edit
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($user_data as $users)
                                        <tr class="odd">
                                            <td>{{$users->id}}</td>
                                            <td>{{$users->name}}</td>
                                            <td>{{$users->email}}</td>
                                            <td>{{$users->phone}}</td>
                                            <td>
                                                                                <button class="btn btn-danger">
                                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-warning">
                                                                                    <i class="fa-solid fa-recycle"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
{{--                                    <tr class="odd">--}}
{{--                                        <td class="dtr-control sorting_1" tabindex="0">2</td>--}}
{{--                                        <td>Mina</td>--}}
{{--                                        <td>Mina@gmail.com</td>--}}
{{--                                        <td>01227938783</td>--}}
{{--                                        <td>--}}
{{--                                            <button class="btn btn-danger">--}}
{{--                                                <i class="fa-solid fa-trash-can"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <button class="btn btn-warning">--}}
{{--                                                <i class="fa-solid fa-recycle"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}

{{--                                    </tr>--}}

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

{{--************************* end content ************************* --}}

