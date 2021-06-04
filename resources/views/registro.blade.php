<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Prueba</title>
</head>

<body>
    <h1>HOLA</h1>
    <form action="/registro" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="nombre" placeholder="Nombre"><br><br>
        <input type="text" name="a_pat" placeholder="Apellido Paterno"><br><br>
        <input type="text" name="a_mat" placeholder="Apellido Materno"><br><br>
        <input type="date" name="fecha_nacimiento" placeholder="Nombre de la Calle"><br><br>
        <select  name="tipo_usuario">
            <option selected>Selecciona el tipo de usuario</option>
            <option value="1">Alumno</option>
            <option value="2">Profesor</option>
        </select><br><br>
        <input type="text" name="direccion" placeholder="Direccion"><br><br>
        <input type="number" name="cod_postal" placeholder="Codigo Postal"><br><br>
        <input type="text" name="localidad" placeholder="Localidad"><br><br>
        <input type="text" name="pais" placeholder="Pais"><br><br>
        <input type="text" name="telefono" placeholder="Telefono"><br><br>
        <input type="email" name="email" placeholder="Correo Electronico"><br><br>
        <input type="password" name="password" placeholder="Contraseña"><br><br><br>

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
            <option selected>Selecciona tu semestre</option>
            <option value="1">Primer Semestre</option>
            <option value="2">Segundo Semestre</option>
            <option value="3">Tercer Semestre</option>
            <option value="4">Cuarto Semestre</option>
            <option value="5">Quinto Semestre</option>
            <option value="6">Sexto Semestre</option>
            <option value="7">Septimo Semestre</option>
            <option value="8">octavo Semestre</option>
            <option value="9">noveno Semestre</option>
            <option value="10">Decimo Semestre</option>
            <option value="11">Decimo Primer Semestre</option>
            <option value="12">Decimo Segundo Semestre</option>
            <option value="13">Decimo Tercer Semestre</option>
            <option value="14">Decimo Cuarto Semestre</option>
            <option value="15">Decimo Quinto Semestre</option>
            <option value="16">Decimo Sexto Semestre</option>
            <option value="17">Decimo Septimo Semestre</option>
            <option value="18">Decimo Octavo Semestre</option>
        </select><br><br>

        <input type="file" name="foto" required><br><br>

        <input type="submit" value="Registrarse">

    </form>

</body>

</html>