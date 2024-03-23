@extends('layouts.admin-layout.admin-layout')

@section('content')
    <div class="main-panel">
        @include('layouts.admin-layout.nav-bar')
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <h4 class="card-title">Skills</h4>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-success"  data-toggle="modal" data-target="#myModal">
                                        <i class="tim-icons icon-simple-add"></i>
                                        Skill
                                    </a>
                                    @include('admin.skill.modals.add-modals')
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ps">
                                <table class="table tablesorter " id="">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <th>
                                                Skill
                                            </th>
                                            <th class="text-center">
                                                Range
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($skill as $skill)
                                            <tr>
                                                <td>
                                                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit{{ $skill->id }}">
                                                        <i class="tim-icons icon-pencil pb-1"></i>
                                                    </a>
                                                    @include('admin.skill.modals.edit-modals')
                                                    <a class="btn btn-sm btn-danger delete" data-id="{{ $skill->id }}">
                                                        <i class="tim-icons icon-trash-simple pb-1"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                   {{ $skill->skill}}
                                                </td>
                                                <td class="text-center">
                                                    {{ $skill->range }}%
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
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
    @include('admin.skill.scripts.skill-scrpits')
@endsection

