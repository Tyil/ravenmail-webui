<nav>
    <ul>
        @if(Auth::check())
            <li><a href="{{ route('domains.index') }}">domains</a></li>
            <li><a href="{{ route('logout') }}">logout</a></li>
        @else
            <li><a href="{{ route('login') }}">login</a></li>
        @endif
    </ul>
</nav>
