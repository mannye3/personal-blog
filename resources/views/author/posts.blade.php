@extends('layouts.admin')

@section('title') Author Post @endsection

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

                                    <h4 class="header-title mt-0 mb-1">Author Post</h4>



                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Comments</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach (Auth::user()->posts as $post)


                                            <tr>
                                            <td>{{ $post->id }}</td>
                                            <td><a href="{{ route('singlePost', $post->id)}}"> {{ $post->title}}</a></td>

                                                <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()  }}</td>
                                                <td>{{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans()  }}</td>
                                                <td>{{ $post->comments->count() }}</td>
                                                <td>
                                                <a href="{{ route('postEdit', $post->id) }}" class="btn-warning">Edit</a>
                                                <form id="deletePost-{{ $post->id }}" action="{{ route('deletePost', $post->id) }}">@csrf</form>
                                                <a href="#" onclick="document.getElementById('deletePost-{{ $post->id }}').submit()" class="btn-danger">Remove</button>
                                                </td>


                                            </tr>
                                            @endforeach



                                        </tbody>
                                    </table>

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
