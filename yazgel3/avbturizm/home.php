<?php include 'dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" type="image/png" href="img/logo.png">
   <title>AVB Turizm</title>
   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Icofont Icon-->
   <link href="vendor/icons/icofont.min.css" rel="stylesheet" type="text/css">
   <!-- Slick Slider -->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
   <!-- Select Tool -->
   <link href="vendor/select-tool/dist/css/select2.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="css/custom.css" rel="stylesheet">
   <!-- Sidebar CSS -->
   <link href="vendor/sidebar/demo.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdMwdry1mlxVM84Z6zB_UTTV4iwi8JfX0&libraries=places"></script>
</head>

<body onload="initMap()" class="bg-light">
   <!-- verification -->
   <div class="osahan-verification padding-bt">
      <div class="p-3 shadow bg-danger danger-nav osahan-home-header">
         <div class="font-weight-normal mb-0 d-flex align-items-center">
            <img src="img/logo.png" class="img-fluid osahan-nav-logo">
            <div class="ml-auto d-flex align-items-center">
               <a href="profile.php" class="mr-3"><img src="img/user1.jpg" class="img-fluid rounded-circle"></a>
               <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                     class="icofont-navigation-menu"></i></a>
            </div>
         </div>
      </div>
      <div class="bg-danger px-3 pb-3">
         <div class="bg-white rounded-1 p-3">
            <form method="post" action="listing.php">
               <div class="form-group border-bottom pb-2">
                  <label for="source">Nereden:</label>
                  <select id="source" name="kalkis_sehri" class="form-control">
                     <?php
                     // Şehirleri veritabanından al
                     $sehirler = $baglanti->prepare("SELECT * FROM sehirler");
                     $sehirler->execute();
                     while ($sehir = $sehirler->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='" . $sehir['sehir_adi'] . "'>" . $sehir['sehir_adi'] . "</option>";
                     }
                     ?>
                  </select>
               </div>
               <div class="form-group border-bottom pb-2">
                  <label for="dest">Nereye:</label>
                  <select id="dest" name="varis_sehri" class="form-control">
                     <?php
                     // Tekrar şehirleri veritabanından al
                     $sehirler->execute();
                     while ($sehir = $sehirler->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='" . $sehir['sehir_adi'] . "'>" . $sehir['sehir_adi'] . "</option>";
                     }
                     ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="date">Tarih:</label>
                  <input id="date" name="seyahat_tarihi" class="form-control" type="date">
               </div>
               <button type="submit" name="submit" class="btn btn-danger btn-block osahanbus-btn rounded-1">Otobüs
                  Bul</button>
            </form>
            <br>
            <button onclick="hesapla()" type="button" class="btn btn-danger btn-block osahanbus-btn rounded-1">Rotayı
               Göster
            </button>
         </div>
         <div id="map" style="height: 500px;width:100%;"></div>
      </div>

      <script>
         let map, directionsService, directionsRenderer
         let sourceAutocomplete, destAutocomplete

         function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
               center: { lat: 37.7749, lng: -122.4194 },
               zoom: 13
            });
            google.maps.event.addListener(map, "click", function (event) {
               this.setOptions({ scrollwheel: true });
            });
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            sourceAutocomplete = new google.maps.places.Autocomplete(
               document.getElementById('source')
            );
            destAutocomplete = new google.maps.places.Autocomplete(
               document.getElementById('dest')
            );
         }

         function hesapla() {
            var source = document.getElementById('source').value;
            var dest = document.getElementById('dest').value;

            let request = {
               origin: source,
               destination: dest,
               travelMode: 'DRIVING'
            };

            directionsService.route(request, function (result, status) {
               if (status == "OK") {
                  directionsRenderer.setDirections(result);
               }
            });
         }
      </script>



      <!-- Footer Fixed -->
      <div class="fixed-bottom p-3">
         <div class="footer-menu row m-0 bg-danger shadow rounded-2">
            <div class="col-3 p-0 text-center">
               <a href="home.php" class="home text-white active">
                  <span class="icofont-ui-home h5"></span>
                  <p class="mb-0 small">Home</p>
               </a>
            </div>
            <div class="col-3 p-0 text-center">
               <a href="my-ticket.php" class="home text-white">
                  <span class="icofont-ticket h5"></span>
                  <p class="mb-0 small">Biletlerim</p>
               </a>
            </div>
            <div class="col-3 p-0 text-center">
               <a href="notification.php" class="home text-white">
                  <span class="icofont-notification h5"></span>
                  <small class="osahan-n">4</small>
                  <p class="mb-0 small">Bildirimler</p>
               </a>
            </div>
            <div class="col-3 p-0 text-center">
               <a href="profile.php" class="home text-white">
                  <span class="icofont-user h5"></span>
                  <p class="mb-0 small">Hesap</p>
               </a>
            </div>
         </div>
      </div>

      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- slick Slider JS-->
      <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
      <!-- Select Tool -->
      <script src="vendor/select-tool/dist/js/select2.min.js"></script>
      <!-- Sidebar JS-->
      <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
</body>

<!-- Mirrored from mobileui.store/preview/osahanbus/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:15 GMT -->

</html>