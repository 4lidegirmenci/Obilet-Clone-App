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
   <!-- Custom styles for this template -->
   <link href="css/custom.css" rel="stylesheet">
   <!-- Sidebar CSS -->
   <link href="vendor/sidebar/demo.css" rel="stylesheet">
</head>

<body class="bg-light">
   <!-- My Ticket -->
   <div class="my-ticket padding-bt">
      <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
         <h5 class="font-weight-normal mb-0 text-white">
            <a class="text-danger mr-3" href="home.html"><i class="icofont-rounded-left"></i></a>
            Biletlerim
         </h5>
         <div class="ml-auto d-flex align-items-center">
            <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                  class="icofont-navigation-menu"></i></a>
         </div>
      </div>
   </div>

   <!-- Form to enter PNR code -->
   <div class="container mt-4">
      <div class="row justify-content-center">
         <div class="col-md-6">
            <form method="POST">
               <div class="form-group">
                  <label for="pnr_kodu">PNR Kodu:</label>
                  <input type="text" class="form-control" id="pnr_kod" name="pnr_kod" placeholder="PNR kodunu girin">
               </div>
               <button type="submit" class="btn btn-danger btn-block osahanbus-btn mb-4 rounded-1">Bileti Getir</button>
            </form>
         </div>
      </div>
   </div>
   <?php
   // Veritabanı bağlantısı için gerekli bilgiler
   $host = '127.0.0.1:3307';
   $db_name = 'yazgel_3';
   $username = 'root';
   $password = '';

   try {
      // PDO bağlantısını oluştur
      $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
      // Hata modunu ayarla
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
      // Hata durumunda hata mesajını yazdır
      die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
   }

   // Eğer PNR kodu formdan gelmişse işlem yapalım
   if (isset($_POST['pnr_kod'])) {
      try {
         // Formdan gelen PNR kodunu alalım ve güvenli hale getirelim
         $pnr_kodu = $_POST['pnr_kod'];

         // SQL sorgusunu hazırlayalım
         $query = "SELECT b.*, k.koltuk_no
                 FROM biletler b
                 LEFT JOIN koltuklar k ON b.koltuk_id = k.koltuk_id
                 WHERE b.pnr_kod = :pnr_kod";

         // Sorguyu hazırla
         $statement = $pdo->prepare($query);

         // Sorguyu çalıştır
         $statement->execute(array(':pnr_kod' => $pnr_kodu));

         // Sorgudan dönen satır sayısını kontrol edelim
         if ($statement->rowCount() > 0) {
            // Sonuçları döngü ile alalım ve ekrana yazdıralım
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
               echo "Bilet Numarası: " . $row['bilet_id'] . "<br>";
               echo "Kullanıcı Kodu: " . $row['kullanici_id'] . "<br>";
               echo "Sefer Numarası: " . $row['sefer_id'] . "<br>";
               echo "Koltuk Numarası: " . $row['koltuk_no'] . "<br>";
               echo "Bilet Tarihi: " . $row['bilet_tarihi'] . "<br>";
               echo "Ödeme Tipi: " . $row['odeme_tipi'] . "<br><br>";
            }
         } else {
            echo "Belirtilen PNR koduna ait bilet bulunamadı.";
         }
      } catch (PDOException $e) {
         // Hata durumunda hata mesajını yazdır
         echo "Hata: " . $e->getMessage();
      }
   }
   ?>







   <!-- Footer Fixed -->
   <div class="fixed-bottom p-3">
      <div class="footer-menu row m-0 bg-danger shadow rounded-2">
         <div class="col-3 p-0 text-center">
            <a href="home.php" class="home text-white">
               <span class="icofont-ui-home h5"></span>
               <p class="mb-0 small">Ana Sayfa</p>
            </a>
         </div>
         <div class="col-3 p-0 text-center">
            <a href="my-ticket.php" class="home text-white active">
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
   <!-- Sidebar JS-->
   <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="js/custom.js"></script>
</body>

<!-- Mirrored from mobileui.store/preview/osahanbus/my-ticket.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:20 GMT -->

</html>