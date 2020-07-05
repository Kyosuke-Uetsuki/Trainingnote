<header class="mb-0">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" id="nav">
        
        <a class="navbar-brand btn btn-sm  rounded-0 text-light" href="/">Training Note</a>
        
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
                            <li class="dropdown-item">{!! link_to_route('users.show', 'Mypage',["user" => Auth::id()]) !!}</li>
                            <li class="dropdown-item">{!! link_to_route('trainings.index', '投稿') !!}</li>
                            <li class="dropdown-item">{!! link_to_route('chest.graph', 'グラフ') !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route("logout.get", "Logout")!!}</li>
                        </ul>
                    </li>
                @else
                    <li>{!! link_to_route("signup.get", "新規登録", [], ["class" => "nav-link btn btn-sm btn-outline-dark rounded-0 mr-2 text-dark"])!!}</li>
                    <li>{!! link_to_route("login", "ログイン", [], ["class" => "nav-link btn btn-sm btn-outline-dark rounded-0 text-dark"])!!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>