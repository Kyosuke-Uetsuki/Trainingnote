<header class="mb-0">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" id="nav">
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav navbar-right">
                    <li>{!! link_to_route("signup.get", "Signup", [], ["class" => "nav-link text-dark btn btn-sm btn-outline-dark rounded-0 mr-2"])!!}</li>
                    <li>{!! link_to_route("login", "Login", [], ["class" => "nav-link  text-dark btn btn-sm btn-outline-dark rounded-0"])!!}</li>
            </ul>
        </div>
    </nav>
</header>