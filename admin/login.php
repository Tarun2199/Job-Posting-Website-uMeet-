<?php
    include('../db-connect.php');
    $msg = '';
    session_start();
    if(isset($_SESSION['username'])){
        header('Location:home.php');
    }
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        #$password = md5($password);
        $sql = "select * from admin where username = '$username' and password = '$password'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        $row = mysqli_num_rows($query);
        if($row){
            // session_start();
            $_SESSION['username'] = $username;
            header('Location:home.php');
        }
        else{
            $msg = '<p class="text-danger">Incorrect Username/Password!</p>';
            echo $msg;
        }
    }
?>