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
        zoom:12
      });
    }
  </script>
</head>

<body>

<?php include("header.php")?>
<!-- Header -->


<!-- googlemap -->
<h2 style="padding-top: 55px; text-align:center; font-family:sans-serif; width:100%;  ">Map Kota Samarinda</h2>
<div class="w3-content w3-padding" style="max-width:1440px;">
<div class="w3-container w3-padding-32 w3-white" id="maps">  
  <div id="map" style="width: 100%; height:600px;  "></div>  
</div>
</div>


<!-- Page content -->
<div class="content" >
  <div class="w3-content w3-padding" style="max-width:1564px;">
  <div class="w3-container w3-padding-32 w3-pale-blue"  id="map" >
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="text-align: center; background-image:url('asset/bg.jpg'); " >Peta Geografis Banjir di Samarinda</h3>
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
            <td>1</td>
            <td>Banjir Rendah</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td >Samarinda Seberang</td>
            <td>1</td>
            <td>Banjir Rendah</td>
          </tr> 
          <tr>
            <th scope="row">4</th>
            <td >Sambutan</td>
            <td>1</td>
            <td>Banjir Rendah</td>
          </tr> 
          <tr>
            <th scope="row">5</th>
            <td >Sungai Pinang</td>
            <td>3</td>
            <td>Banjir Tinggi</td>
          </tr> 
          <tr>
            <th scope="row">6</th>
            <td >Sungai Kunjang</td>
            <td>2</td>
            <td>Banjir Sedang</td>
            
          </tr> 
          <tr>
            <th scope="row">7</th>
            <td>Samarinda Kota</td>
            <td>2</td>
            <td>Banjir Sedang</td>
          </tr> 
          <tr>
            <th scope="row">8</th>
            <td >Palaran</td>
            <td>2</td>
            <td>Banjir Sedang</td>
          </tr> 
          <tr>
            <th scope="row">9</th>
            <td >Loa Janan</td>
            <td>2</td>
            <td>Banjir Sedang</td>
          </tr> 
          <tr>
            <th scope="row">10</th>
            <td >Samarinda Ilir</td>
            <td>3</td>
            <td>Banjir Tinggi</td>
          </tr> 
        </table>
      </div>
          
      </div>
  </div>


     
</div>

</div>


<?php include("footer.php")?>
</body>

</html>
