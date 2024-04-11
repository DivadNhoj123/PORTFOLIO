@extends('layouts.admin-layout.admin-layout')

@section('content')
    <div class="main-panel">
        @include('layouts.admin-layout.nav-bar')
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <h4 class="card-title"> List of Skills</h4>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add-modal">
                                        <i class="tim-icons icon-simple-add"></i>
                                        Skills
                                    </a>
                                    @include('admin.talent.modals.add-modal')
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="order-listing" class="table dataTable no-footer" role="grid"
                                aria-describedby="order-listing_info">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Logo</th>
                                        <th>Skills</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($talents as $talent)
                                        <tr>
                                            <td>
                                                <a class="btn btn-sm btn-info" data-toggle="modal"
                                                    data-target="#edit-modal{{ $talent->id }}">
                                                    <i class="tim-icons icon-pencil pb-1"></i>
                                                </a>
                                                @include('admin.talent.modals.edit-modal')
                                                <a class="btn btn-sm btn-danger delete" data-id="{{ $talent->id }}">
                                                    <i class="tim-icons icon-trash-simple pb-1"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/uploads/language/' . $talent->img) }}"
                                                    class=" avatar mt-3" alt="image">
                                            </td>
                                            <td>
                                                {{ $talent->talent }}
                                            </td>
                                            <td>
                                                @if ($talent->type == 0)
                                                    Backend
                                                @elseif($talent->type == 1)
                                                    Frontend
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
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
    @include('admin.talent.scripts.talent-scripts')
@endsection
