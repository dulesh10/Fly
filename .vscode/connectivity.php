<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $email= $_POST['email'];
        $pass= $_POST['pass'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $dbname = "firstweb";

    // creating a connection
    $con = mysqli_connect($host, $username, "", $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO register(id,email,password) VALUES ('0','$email','$pass')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        header("Location: http://localhost/demo/.vscode/home.php");
exit();
       
    }
  
    // close connection
    mysqli_close($con);
?>
