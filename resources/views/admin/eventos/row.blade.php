<tr>
    <th scope="row">{{ $evento->id }}</th>
    <td><a href="#"><b>{{ substr($evento->nombre,0, 80) }}</b></a></td>
    <td><small>{{ $evento->created_at->format('l, d M Y') }}</small></td>
    <td><small>{{ $evento->fecha_evento->format('l, d M Y') }}</small></td>
    <td><b><small><a href="{{ route('admin.admin_eventos_usuario_index', $evento->user->username ) }}">{{ $evento->user->nombre }}</a></small></b></td>
    <td>
        @switch($evento->estado)
            @case('borrador')
            <span class="badge badge-info">Borrador</span>
            @break
            @case('pendiente')
            <span class="badge badge-success">Pendiente</span>
            @break
            @case('enproceso')
            <span class="badge badge-success">En Proceso</span>
            @break
            @case('concluido')
            <span class="badge badge-warning">Concluido</span>
            @break
            @case('anulado')
            <span class="badge badge-danger">Anulado</span>
            @break
            @break
        @endswitch
    </td>
    <td>23</td>
    <td>
        <a href="/editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <a href="/eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
        <a href="/suspender"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
        <a href="/cancelar"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
    </td>
</tr>