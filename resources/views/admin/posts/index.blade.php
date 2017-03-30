<h1>Wesh {{ Auth::user()->name }}</h1>
<h2>Voici tes roles : </h2>

<ul>
    @foreach (Auth::user()->roles as $role)
        <li>{{ $role->name }} : {{ $role->display_name }}
            <ul>Les permissions associés à ce rôle :
                @foreach($role->perms as $permission)
                    <li>{{ $permission->name }} : {{ $permission->display_name }}</li>
                @endforeach
            </ul>
        </li>

    @endforeach

</ul>