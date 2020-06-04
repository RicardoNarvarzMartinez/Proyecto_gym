Editar servicios
<form action="{{ url('/Servicio/'.$servicios->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{method_field('PATCH') }}

<label for="nombreServicio">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{ $servicios->nombre }}">
<br/>

<label for="precio">{{'precio'}}</label>
<input type="text" name="precio" id="precio" value="{{ $servicios->precio }}">
<br/>

<label for="horario">{{'horario'}}</label>
<input type="text" name="horario" id="horario" value="{{ $servicios->horario }}">
<br/>

<label for="Instructor">{{'Instructor'}}</label>
<input type="text" name="Instructor" id="Instructor" value="{{ $servicios->instructor }}">
<br/>

<label for="foto">{{'foto'}}</label>
<br>
<img src="{{ asset('storage').'/'. $servicios->foto}}" alt="" width='200'>
<br>
<input type="File" name="foto" id="foto" value="">
<br/>

<input type="submit" value="Editar">
<button type="button" class="btn btn-primary"><a href="/Servicio">Regresar</button></a>


</form>