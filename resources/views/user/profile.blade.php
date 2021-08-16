@extends('layouts.admin')

@section('content')


        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row page-title">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb" class="float-right mt-1">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                            <h4 class="mb-1 mt-0">Profile</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mt-3">
                                        <img src="assets/images/users/avatar-7.jpg" alt=""
                                            class="avatar-lg rounded-circle" />
                                        <h5 class="mt-2 mb-0">Shreyu N</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-0">User Experience Specialist
                                        </h6>
                                        <h6 class="text-muted font-weight-normal mt-1 mb-4">San Francisco, CA</h6>

                                        <div class="progress mb-4" style="height: 14px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <span class="font-size-12 font-weight-bold">Your Profile is <span
                                                        class="font-size-11">60%</span> completed</span>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary btn-sm mr-1">Follow</button>
                                        <button type="button" class="btn btn-white btn-sm">Message</button>
                                    </div>

                                    <!-- profile  -->
                                    <div class="mt-5 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">About</h4>
                                        <p class="text-muted mb-4">Hi I'm Shreyu. I am user experience and user
                                            interface designer.
                                            I have been working on UI & UX since last 10 years.</p>
                                    </div>
                                    <div class="mt-3 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Contact Information</h4>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0 text-muted">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td>xyz123@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Phone</th>
                                                        <td>(123) 123 1234</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Address</th>
                                                        <td>1975 Boring Lane, San Francisco, California, United States -
                                                            94108</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="mt-3 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Skills</h4>
                                        <label class="badge badge-soft-primary">UI design</label>
                                        <label class="badge badge-soft-primary">UX</label>
                                        <label class="badge badge-soft-primary">Sketch</label>
                                        <label class="badge badge-soft-primary">Photoshop</label>
                                        <label class="badge badge-soft-primary">Frontend</label>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->

                        </div>

                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">


                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-activity" role="tabpanel"
                                            aria-labelledby="pills-activity-tab">

                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">

                                                    @if(session('error'))

                                                    <div class="alert alert-danger">
                                                        {{ session('error')}}
                                                    </div>

                                                    @endif


                                                    @if(session('success'))

                                                    <div class="alert alert-success">
                                                        {{ session('success')}}
                                                    </div>

                                                    @endif


                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                        <li>{{ $error}}</li>
                                                            @endforeach
                                                        </ul>

                                                    </div>

                                                    @endif
                                                    <form method="POST" action="{{ route('userProfilePost') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Name</label>
                                                            <input type="text" required name="name" value="{{ Auth::user()->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type="email" required name="email" value="{{ Auth::user()->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                                                            </div>


                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Current Password</label>
                                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">New Password</label>
                                                                <input type="password" name="new_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">New Password Confirmation</label>
                                                                <input type="password" name="new_password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>

                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div>
                                            <!-- end col -->

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->

            </div> <!-- content -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            2019 &copy; Shreyu. All Rights Reserved. Crafted with <i class='uil uil-heart text-danger font-size-12'></i> by <a href="https://coderthemes.com/" target="_blank">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>


        @endsection


    </div>
