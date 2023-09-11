<?php 
/*Valido Datos del servidor*/
$userDB = "root";
$passwordDB = "root";
$hostDB = "localhost";
$logindb = 'logindb';
/*Coneccion Base de Datos*/
try{
    $connection=new PDO("mysql:host=$hostDB;dbname=$logindb",$userDB,$passwordDB);
    echo "Conectando...";
    $judgment=$connection->prepare("SELECT * FROM register");
    $judgment->execute();
    $registers = $judgment->fetchAll(PDO::FETCH_ASSOC);
    print_r($registers);
}
catch(Exception $error){
    echo $error->getMessage();
}
$connection = mysqli_connect($hostDB, $userDB, $passwordDB);
/*Verificamos la coneccion a base de datos*/
if(!$connection){
    echo 'Conectado exitosamente' . mysqli_connect_error();
} else{
    echo '<b><h3>No se ha conectado</h3></b>';
}
/*Nombre base de datos*/
$datab = "logindb";
/* Verificar si la base de datos existe (opcional) */
if (mysqli_query($connection, "USE $datab")) {
    echo "<h3>Base de datos seleccionada: $datab</h3>";
} else {
    die("No se pudo seleccionar la base de datos: " . mysqli_error($connection));
}
/*seleccionar la base de datos*/
$db = mysqli_select_db($connection,$datab);
if (!$db){
    echo "No  se ha podido encontrar la Tabla";
} else{
    echo "<h3>Tabla seleccionada:</h3>";
}
?>