    {{--************************* start links ************************* --}}

    @include('layout.links')

    {{--************************* end links *************************  --}}

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

    @yield('list.nav')

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
                        @yield('title')
                    </div>
                    {{--********************** start title page **********************--}}

               @yield('side_links')

                    {{--********************** end title page **********************--}}

                </div>
            </div>
        </div>

        @yield('content')


    </div>


{{--************************* start footer ************************* --}}

@include('layout.footer')

{{--************************* end footer *************************  --}}




{{--************************* start javascript ************************* --}}

@include('layout.javascript')

{{--************************* end javascript *************************  --}}

</body>

