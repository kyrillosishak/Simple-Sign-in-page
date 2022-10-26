<html>  
<head>  
    <title>PHP login system</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>  
<body id= "k">  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <div class="mb-3">  
                <label for="exampleInputEmail1" class="form-label"> UserName: </label>  
                <input type = "text" id ="user" name  = "user" class="form-control" aria-describedby="emailHelp"/>  
                
            </div>  
            <div class="mb-3">  
                <label for="exampleInputPassword1" class="form-label"> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" class="form-control" />  
            </div>     
                <input type =  "submit" id = "btn" value = "Login" class="btn btn-primary"/>   
        </form>
        <form method="POST" action="signup.php">   
                <label for="exampleInputPassword1" class="form-label"> If you not signed up please </label>   
                <input type="submit"  value = "Sign Up" class="form-control"/>
        </form>     
        
    </div>  
     
    
    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                    
                }  
                return true;                           
            }  
        </script>  

</body>     
</html>
