<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function store(Request $request, $post_id)
    {
        $this->validate($request, [
            'content' => 'required'
        ]);

        $comment = new Comment();
        $comment->content = $request->get('content');
        $comment->post_id = $post_id;
        $comment->user_id = auth()->user()->id;

        $comment->save();
        return redirect()->to('/posts');
    }
    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return back();
    }
    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('post.comment.edit', compact('comment', $comment));
    }
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'content'=>'required'
        ]);

        $comment = Comment::findOrFail($id);
        $comment->content = $request->get('content');
        $comment->save();

        return redirect()->to('/posts');
    }
    /*public function getComments($id)
    {
        $comments = Comment::where('post_id',$id);

        return view('post.create',compact('comments', $comments));

    }*/
}
