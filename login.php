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
            
            <div class="field">
                <a href="index.php">Kembali</a>                   
            </div> 
           
        </form>
    
    </div>
</body>
</html>