<?php
include('config.php');

?>


<!DOCTYPE html>
<html>
<title>SIG Samarinda</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style/beranda.css">
<link href="asset/bumi.png" rel="icon">
<head>
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

<?php include("header.php")?>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/w3images/architect.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> <span class="w3-hide-small w3-text-light-grey">Architects</span></h1>
  </div>
</header>
<!-- googlemap -->
<div class="w3-content w3-padding" style="max-width:1440px">
<div class="w3-container w3-padding-32 w3-white" id="maps">  
  <div id="map" style="width: 100%; height:600px; padding:10% 10% 10% 10%; "></div>  
</div>
</div>


<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">
<div class="w3-container w3-padding-32 w3-pale-blue" id="map">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Peta Geografis Banjir di Samarinda</h3>
    <p>Pembagian Daerah Rawan Banjir Kota Samarinda Berdasarkan Kecamatan</p>
    <img src="asset/peta_smd.jpg">
    <div class="content">      
      <div class="w3-container">
      <h2>Pembagian Wilayah</h2>
      <p>Pembagian Wilayah Banjir Per Kecamatan di Samarinda</p>

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
          <td >Samarinda Ilir</td>
          <td>@twitter</td>
          <td>@fat</td>
        </tr> 
      </table>
    </div>
        
    </div>
</div>


     
</div>

<?php include("footer.php")?>
</body>

</html>
