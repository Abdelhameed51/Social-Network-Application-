@extends('layouts.app')
@include("partials.navbar")

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form method="post" action="/post/store">
                            <div class="form-group">
                                @csrf
                                <label class="label">Post Content: </label>
                                <textarea name="content" rows="6" cols="30" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="share" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                </div>

                    @foreach($posts as $post)
                    <div class="card">
                    <table class="table table-striped">
                    <thead>
                    <th><a href="#">{{ \App\User::find($post->user_id)->name}} </a></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->created_at }}</td>
                            @if($post->user_id == auth()->user()->id)
                                <td>
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('post.delete', $post->id) }}" class="btn btn-primary">Delete</a>
                                </td>
                            @endif
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped">
                    <thead>
                    <th>Comments:</th>
                    </thead>
                    @foreach($comments as $comment)
                        @if( $comment->post_id == $post->id)
                            <tbody>
                            <tr>
                                <td><a href="#">{{ \App\User::find($comment->user_id)->name}} </a></td>
                                <td>{{ $comment->content }}</td>
                                <td>{{ $comment->created_at }}</td>
                                @if($comment->user_id == auth()->user()->id)
                                    <td>
                                        <a href="{{ route('comment.show', $comment->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('comment.delete', $comment->id) }}" class="btn btn-primary">Delete</a>
                                    </td>
                                 @endif
                            </tr>
                            </tbody>
                        @endif
                    @endforeach
                </table>
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <div class="card-body">
                            <form method="post" action="/comment/store/{{$post->id }}">
                                <div class="form-group">
                                    @csrf
                                    <label class="label">Comment Now: </label>
                                    <input type="text" name="content" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Comment" class="btn btn-success" />
                                </div>
                            </form>
                        </div>
                    </tr>
                    </tbody>
                </table>
                    <br>
                    </div>
                    @endforeach

            </div>
        </div>
    </div>
@endsection
