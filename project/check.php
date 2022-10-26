<?php
    include "dbconnection.php";
    if(isset($_POST['user'])){
        $username = $_POST['user'];  
        $password = md5($_POST['pass1']);  
        $password2 = $_POST['pass2'];
        $email= $_POST['email'];
        $sql2 = "select *from users where email='$email'";  
        $sql = "INSERT INTO users (email, name ,password, registration_date) values ('$email','$username','$password',now())"; 
        
        $result = mysqli_query($con, $sql2);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
        if($count == 0 ){
             if (mysqli_query($con, $sql)) {
                 echo "New record created successfully";
             } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
        }
    }
    
?>  
<html>
    <head>

    </head>
    <body>
        <?php if ($count != 0) { ?> 
            <script type="text/javascript" >
                alert("email exists");
                window.location.href = "signup.php"; 
            </script>

        <?php } ?>
        
    </body>
</html>