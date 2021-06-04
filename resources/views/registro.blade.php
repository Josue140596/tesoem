<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Prueba</title>
</head>

<body>
    <h1>Formulario de registro</h1>
    <form action="/registro" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="nombre" placeholder="Nombre"><br><br>
        <input type="text" name="a_pat" placeholder="Apellido Paterno"><br><br>
        <input type="text" name="a_mat" placeholder="Apellido Materno"><br><br>
        <input type="text" name="fecha_nacimiento" placeholder=""><br><br>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="tipo usuario">
            <option selected>Selecciona el tipo de usuario</option>
            <option name="opcion" value="1">Alumno</option>
            <option name="opcion" value="2">Profesor</option>
        </select><br><br>
        <input type="text" name="direccion" placeholder="direccion"><br><br>
        <input type="number" name="cp" placeholder="Codigo Postal"><br><br>
        <input type="text" name="pais" placeholder="Pais"><br><br>
        <input type="text" name="telefono" placeholder="Telefono"><br><br>
        <input type="email" name="email" placeholder="Correo Electronico"><br><br>
        <input type="password" name="password" placeholder="Contraseña"><br><br>        

        <select name="carrera">
            <option selected>Selecciona tu carrera</option>
            <option value="1">Contabilidad</option>
            <option value="2">Licenciatura en gastronomia</option>
            <option value="3">Ingenieria ambiental</option>
            <option value="4">Ingenieria industrial</option>
            <option value="5">Ingeniera en administracion</option>
            <option value="6">Ingeniera en energias renovables</option>
            <option value="7">Ingeniera en sistemas computacionales</option>
            <option value="8">Ingenieria en tecnologias de la informacion</option>
        </select><br><br>

        <select name="semestre">
            <option selected>Selecciona semestre</option>
            <option value="1">Primer semestre</option>
            <option value="2">Segundo semestre</option>
            <option value="3">Tercer semestre</option>
            <option value="4">Cuarto semestre</option>
            <option value="5">Quinto semestre</option>
            <option value="6">Sexto semestre</option>
            <option value="7">Septimo semestre</option>
            <option value="8">Octavo semestre</option>
            <option value="9">Noveno semestre</option>
            <option value="10">Decimo semestre</option>
            <option value="11">Decimo Primer semestre</option>
            <option value="12">Decimo Segundo semestre</option>
            <option value="13">Decimo Tercer semestre</option>
            <option value="14">Decimo Cuarto semestre</option>
            <option value="15">Decimo Quinto semestre</option>
            <option value="16">Decimo Sexto semestre</option>
            <option value="17">Decimo Septimo semestre</option>
            <option value="18">Decimo Octavo semestre</option>
        </select><br><br>

        <input type="file" name="foto" require><br><br><br>

        <input type="submit" value="Registrarse">

    </form>

</body>

</html>