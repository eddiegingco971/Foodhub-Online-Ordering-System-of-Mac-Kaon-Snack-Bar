@extends('admin.app')

@section('content')

@include('admin.navbar')

<div id="layoutSidenav">
    @include('admin.layoutSidenav_nav')
    @include('admin.layoutSidenav_content')
</div>

@endsection

