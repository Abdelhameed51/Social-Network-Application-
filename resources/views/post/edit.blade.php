<html>
<body>

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Done !!! </strong>{{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <h2>Edit Post</h2>
    @include("partials.navbar")

    <form method="POST" action="/post/update/{{$post->id}}" >
        @method('PUT')
        {{ csrf_field() }}

        <textarea name="content" rows="4" cols="50"> {{$post->content}} </textarea>
        <br>
        <input type="submit" name="submit" value="Save changes">
        @include('partials.formerrors')
    </form>

</body>
</html>
