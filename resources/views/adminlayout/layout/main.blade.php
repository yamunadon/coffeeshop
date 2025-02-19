{{--@extends('layouts.app')--}}

{{--@section('content')--}}

{{--@endsection--}}

    <!DOCTYPE html>
<html lang="en">



@include('adminlayout.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">




    <!-- Navbar -->
    @include('adminlayout.nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('adminlayout.aside')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('adminlayout.foot')

</body>
</html>

