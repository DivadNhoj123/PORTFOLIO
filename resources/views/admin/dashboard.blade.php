@extends('layouts.admin-layout.admin-layout')

@section('content')
    <div class="main-panel">
        @include('layouts.admin-layout.nav-bar')
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <div class="col-sm-6 text-left">
                                <h4 class="card-title" id="greeting"></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{ asset('assets') }}/img/dashboard.png" class="mw-80 w-80 rounded"
                                        alt="image">
                                </div>
                                <div class="col-sm-7 pt-5">
                                    <div class="card">
                                        <div class="card-body pt-5">
                                            <div class="alert alert-info">
                                                <h3 style="font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace; text-align: justify;"> Welcome Back Boss David!</h3>
                                                <p class="display-4" style="font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace; text-align: justify;">
                                                    Experience is the name everyone gives to their mistakes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            David Portfolio
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
@endsection
