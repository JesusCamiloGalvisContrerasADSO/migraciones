<div>
    <table>
        <thead>
            <th>id</th>
            <th>nombre</th>
            <th>correo</th>
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>
                    {{$user ->id}}
                </td>
                <td>
                    {{$user ->name}}
                </td>
                <td>
                    {{$user ->email}}
                </td>
                <td>
                    <a href="{{route('users.edit', $user->id)}}" >Modificar</a>
                    {{html()->modelForm($user)->route("users.destroy", $user->id)-> open()}}
                    <button>Eliminar</button>
                    {{html()->closeModelForm()}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>