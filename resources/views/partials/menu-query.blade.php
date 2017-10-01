<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent
        <span class="caret"></span>
    </a>
    <ul class="dropdown dropdown-menu">
        <li>
            <a href="{{ route('all') }}">
                Todoo los Usuarios (ALL)
            </a>
        </li>
        <li>
            <a href="{{ route('get','f') }}">
                Listar de Usuario (Femenina) GET
            </a>
        </li>
        <li>
            <a href="{{ route('get','m') }}">
                Listar de Usuario (Masculino) GET
            </a>
        </li>
        <li>
            <a href="{{ route('get-custom') }}">
                Listar de Usuario (GET con Array)
            </a>
        </li>
        <li>
            <a href="{{ route('lists') }}">
                Listar de Usuario para SELECT (LISTS)
            </a>
        </li>
    </ul>
</li>