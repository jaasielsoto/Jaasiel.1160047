<?php
// validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

// conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

// hacemos llamado al input del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$edad = $_POST["edad"];
$curp = $_POST["curp"];
$sexo = $_POST["sexo"];
$telefono = $_POST["telefono"];

// verificamos la conexión a la base de datos
if (!$connection) {
    echo "No se ha podido conectar con el servidor" . mysql_error();
} else {
    echo "<b><h3>Hemos conectado al servidor</h3></b>";
}

// indicamos el nombre de la base de datos
$datab = "dbformulario";
// seleccionamos la base de datos
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    echo "No se ha podido encontrar la Tabla";
} else {
    echo "<h3>Tabla seleccionada:</h3>";
}

// insertamos datos de registro a la base de datos
$instruccion_SQL = "INSERT INTO tabla_form (nombre, apellido, usuario, contraseña, edad, curp, sexo, telefono)
                    VALUES ('$nombre', '$apellido', '$usuario', '$contraseña', '$edad', '$curp', '$sexo', '$telefono')";

$resultado = mysqli_query($connection, $instruccion_SQL);

$consulta = "SELECT * FROM tabla_form";

$result = mysqli_query($connection, $consulta);
if (!$result) {
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</h1></th>";
echo "<th><h1>Nombre</h1></th>";
echo "<th><h1>Apellido</h1></th>";
echo "<th><h1>Usuario</h1></th>";
echo "<th><h1>Contraseña</h1></th>";
echo "<th><h1>Edad</h1></th>";
echo "<th><h1>CURP</h1></th>";
echo "<th><h1>Sexo</h1></th>";
echo "<th><h1>Teléfono</h1></th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><h2>" . $colum['id'] . "</h2></td>";
    echo "<td><h2>" . $colum['nombre'] . "</h2></td>";
    echo "<td><h2>" . $colum['apellido'] . "</h2></td>";
    echo "<td><h2>" . $colum['usuario'] . "</h2></td>";
    echo "<td><h2>" . $colum['contraseña'] . "</h2></td>";
    echo "<td><h2>" . $colum['edad'] . "</h2></td>";
    echo "<td><h2>" . $colum['curp'] . "</h2></td>";
    echo "<td><h2>" . $colum['sexo'] . "</h2></td>";
    echo "<td><h2>" . $colum['telefono'] . "</h2></td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($connection);

echo '<a href="index.html">Volver Atrás</a>';
?>
