<html>  
<head>  
    <title>PHP Signup system</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
</head>  
<body id= "k">  
    <div id = "frm">  
        <h1>Signup</h1>  
        <form name="f1" action = "check.php" onsubmit = "return validation()" method = "POST">  
            <div class="mb-3">  
                <label for="exampleInputEmail1" class="form-label"> UserName: </label>  
                <input type = "text" id ="user" name  = "user" class="form-control" aria-describedby="emailHelp" />  
            </div>  
            <div class="mb-3">   
                <label  for="exampleInputEmail1" class="form-label"> email: </label>  
                <input type = "text" id ="email" name  = "email" class="form-control" aria-describedby="emailHelp" /> 
            </div> 
            <div class="mb-3">  
                <label  for="exampleInputEmail1" class="form-label"> Password: </label>  
                <input type = "password" id ="pass" name  = "pass1" class="form-control" aria-describedby="emailHelp"/>  
            </div> 
            <div class="mb-3">   
                <label  for="exampleInputEmail1" class="form-label"> re-enter Password: </label>  
                <input type = "password" id ="pass" name  = "pass2" class="form-control" aria-describedby="emailHelp"/>  
            </div> 
            <div class="mb-3">      
                <input type =  "submit" id = "btn" value = "Login" class="btn btn-primary"/>  
            </div> 
        </form>
    </div> 
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps1=document.f1.pass1.value;
                var ps2=document.f1.pass2.value;
                var email = document.f1.email.value;  
                if(id.length=="" && ps1.length=="" && ps2.length == "" && email == "") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps1.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                    }     
                    if (ps2.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                    }  
                    if(ps1 != ps2){
                        alert("Please enter the same password");  
                        return false;
                    }
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
                    {
                        return true;
                    }
                        alert("You have entered an invalid email address!")
                        return false;
                   }  
                return true;                           
            }  
        </script>  

</body>     
</html>
