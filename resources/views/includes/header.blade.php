<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
    <body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="height: auto;">
    <!-- Loader -->
    <div id="global-loader" >
        <img src="{{ asset('assets/dist/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->