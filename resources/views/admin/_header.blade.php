<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Oct 2017 17:51:55 GMT -->
<head>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    {{--<link href="{{ asset('assets/admin/fonts/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css') }}" rel="stylesheet" type="text/css">--}}
    <link href="{{ asset('assets/admin/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/main8e16.css?version=3.5.1') }}" rel="stylesheet">
</head>
<body>
<div class="all-wrapper menu-side with-side-panel">
    <div class="layout-w">

    @include('admin._leftBar')

    <!--------------------
           END - Menu side
           -------------------->
        <div class="content-w">
            <!--------------------
               START - Breadcrumbs
               -------------------->
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index-2.html">Products</a></li>
                <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
            </ul>
            <!--------------------
               END - Breadcrumbs
               -------------------->