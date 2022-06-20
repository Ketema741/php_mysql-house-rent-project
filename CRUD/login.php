<?php 

include('../config/db_connect.php');


if(isset($_POST['submit'])){
    
    $uname=$_POST['name'];
    $pass=$_POST['password'];

    $sql = "SELECT * FROM log_in WHERE name='$uname' AND password='$pass'";

    $result = mysqli_query($connected, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['name'] === $uname && $row['password'] === $pass) {
            echo "Logged in!";
            header("Location: ../admin.php");
            exit();
        }   
    }
    else{
            
        header("Location: ../login.php");
        exit();
    }
}
?>