<!--PHP-->
<?php
    /*VINCULATION WITH CONECTION.PHP*/
    include 'Conection.php';
    $connection = mysqli_connect("localhost", "root", "root", "logindb");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    /*HANDLE FROM DATA*/
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : ''; 
    /*INSERT DATA INTO THE DATABASE*/
    $query = "INSERT INTO register (username, email, pass) VALUES ('$username', '$email', '$pass')";
    if (mysqli_query($connection, $query)) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    /*VERIFY THAT THE EMAIL IS NOT REPEATED, IF IT IS REPEATED, ALERT BY JAVASCRIPT WHICH IS ALREADY REGISTERED WITH A BUTTON TO RETURN TO THE HTML*/
    $verifyEmail = mysqli_query($connection,"SELECT * FROM register WHERE email ='$email' ");
    if(mysqli_num_rows($verifyEmail) > 1){
        echo  '
        <script>
            alert("This email is already registered, try another");
            window.location = "../index.html"
        </script>
        ';
        exit();
    }
    /*VERIFY THAT THE USERNAME IS NOT REPEATED, IF IT IS REPEATED, ALERT BY JAVASCRIPT WHICH IS ALREADY REGISTERED WITH A BUTTON TO RETURN TO THE HTML*/
    $verifyUsername = mysqli_query($connection,"SELECT * FROM register WHERE username ='$username' ");
    if(mysqli_num_rows($verifyUsername) > 0){
        echo  '
        <script>
            alert("This email is already registered, try another");
            window.location = "../index.html"
        </script>
        ';
        exit();
    }
    /*EXECUTE VARIABLE*/
    $execute = mysqli_query($connection,$query);
    /*USE JAVASCRIPT ALARM TO NOTIFY THAT IT WAS REGISTERED OR NOT, WITH BUTTON TO RETURN TO HTML*/
    if($execute){
        echo '
        <script>
            alert("User successfully stored");
            window.location = "../index.html";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Please try again, user not stored");
            window.location = "../index.html";
        </script>
        ';
    }
    /*CLOSE DATABASE*/
    mysqli_close($connection);
?>