<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class postController extends Controller
{
    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[

            'content' => 'required|string',
        ]);
        $post = new Post();
        $post->content = $request->get('content');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->to('/posts');
    }
    public function getPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();//where('user_id',auth()->user()->id)->get();
        $comments = Comment::all();

        return view('post.create', compact('posts',$posts), compact('comments',$comments));
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post', $post));
    }
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'content'=>'required'
        ]);

        $post = Post::findOrFail($id);
        $post->content = $request->get('content');
        $post->save();

        return redirect()->to('/posts');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back();
    }
}
