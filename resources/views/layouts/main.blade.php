<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>

<link rel="icon" href="" type="image/x-icon">

@stack('header')

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<link href="{{asset('assets/plugins/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet" />

<link href="{{asset('assets/plugins/animate-css/animate.css')}}" rel="stylesheet" />

<link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />

<link href="{{asset('assets/plugins/iCheck/skins/flat/_all.css')}}" rel="stylesheet" />

<link href="{{asset('assets/plugins/switchery/dist/switchery.css')}}" rel="stylesheet" />

<link href="{{asset('assets/plugins/metisMenu/dist/metisMenu.css')}}" rel="stylesheet" />

<link href="{{asset('assets/plugins/pace/themes/white/pace-theme-flash.css')}}" rel="stylesheet" />

<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

<link href="{{asset('assets/css/themes/allthemes.css')}}" rel="stylesheet" />

<link href="{{asset('assets/css/demo/setting-box.css')}}" rel="stylesheet" />
</head>
<body>
<div class="all-content-wrapper">

<header>
<nav class="navbar navbar-default">

<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
<i class="material-icons">swap_vert</i>
</button>
<a href="javascript:void(0);" class="left-toggle-left-sidebar js-left-toggle-left-sidebar">
<i class="material-icons">menu</i>
</a>

<a class="navbar-brand" href="../../index.html">
<span class="logo-minimized">K8L</span>
<span class="logo">KuhaKu 8 - Latihan</span>
</a>

</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav">
<li>
<a href="javascript:void(0);" class="toggle-left-sidebar js-toggle-left-sidebar">
<i class="material-icons">menu</i>
</a>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">

</nav>
</header>

@include('layouts.component.menu')

<section class="content">
<div class="page-heading">
@yield('header')
</div>
<div class="page-body">
    @yield('content')
</div>
</section>
</div>

<script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>

<script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/plugins/pace/pace.js')}}"></script>

<script src="{{asset('assets/plugins/screenfull/src/screenfull.js')}}"></script>

<script src="{{asset('assets/plugins/metisMenu/dist/metisMenu.js')}}"></script>

<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<script src="{{asset('assets/plugins/switchery/dist/switchery.js')}}"></script>

<script src="{{asset('assets/js/admin.js')}}"></script>

<script src="{{asset('assets/js/google-analytics.js')}}"></script>

@stack('footer')
</body>
</html>
