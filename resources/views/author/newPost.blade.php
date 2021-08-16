@extends('layouts.admin')

@section('title') User Comments @endsection

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

                                    <h4 class="header-title mt-0 mb-1">Add New Post</h4>


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

                                                <form method="POST" action="{{ route('createPost') }}">
                                                    @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Blog Title</label>
                                                            <input type="text" name="title" class="form-control"  placeholder="Enter title">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Blog Content</label>
                                                            <textarea name="content"  class="form-control" placeholder="Sample Text"></textarea>

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
