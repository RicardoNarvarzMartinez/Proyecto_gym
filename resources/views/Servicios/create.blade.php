
<!DOCTYPE html>
<html>
<head>
    <title>
    CREAR NUEVO SERVICIO

    </title>
    <link rel="stylesheet" href="resources/sass/styles.css">
</head>

<body>
<H1>CREAR NUEVO SERVICIO</H1>
    <table>
        <tr>
            <td>
                seccion para crear servicios
<form action="{{ url('/Servicio')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="nombreServicio">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="">
<br/>

<label for="precio">{{'precio'}}</label>
<input type="text" name="precio" id="precio" value="">
<br/>

<label for="horario">{{'horario'}}</label>
<input type="text" name="horario" id="horario" value="">
<br/>

<label for="Instructor">{{'Instructor'}}</label>
<input type="text" name="Instructor" id="Instructor" value="">
<br/>

<label for="foto">{{'foto'}}</label>
<input type="File" name="foto" id="foto" value="">
<br/>


<input type="submit" value="Agregar">
<button type="button" class="btn btn-primary"><a href="/Servicio">Regresar</button></a>
</form>
</html>