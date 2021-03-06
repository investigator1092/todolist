<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Todo list</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('todo/create') ? 'active' : '' }}" href="todo/create">Create</a>
            </li>
        </ul>
    </div>
</nav>
