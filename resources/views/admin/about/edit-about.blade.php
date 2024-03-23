@extends('layouts.admin-layout.admin-layout')

@section('content')
    <div class="main-panel">
        @include('layouts.admin-layout.nav-bar')
        <div class="content">
            <form action="{{ route('about.update', $about->id) }}" enctype="multipart/form-data" method="POST" id="add-form">
                @csrf
                @method('put')
                <input type="hidden" name="old" value="{{ $about->img }}">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control text-success" name="firstname"
                                                value="{{ $about->firstname }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control text-success" name="lastname"
                                                value="{{ $about->lastname }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-md-1">
                                        <div class="form-group">
                                            <label>Birthday</label>
                                            <input type="text" class="form-control text-success" name="birthday"
                                                value="{{ $about->birthday }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-md-1">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" class="form-control text-success" name="age"
                                                value="{{ $about->age }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-md-1">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" class="form-control text-success" name="status"
                                                value="{{ $about->status }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="form-control text-success" name="degree"
                                                value="{{ $about->degree }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control text-success" name="address"
                                                value="{{ $about->address }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-md-1">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control text-success" name="country"
                                                value="{{ $about->country }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-md-1">
                                        <div class="form-group">
                                            <label>Zipcode</label>
                                            <input type="number" class="form-control text-success" name="zipcode"
                                                value="{{ $about->zipcode }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-md-1">
                                        <div class="form-group">
                                            <label>Freelance</label>
                                            <input type="text" class="form-control text-success" name="freelance"
                                                value="{{ $about->freelance }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" class="form-control text-success" name="phone"
                                                value="{{ $about->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control text-success" name="email"
                                                value="{{ $about->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Discription</label>
                                    <textarea rows="4" cols="80" class="form-control" name="description">{{ $about->description }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-fill btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body pb-0 mb-0">
                                <input type="file" id="input-file-now-custom-2" class="dropify" data-height="300" name="img" data-default-file="{{ asset('storage/uploads/profile/' . $about->img) }}">
                                <div class="form-group mt-3 mb-0 pb-0">
                                    <input type="file" name="resume" class="file-upload-default" >
                                    <input type="hidden" name="oldPDF" value="{{ $about->resume }}">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info text-success"  value="{{ $about->resume }}" disabled=""
                                            placeholder="Upload Resume">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-sm btn-default "
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
    @include('admin.about.scripts.about-script')
@endsection
