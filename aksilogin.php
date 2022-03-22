
<?php    
    include"config.php";
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $sql = mysqli_query($koneksi, "SELECT * from admin WHERE username ='$user' 
                        AND password = '$pass'");

    $cek = mysqli_num_rows($sql);

    if($cek > 0){
        session_start();
        $_SESSION['username']=$user;
        $_SESSION['password']=$password;
        header("location:admin/admin.php");
    }else{
        echo '
        <script>
            alert("Username atau password salah");
            window.location.href="login.php";
        </script>';
        
    }
?>