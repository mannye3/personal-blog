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

                                    <h4 class="header-title mt-0 mb-1">User Comments</h4>



                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Post</th>
                                                <th>Content</th>
                                                <th>Created At</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach (Auth::user()->comments as $comment)


                                            <tr>
                                            <td>{{ $comment->id }}</td>
                                            <td><a href="{{ route('singlePost', $comment->id)}}"> {{ $comment->post->title}}</a></td>
                                                <td>{{ $comment->content }}</td>
                                                <td>{{date_format($comment->created_at, 'F d,Y')  }}</td>
                                            <form method="POST" id="deleteComment-{{ $comment->id}}"  action="{{ route('deleteComment', $comment->id)}}">@csrf
                                            <td><button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment-{{$comment->id}}').submit()" >Delete</button></td>
                                            </form>

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
