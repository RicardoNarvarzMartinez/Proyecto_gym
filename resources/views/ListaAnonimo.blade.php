lista de servicios

<br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>nombre</th>
            <th>precio</th>
            <th>horario</th>
            <th>instructor</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
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
         
          </td>
        </tr>
        @endforeach
        <button type="button" class="btn btn-primary"><a href="/">Regresar</button></a>

    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
        </tr>
    </tfoot>
</table>