
@section('content')
 @foreach($servicios as $servicio)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img src="{{ asset('storage').'/'. $servicio->foto}}" alt="" width='200'>
            </td>
            <td>{{$servicio->nombre}}</td>
            <td>{{$servicio->precio}}</td>
            <td>{{$servicio->horario}}</td>
            <td>{{$servicio->instructor}}</td>
            <td>
            <a href="{{ url('/Servicio/'.$servicio->id.'/edit') }}">
            Editar 
            </a>

            | 



            <form method="post" action="{{ url('/Servicio/'.$servicio->id) }}">
                {{csrf_field()}}
                {{method_field('DELETE') }}
                <button type="submit" onclick="return confirm('¿borrar?');">Borrar</button>

            </form>
            </td>
        </tr>
        @endforeach