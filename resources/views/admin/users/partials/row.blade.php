<tr>
    <th scope="row">{{ $user->id }}</th>
    <td><b>{{ $user->nombre }}</b></td>
    <td>{{ $user->username }}</td>
    <td>{{ $user->email }}</td>
    <td>23</td>
    <td>
        <a href="/editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <a href="/eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
        <a href="/suspender"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
        <a href="/cancelar"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
    </td>
</tr>