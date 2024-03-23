<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.admin-layout.header')
    <body class="">
        <div class="wrapper">
            @include('layouts.admin-layout.side-bar')
            @yield('content')
        </div>
        @include('layouts.admin-layout.scripts')
    </body>
</html>
