<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP practice</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <span id = "message" class = "message" >Done</span>
    <div class = "container" >
<form  method="post" onsubmit = "return showmessage()" >
    <label for="">Username</label>
    <input type="text" name="UName" id ="uname" ><br><br>
    <label for="">Password</label>
    <input type="password" name="Upass" id = "pass" ><span id = "showpass" class = "eye"  ><i id = "icons" class="fas fa-eye-slash"></i></span><br><br>   
    <input type="date" name="UDate" ><br><br>   
    <input type="submit" id = "sub" name = "insert" >
</form>    
    
</div>

<?php

$con = new mysqli("localhost","root","","practice");
$username = filter_input(INPUT_POST,'UName');
$password = filter_input(INPUT_POST,'Upass');
$date = filter_input(INPUT_POST,'UDate');
if($_POST['insert']){
    if(isset($username,$password,$date)){
        sleep(2);
        $con->query("insert into pra (username,password,date) values ('$username','$password','$date') ");
        
}
}

?>
<script src="main.js"></script>
</body>
</html>