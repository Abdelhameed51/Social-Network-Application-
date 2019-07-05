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

<h2>Your Profile</h2>
@include("partials.navbar")

<form method="POST" action="/profile/update" enctype="multipart/form-data">
    @method('PUT')
    {{ csrf_field() }}

    <input type="text" name="name"  value="{{ $user->name }}" />
    <br>

    <input type="email" name="email"  value="{{ $user->email }}" />
    <br>
    <input type="password" name="password" placeholder="MUST type a password"/>
    <br>
    <input type="file" name="photo" value="{{ $user->photo }}" >
    <br>
    <input type="submit" name="submit" value="Save changes">
    @include('partials.formerrors')
</form>

</body>
</html>
