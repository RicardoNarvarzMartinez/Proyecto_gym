
<!DOCTYPE html>
<html>
<head>
    <title>
    CORREO ELECTRONICO
    </title>
    <link rel="stylesheet" href="resources/sass/styles.css">
</head>

<body>
    <table>
        <tr>
            <td>

            <h1>MANDAR CORREO ELECTRONICO</h1>
                <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                <div>
                        <label>Nombre de servicio:</label><label class="validation-error hide" id="fullNameValidationError">This field is required.</label>
                        <input type="text" name="fullName" id="fullName">
                    </div>
                    <div>
                        <label>Costo:</label><label class="validation-error hide" id="fullNameValidationError">This field is required.</label>
                        <input type="text" name="fullName" id="fullName">
                    </div>
                    <div>
                        <label>Monto Mora:</label>
                        <input type="text" name="empCode" id="empCode">
                    </div>
                    <div>
                        <label>Recargo:</label>
                        <input type="text" name="salary" id="salary">
                    </div>
                    <div>
                        <label>correo:</label>
                        <input type="text" name="salary" id="salary">
                    </div>
                    <div>
                        <label>Contenido del mensaje:</label>
                        <input type="text" name="salary" id="salary">
                    </div>
                    <button type="button" class="btn btn-success">Mandar correo</button>
                    <button type="button" class="btn btn-primary"><a href="/Cobrador">Regresar</button></a>
                </form>
            </td>
            <td>
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <script src="resources/js/script.js"></script>
</body>

</html>