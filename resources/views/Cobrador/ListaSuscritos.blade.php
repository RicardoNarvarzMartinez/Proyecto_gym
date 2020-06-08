lista de Suscriptores

<br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>e-mail</th>
            <th>Tipo de usuario</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($User as $user)
    
        <tr>
        
            <td>{{$loop->iteration}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->rol}}</td>
            <td><button type="submit" >Ver</button></td>
            

           
            
        </tr>
        @endforeach
        <button type="button" class="btn btn-primary"><a href="/Cobrador">Regresar</button></a>

    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
        </tr>
    </tfoot>
</table>