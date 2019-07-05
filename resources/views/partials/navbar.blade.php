<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if( auth()->check() )
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="/profile/show">Hi {{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Home</a>
                </li>
                <li>
                    <img src="/storage/app/{{auth()->user()->photo}}" width="100" height="100">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
