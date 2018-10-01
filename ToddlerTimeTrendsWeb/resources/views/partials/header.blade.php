<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="/home" class="navbar-brand">Trends</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="/home" class="nav-link {{ $navbar->state('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="/features" class="nav-link {{ $navbar->state('features') }}">Features</a>
            </li>
            <li class="nav-item">
                <a href="/pricing" class="nav-link {{ $navbar->state('pricing') }}">Pricing</a>
            </li>
            <li class="nav-item">
                <a href="/about" class="nav-link {{ $navbar->state('about') }}">About Us</a>
            </li>
        </ul>
        <a href="/signup" class="nav-item nav-link {{ $navbar->state('signup') }}">Sign Up</a>
        <form action="/login" method="post" class="form-inline {{ $navbar->state('login') }}">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username">
            <button class="btn btn-primary" type="submit">Log In</button>
            {{ csrf_field() }}
        </form>
    </div>
</nav>