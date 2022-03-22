<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/beranda.css">
    <link href="../asset/bumi.png" rel="icon">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWlAp2Cj7nZ19GmdVmUq1ZFESToo4hC9c&callback=initMap"></script>
    <script>
      function initMap(){
        var map = new google.maps.Map(document.getElementById("map"),{
          center:new google.maps.LatLng(-0.502106,117.153709),
          zoom:11
        });
      }
    </script>
</head>
<body>

<!-- <div class="w3-top " >
  <div class="w3-bar w3-light-blue w3-wide w3-padding w3-card">
    <a href="Admin.php" class="w3-bar-item w3-button"><b>Halaman Admin</b> </a>    
    <div class="w3-right w3-hide-small">      
      <a href="../index.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div> -->
<!-- Sidebar -->
<!-- <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
  <h3 class="w3-bar-item">Menu</h3>
  <a class="w3-bar-item w3-button" href="transformasiadmin.php">Tranformasi Data</a>
  <a class="w3-bar-item w3-button" href="clusteradmin.php">Cluster</a>
  <a class="w3-bar-item w3-button" href="atributadmin.php">Atribut</a>
</div> -->
<!-- </div> -->
<?php include("headeradm.php"); ?>
<!-- Page Content -->
<div style="margin-left:15%">

<div class="w3-container ">  




<div class="w3-container">
<div class="w3-content w3-padding" style="max-width:1650px">
  <div class="w3-content w3-padding" style="max-width:1680px">
  <div class="w3-container w3-padding-32 w3-white" id="maps">  
    <div id="map" style="width: 100%; height:600px; padding:10% 10% 10% 10%"></div>  
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
        <thead>
          <tr class="w3-light-grey">
            <th>No</th>
            <th>Kecamatan</th>
            <th>Cluster</th>
            <th>Jenis</th>
          </tr>
        </thead>
        <tr>
          <th scope="row">1</th>
          <td>Samarinda Utara</td>
          <td>2</td>
          <td>Banjir Sedang</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Samarinda Ulu</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td >Samarinda Seberang</td>
          <td>@twitter</td>
          <td>@fat</td>
        </tr> 
        <tr>
          <th scope="row">4</th>
          <td >Sambutan</td>
          <td>@twitter</td>
          <td>@fat</td>
        </tr> 
        <tr>
          <th scope="row">5</th>
          <td >Sungai Pinang</td>
          <td>@twitter</td>
          <td>@fat</td>
        </tr> 
        <tr>
          <th scope="row">6</th>
          <td >Sungai Kunjang</td>
          <td>@twitter</td>
          <td>@fat</td>
          
        </tr> 
        <tr>
          <th scope="row">7</th>
          <td>Samarinda Kota</td>
          <td>@twitter</td>
          <td>@fat</td>
        </tr> 
        <tr>
          <th scope="row">8</th>
          <td >Palaran</td>
          <td>@twitter</td>
          <td>@fat</td>
        </tr> 
        <tr>
          <th scope="row">9</th>
          <td >Loa Janan</td>
          <td>@twitter</td>
          <td>@fat</td>
        </tr> 
        <tr>
          <th scope="row">10</th>
          <td >Samarinda I</td>
          <td>@twitter</td>
          <td>@fat</td>
        </tr> 
      </table>
  </div>
  </div>
  
</div>
</div>

</div>




</body>
</html>