@extends('layouts.master')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{ asset('assets/img/post-bg.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>   {{ $post->title}}</h1>

            <span class="meta">Posted by
              <a href="#">   {{ $post->user->name}}</a>
              on {{date_format($post->created_at, 'F d,Y')  }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>{!! nl2br($post->content) !!}</p>



        </div>
      </div>
      <div class="comments">

       

        <hr>
        <h3>Comments</h3>
        <hr>
        @foreach ($post->comments as $comment)
      <p>{{ $comment->content}}</p>
        <p><small>By: {{ $comment->user->name}} on {{date_format($comment->created_at, 'F d,Y')  }}</small></p>
        <hr>
        @endforeach


        @if(Auth::check())

      <form action="{{ route('newComment') }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="comment" rows="10" class="form-control"> </textarea>

            <input type="" name="post" value="{{ $post->id }}">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>

        </form>


        @endif

      </div>
    </div>
  </article>



  @endsection
