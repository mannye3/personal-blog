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
                                            @foreach ($posts as $post)


                                            <tr>
                                            <td>{{ $post->id }}</td>
                                            <td><a href="{{ route('singlePost', $post->id)}}"> {{ $post->title}}</a></td>

                                                <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()  }}</td>
                                                <td>{{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans()  }}</td>
                                                <td>{{ $post->comments->count() }}</td>
                                                <td>
                                                <a href="{{ route('AdminPostEdit', $post->id) }}" class="btn-warning">Edit</a>
                                                <form id="AdminDeletePost-{{ $post->id }}" action="{{ route('AdminDeletePost', $post->id) }}">@csrf</form>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePostModal-{{ $post->id }}">
                                                    Delete
                                                  </button>

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

            @foreach ($posts as $post)


        <div class="modal fade" tabindex="-1" role="dialog" id="deletePostModal-{{ $post->id }}">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    
                    <h4 class="modal-title">You are about to delete {{ $post->title }}</h4>
                    </div>
                    <div class="modal-body">
                        Are You Sure
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <form id="AdminDeletePost-{{ $post->id }}" action="{{ route('AdminDeletePost', $post->id) }}">@csrf
                      <button type="submit" class="btn btn-primary">Yes, Delete</button>
                    </form>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->

              @endforeach

              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
