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
          <li role="presentation"><a href="/auth/register" class="btn btn-primary" role="button">Sign Up!</a>
          <li role="presentation"><a href="/auth/login" class="btn btn-primary" role="button">Login</a>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
       {{--  <li>{!! link_to_action('RecipesController@show', $latest->name, [$latest->id]) !!}</li> --}}
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>