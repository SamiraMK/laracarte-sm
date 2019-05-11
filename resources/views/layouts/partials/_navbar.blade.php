<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home_view')}}">{{config('app.name')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="{{ set_active_root('home_view') }}"><a href="{{route('home_view')}}">Home</a></li>
        <li class="{{ set_active_root('about_view') }}"><a href="{{route('about_view')}}">About</a></li>
            <li><a href="#contact">Artisan</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">lavarel.com</a></li>
                <li><a href="#">lavarel.new</a></li>
                <li><a href="#">lavaracasts</a></li>
                <li><a href="#">lavarajobs</a></li>
                <li><a href="#">lavarachat</a></li>
            </ul>
            </li>
        <li class="{{ set_active_root('contact_view')}}"><a href="{{ route('contact_view')}}">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
                <li><a href="#">register</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
    </nav>
      