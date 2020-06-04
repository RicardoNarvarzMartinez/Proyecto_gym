
<!DOCTYPE html>
<html>
<head>
    <title>
        Crear un servicio
    </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<H1>REGISTROS PARA SUSCRIPPCION</H1>
    <table>
        <tr>
            <td>
                <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                    <div>
                        <label>Nombre</label><label class="validation-error hide" id="fullNameValidationError"></label>
                        <input type="text" name="fullName" id="fullName">
                    </div>
                    <div>
                        <label>Costo Mensual</label>
                        <input type="text" name="empCode" id="empCode">
                    </div>
                    <div>
                        <label>Horarios</label>
                        <input type="text" name="salary" id="salary">
                    </div>
                    <div>
                        <label>Monto de mora</label>
                        <input type="text" name="city" id="city">
                    </div>
                    <div>
                        <label>Recargo</label>
                        <input type="text" name="city1" id="city1">
                    </div>
                    <div  class="form-action-buttons">
                        <input type="submit" value="Crear">
                        <button type="button" class="btn btn-primary"><a href="/">Regresar</button></a>
                    </div>
                </form>
            </td>
            <td>
                <table class="list" id="employeeList">
                  
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <script src="script.js"></script>
</body>
</html>	
	
	