
@extends('layouts.admin-layout.admin-layout')

@section('content')
    <div class="main-panel">
        @include('layouts.admin-layout.nav-bar')
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                          <h5 class="title">About Me</h5>
                        </div>
                        <div>
                            <a class="btn btn-sm" href="{{ route('about.edit',$about->id) }}">
                                <i class="tim-icons icon-pencil"></i>
                            </a>
                        </div>
                      </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control text-success"  value="{{ $about->firstname }}" disabled>
                            </div>
                          </div>
                          <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control text-success" value="{{ $about->lastname }}" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-md-1">
                              <div class="form-group">
                                <label>Birthday</label>
                                <input type="text" class="form-control text-success" value="{{ $about->birthday }}" disabled>
                              </div>
                            </div>
                            <div class="col-md-4 px-md-1">
                              <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control text-success"  value="{{ $about->age }}" disabled>
                              </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                              <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control text-success" value="{{ $about->status }}" disabled>
                              </div>
                            </div>
                          </div>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Degree</label>
                                <input type="text" class="form-control text-success" placeholder="Home Address" value="{{ $about->degree }}" disabled>
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" class="form-control text-success" placeholder="Home Address" value="{{ $about->address }}" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                              <label>Country</label>
                              <input type="text" class="form-control text-success" value="Philippines" disabled>
                            </div>
                          </div>
                          <div class="col-md-4 px-md-1">
                            <div class="form-group">
                              <label>Zipcode</label>
                              <input type="number" class="form-control text-success"  value="6603" disabled>
                            </div>
                          </div>
                          <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                              <label>Freelance</label>
                              <input type="text" class="form-control text-success" value="{{ $about->freelance }}" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                              <div class="form-group">
                                <label>Phone</label>
                                <input type="number" class="form-control text-success" value="{{ $about->phone }}" disabled>
                              </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                              <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control text-success" value="{{ $about->email }}" disabled>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-user">
                    <div class="card-body">
                      <p class="card-text">
                        </p><div class="author">
                          <div class="block block-one"></div>
                          <div class="block block-two"></div>
                          <div class="block block-three"></div>
                          <div class="block block-four"></div>
                          <a href="javascript:void(0)">
                            <img class="avatar" src="{{ asset('storage/uploads/profile/' . $about->img) }}" alt="...">
                            <h5 class="title">{{ $about->firstname }} {{ $about->lastname }}</h5>
                          </a>
                          <p class="description">
                            Junior - Developer
                          </p>
                        </div>
                      <p></p>
                      <div class="card-description">
                        {{ $about->description }}
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="button-container">
                        <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                          <i class="fab fa-facebook"></i>
                        </button>
                        <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                          <i class="fab fa-twitter"></i>
                        </button>
                        <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                          <i class="fab fa-google-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <a  href="{{ route('download.resume', $about->id) }}" class="btn btn-block btn-success">Download Resume</a>
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
    @include('admin.about.scripts.about-script')
@endsection
