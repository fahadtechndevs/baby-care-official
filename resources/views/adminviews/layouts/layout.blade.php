<!DOCTYPE html>
<html>
    <head>
        @include("adminviews.includes.header")
        <title>
            @yield('title')
        </title>
        @include("adminviews.includes.headcss")
        @yield("pagecss")
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include("adminviews.includes.headercontent")
        @include("adminviews.includes.navbar")
        @yield('content')
        @include('adminviews.includes.footer')
        @include('adminviews.includes.footerjs')
        @yield("pagejs")
    </div>
    </body>
</html>


