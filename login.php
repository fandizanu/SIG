<?php
    session_start();
    include"config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link href="asset/bumi.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@505&display=swap" rel="stylesheet">
</head>
<body>   
    <div class="wrapper">
        <div class="title">
            Login Admin
        </div>    
        <form method="POST" action = aksilogin.php>
            <div class="field">
                <label">Masukkan Username</label>
                <input type="text" name="username"required>      
                
            </div>
            <div class="field">
                <label">Masukkan password</label>
                <input type="password" name="password" required>
                
            </div>
            
            <div class="field">
                <input type="submit" value="Login">                
            </div>           
            
            
        </form>
    
    </div>
</body>
</html>