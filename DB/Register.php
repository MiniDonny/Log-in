<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consult Data Base</title>
    <style type="text/css">
        table{
            border: solid 2px #7e7c7c;
            border-collapse: collapse;
        }
        th,h3{
            background-color: #edf797;
        }
        td,th{
            border: solid 1px #7e7c7c;
            padding: 2px;
            text-aling: center;
        }
    </style>   
</head>
<body>
</body>
</html>
<?php 
/**/
include 'Conection.php';

$connection = mysqli_connect("localhost", "root", "root", "logindb");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
/*Hacemos llamado al input de formulario*/
$username = isset($_POST['username']) ? $_POST['username'] : '';
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
/*Insertamos datos de registro al mysql xampp*/
$query = "INSERT INTO your_table (username, mail, pass) VALUES ('$username', '$mail', '$pass')";
if (mysqli_query($connection, $query)) {
    echo "Record added successfully!";
} else {
    echo "Error: " . mysqli_error($connection);
}
/*$consulta = "SELECT * FROM tabla where id = '1'" si queremos que nos muestre solo un registro especifico de ID*/
$consultation = "SELECT * FROM register ";

$result = mysqli_query($connection, $consultation);
if(!$result){
    echo "no se ha podido realizar la consulta" ;
}
echo    "<table>";
echo    "<tr>";
echo    "<th><h1>id</th></h1>";
echo    "<th><h1>Username</th></h1>";
echo    "<th><h1>Email</th></h1>";
echo    "<th><h1>Password</th></h1>";
echo    "</tr>";

while ($colum = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td><h2>";
    echo "<td><h2>" . $colum['username']. "</td><h2>";
    echo "<td><h2>" . $colum['email']. "</td><h2>";
    echo "<td><h2>" . $colum['pass']. "</td><h2>";
}
echo "</table>";

mysqli_close( $connection );

echo'<a href="index.html"> Volver Atrás';

?>