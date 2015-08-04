	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Baking Amigo</a>
    </div>

      <ul class="nav navbar-nav navbar-right">
        @if (Auth::user())
          <li><a href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a></li>
          <li role="presentation">
            <a href="/auth/logout">
              <span class="btn btn-info" role="button">Logout</span>
            </a>
          </li>
          <li role="presentation">
            <a href="/recipes/create">
              <span class="btn btn-" role="button">Submit Recipe</span>
            </a>
          </li>
        @else
          <li role="presentation">
            <a href="/auth/register">
              <span class="btn btn-info" role="button">Sign Up!</span>
            </a>
          </li>
          <li role="presentation">
            <a href="/auth/login">
              <span class="btn btn-success" role="button">Login</span>
            </a>
          </li>
          <li role="presentation">
            <a href="/recipes/create">
              <span class="btn btn-default" role="button">Submit Recipe</span>
            </a>
          </li>
        @endif
      </ul>
    </div>
</nav>

