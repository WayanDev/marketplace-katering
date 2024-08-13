
<!DOCTYPE html>
<html lang="en">

<head>
@include('partials.header')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include ('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('partials.navbar')
                <!-- End of Topbar -->

            </div>
            <!-- End of Main Content -->

@yield('content')

@include('partials.footer')
