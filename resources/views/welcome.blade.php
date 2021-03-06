@extends('layouts.master')

@section('content')

  <!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('assets/img/home-bg.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        @foreach ($posts as $post)
        <div class="post-preview">
            <a href="{{ route('singlePost', $post->id)}}">
              <h2 class="post-title">
                {{ $post->title}}
              </h2>

            </a>
            <p class="post-meta">Posted by
            <a href="">{{ ucwords( $post->user->name)}}</a>
              on  {{date_format($post->created_at, 'F d,Y')  }}</p>
              <p>
                  <i class="fa fa-comment" aria-hidden="true"> {{ $post->comments->count()}}</i>
              </p>
          </div>
          <hr>
        @endforeach

        {{ $posts->links()}}

      </div>
    </div>
  </div>

  @endsection
