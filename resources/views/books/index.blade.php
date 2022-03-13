<!DOCTYPE html>
<html lang="en">

<head>

    {{--************************* start links ************************* --}}

    @include('layout.links')

    {{--************************* end links *************************  --}}

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('docs/assets/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
             width="60">
    </div>

    {{--************************* start side_head ************************* --}}

    @include('layout.side_head')

    {{--************************* end side_head *************************  --}}





    {{--************************* start side_nav ************************* --}}

    @include('layout.side_nav')

    {{--************************* end side_nav *************************  --}}



    <div class="content-wrapper" style="min-height: 511px;">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
        {{--********************** start title page **********************--}}

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>

        {{--********************** end title page **********************--}}

                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <h3>hello world</h3>
                </div>

            </div>
        </section>

    </div>


    {{--************************* start footer ************************* --}}

    @include('layout.footer')

    {{--************************* end footer *************************  --}}









{{--************************* start javascript ************************* --}}

@include('layout.javascript')

{{--************************* end javascript *************************  --}}

</body>
</html>
