<li class="nav-item {{ Request::is('genres*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('genres.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Genres</span>
    </a>
</li>
<li class="nav-item {{ Request::is('movies*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('movies.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Movies</span>
    </a>
</li>
