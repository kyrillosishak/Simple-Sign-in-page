<?php
    include "dbconnection.php";
    if(isset($_POST['user']) && isset($_POST['pass'])){
        $username = $_POST['user'];  
        $password = md5($_POST['pass']);  
        
        $sql = "select *from users where name = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
    }     
?>  
