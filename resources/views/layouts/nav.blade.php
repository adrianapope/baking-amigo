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

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/recipes">Recipes</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if (Auth::user())
          <li role="presentation">
            <a href="/auth/logout">
              <span class="btn btn-default-one" role="button">Logout</span>
            </a>
          </li>
        @else
          <li role="presentation">
            <a href="/auth/register">
              <span class="btn btn-default-two" role="button">Sign Up!</span>
            </a>
          </li>
          <li role="presentation">
            <a href="/auth/login">
              <span class="btn btn-default-three" role="button">Login</span>
            </a>
          </li>
        @endif
      </ul>
    </div>
</nav>