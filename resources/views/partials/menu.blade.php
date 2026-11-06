<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('users.index') }}">CRUD de Usuários</a>
        <div class="navbar-nav">
            <a class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}"
               href="{{ route('users.index') }}">Usuários</a>
            <a class="nav-link {{ request()->routeIs('users.create') ? 'active' : '' }}"
               href="{{ route('users.create') }}">Novo cadastro</a>
        </div>
    </div>
</nav>
