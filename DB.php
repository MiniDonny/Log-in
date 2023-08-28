<?php /*Inicio del Cocumento php*/

    /*Variables del servidor y para ingresar a la base de datos*/
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "Log-in"; /*TABLA EN LA QUE TRABAJARE */

    /*Coneccion de la base de datos a mysql con las variables*/
    $connection = mysqli_connect($servername, $username, $password, $dbname); /*"mysqli_connect" Es la libreria que se utiliza para la coneccion */

    /*Bucle if */
    if (!$connection){ /*Si la coneccion es incorrecta que diga "coneccion fallida*/
        die ("Connection failed: " . mysqli_connect_error()); 
    }

    echo "Conexion Exitosa <br> "; /*muestra mensaje de coneccion exitosa*/

    /*Mencion de las variables*/
    $username = $_POST["username"]
    $email = $_POST ["email"]
    $password = $_POST ["password"]

    /*Insertar datos en la tabla Registration*/
    $mysql = "INSERT INTO Registration (nombre, email, password) 
            VALUES ('$username','$email','$password')"; /*En las variables*/
    
    /*Bucle if*/
    if ($connection=>query($mysql) == TRUE){ /*Si se ingresaron los datos correctamente*/
        echo "Datos ingresados correctamente";
    } else { /*Si se ingresaron los datos erroneamente, muestra tambien el error*/
        echo "Error: " . $mysql . "<br>" . $connection->error;
    }

    /*Insertar datos en la tabla Login*/
    $mysql = "INSERT INTO Login (email, password)
            VALUES ('$email','$password')";
    
    /*Bucle if*/
    if ($connection=>query($mysql) == TRUE){ /*Si se ingresaron los datos correctamente*/
        echo "Datos ingresados correctamente";
    } else { /*Si se ingresaron los datos erroneamente, muestra tambien el error*/
        echo "Error: " . $mysql . "<br>" . $connection->error;
    }

?>