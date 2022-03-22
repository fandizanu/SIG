<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style/admin.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-signal.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2020.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
    <body>
    <div class="w3-top " >
    <div class="w3-bar w3-wide w3-padding w3-card" style="background-image: url('../asset/bg.jpg');">
        <div class="w3-display-position w3-padding" style="top:-10px;left:240px;">
            <h3><img src="../asset/earth.ico" style="height:24px;width:24px;"> Sistem Informasi Geografis Banjir Samarinda</h3>
        </div>
        <div class="w3-right w3-hide-small">                  
            <a href="../index.php" class="w3-bar-item w3-button w3-hover-white">Logout</a>        
        </div>
    </div>
    </div>
    <!-- Sidebar -->
    <div class="w3-sidebar w3-2020-navy-blazer w3-bar-block" style="width:14%">
        <a class="w3-bar-item w3-button w3-hover-white" href="admin.php" style="font-size: 20px; border-bottom:1px solid grey; font-family: 'Open Sans' , sans-serif; text-align:center; height: 55px; padding-top:14px;  "><b> Admin SIG</b></a>
        <p style="padding-left: 20px; font-size:12px; padding-top:15px;"> MAIN MENU</p>
        <a class="w3-bar-item w3-button w3-hover-white" href="transformasiadmin.php"><img src="../asset/setting.png" style="height:12px;width:12px; "> Tranformasi Data</a>
        <a class="w3-bar-item w3-button w3-hover-white" href="clusteradmin.php"> <img src="../asset/clstr.png" style="height:12px;width:12px;"> Cluster</a>
        <a class="w3-bar-item w3-button w3-hover-white" href="atributadmin.php"> <img src="../asset/attr.png" style="height:12px;width:12px;"> Atribut</a>
    </div>
</body>
</html>