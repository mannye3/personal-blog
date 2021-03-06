<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{


    public function __construct()
    {
        $this->middleware('checkRole:author');
        $this->middleware('auth');
    }



    public function dashboard()
    {
        $posts = Post::where('user_id', Auth::id())->pluck('id')->toArray();
        $allComments = Comment::whereIn('post_id', $posts)->get();
        $todayComments = $allComments->where('created_at', '>=', Carbon::today())->count();

        return view('author.dashboard', compact('allComments', 'todayComments'));
    }


    public function posts()
    {
        return view('author.posts');
    }



    public function comments()
    {
        $posts = Post::where('user_id', Auth::id())->pluck('id')->toArray();
        $comments = Comment::whereIn('post_id', $posts)->get();
        return view('author.comments', compact('comments'));
    }


    public function newPost()
    {
        return view('author.newPost');
    }


    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->user_id = Auth::id();

        $post->save();

        return back()->with('success', 'Post is successfuly Created.');
    }



    public function postEdit($id)
    {
        $post =  Post::where('id', $id)->where('user_id', Auth::id())->first();
         return view('author.editPost', compact('post'));
    }


    public function postEditPost(Request $request, $id)
    {
        $post = Post::where('id', $id)->where('user_id', Auth::id())->first();

        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->save();

        return back()->with('success', 'Post is successfuly Updated.');

    }


    public function deletePost($id)
    {
        $post = Post::where('id', $id)->where('user_id', Auth::id())->first();
        $post->delete();

        return back();
    }
}
