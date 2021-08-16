@extends('layouts.admin')

@section('title') Editing {{ $user->name}}  @endsection

@section('content')
 <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title mt-0 mb-1">Edit User</h4>


                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-body">

                                                    @if (Session::has('success'))
                                                    <div class="alert alert-success">
                                                        {{ Session::get('success')}}
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

                                                <form  method="POST" action=" {{ route('adminEditUserPost', $user->id)}}">
                                                    @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">User Name</label>
                                                            <input type="text" name="name" class="form-control"  value="{{ $user->name}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">User Email</label>
                                                            <input type="email" name="email" class="form-control"  value="{{ $user->email}}">

                                                        </div>


                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Permission</label>
                                                            <input type="checkbox" name="author" class="form-control" value=1 {{ $user->author == true ? 'checked' : '' }} > Author
                                                            <br>
                                                            <input type="checkbox" name="admin" class="form-control" value=1 {{ $user->admin == true ? 'checked' : '' }} > Admin

                                                        </div>


                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>

                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div>
                                    </div>


                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->
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

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
@endsection
