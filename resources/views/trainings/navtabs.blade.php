<ul class="nav nav-tabs nav-justified mt-2">
    <li class="nav-item">
        <a href="{{ route('chest.graph') }}" class="nav-link {{ Request::routeIs("chest.graph") ? "active" : ""}}">
            胸
        </a>
    </li>
    
    <li class="nav-item">
        <a href="{{ route('back.graph') }}"  class="nav-link {{ Request::routeIs("back.graph") ? "active" : ""}}">
            背中
        </a>
    </li>
    
    <li class="nav-item">
        <a href="{{ route('shoulder.graph') }}"  class="nav-link {{ Request::routeIs("shoulder.graph") ? "active" : ""}}">
            肩
        </a>
    </li>
    
    <li class="nav-item">
        <a href="{{ route('arm.graph') }}"  class="nav-link {{ Request::routeIs("arm.graph") ? "active" : ""}}">
            腕
        </a>
    </li>
    
    <li class="nav-item">
        <a href="{{ route('leg.graph') }}"  class="nav-link {{ Request::routeIs("leg.graph") ? "active" : ""}}">
            脚
        </a>
    </li>
</ul>
