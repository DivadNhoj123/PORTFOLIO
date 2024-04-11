@extends('layouts.admin-layout.admin-layout')

@section('content')
    <div class="main-panel">
        @include('layouts.admin-layout.nav-bar')
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <h4 class="card-title"> Social Links</h4>
                        </div>
                        <div>
                            <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add-modal">
                                <i class="tim-icons icon-simple-add"></i>
                                Link
                            </a>
                            @include('admin.social.modals.add-modal')
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="order-listing" class="table dataTable no-footer" role="grid"
                                aria-describedby="order-listing_info">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Social Media</th>
                                        <th>Links</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($social as $social)
                                        <tr>
                                            <td>
                                                <a class="btn btn-sm btn-info" data-toggle="modal"
                                                    data-target="#edit-modal{{ $social->id }}">
                                                    <i class="tim-icons icon-pencil pb-1"></i>
                                                </a>
                                                @include('admin.social.modals.edit-modal')
                                                <a class="btn btn-sm btn-danger delete" data-id="{{ $social->id }}">
                                                    <i class="tim-icons icon-trash-simple pb-1"></i>
                                                </a>
                                            </td>
                                            <td>
                                                {{ $social->type }}

                                            <td>
                                                {{ $social->link }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    @include('admin.social.scripts.social-scrpits')
@endsection
