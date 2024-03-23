@extends('layouts.admin-layout.admin-layout')

@section('content')
    <div class="main-panel">
        @include('layouts.admin-layout.nav-bar')
        <div class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="card ">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <h4 class="card-title"> Job and Experience</h4>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add-modal">
                                        <i class="tim-icons icon-simple-add"></i>
                                        Job
                                    </a>
                                    @include('admin.job.modals.add-modal')
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ps ps--active-x">
                                <table class="table tablesorter " id="">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>Action</th>
                                            <th>Logo</th>
                                            <th>Company</th>
                                            <th>Job</th>
                                            <th class="text-center">Year</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $job)
                                            <tr>
                                                <td>
                                                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit-modal{{ $job->id }}">
                                                        <i class="tim-icons icon-pencil pb-1"></i>
                                                    </a>
                                                    @include('admin.job.modals.edit-modal')
                                	                <a class="btn btn-sm btn-danger delete" data-id="{{ $job->id }}">
                                                        <i class="tim-icons icon-trash-simple pb-1"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('storage/uploads/company/' . $job->company_img) }}" class=" avatar mt-3" alt="image">
                                                </td>
                                                <td>
                                                    {{ $job->company}}
                                                </td>
                                                <td>{{ $job->job }}</td>
                                                <td class="text-center">
                                                    {{ $job->year }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
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
    @include('admin.job.scripts.job-scrpits')
@endsection
