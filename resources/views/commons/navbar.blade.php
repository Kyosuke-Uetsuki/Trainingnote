<header class="mb-5">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="nav">
        
        <a class="navbar-brand" href="/">Training Note</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav navbar-right">
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name}}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route('trainings.index', 'ノート') !!}</li>
                            <li class="dropdown-item">{!! link_to_route('chest.graph', 'グラフ') !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route("logout.get", "ログアウト")!!}</li>
                        </ul>
                    </li>
                @else
                    <li>{!! link_to_route("signup.get", "Signup", [], ["class" => "nav-link"])!!}</li>
                    <li>{!! link_to_route("login", "Login", [], ["class" => "nav-link"])!!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>