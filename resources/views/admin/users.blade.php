@extends('layouts.admin')

@section('title') Admin Users @endsection

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

                                    <h4 class="header-title mt-0 mb-1">Users</h4>



                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Posts</th>
                                                <th>Comments</th>
                                                <th>Created at</th>
                                                <th>Update at</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($users as $user)


                                            <tr>
                                            <td>{{ $user->id }}</td>
                                            <td> {{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->posts->count() }}</td>
                                            <td>{{ $user->comments->count() }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()  }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans()  }}</td>
                                            <td>
                                            <a href="{{ route('adminEditUser', $user->id)}}"><span class="fas fas-edit">Edit</span></a>
                                            <form method="POST" id="adminDeleteUser-{{ $user->id}}"  action="{{ route('adminDeleteUser', $user->id)}}">@csrf
                                                <td><button type="button" class="btn btn-danger" onclick="document.getElementById('adminDeleteUser-{{$user->id}}').submit()" >Delete</button></td>
                                                </form>
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
