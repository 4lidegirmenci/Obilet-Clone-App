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

<body>
   <?php
   // Veritabanı bağlantısını sağlamak için dbcon.php dosyasını dahil edin
   include 'dbcon.php';

   if (isset($_POST["cmdlogin"])) {
      $telefon_no = $_POST["telefon_no"];
      $email = $_POST["email"];
      $sifre = $_POST["sifre"];

      // Kullanıcı bilgilerini kontrol et
      $query = "SELECT * FROM kullanıcılar WHERE (email=:email OR telefon_no=:telefon_no) AND sifre=:sifre";
      $stmt = $baglanti->prepare($query);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':telefon_no', $telefon_no);
      $stmt->bindParam(':sifre', $sifre);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($result) {
         // Giriş başarılı, kullanıcıyı ana sayfaya yönlendir
         // Kullanıcı adı ve soyadını al
         $adi_soyadi = $result['adi_soyadi'];
         // Kullanıcının cinsiyetini al
         $cinsiyet = $result['cinsiyet'];
         // Giriş yapan kullanıcının adını, soyadını ve cinsiyetini deneme3.php sayfasına aktarmak için session kullanabilirsiniz
         session_start();
         $_SESSION['adi_soyadi'] = $adi_soyadi;
         $_SESSION['cinsiyet'] = $cinsiyet;
         header("Location: home.php");
         exit();
      }

   }
   ?>

   <!-- sign up -->
   <div class="osahan-signup">
      <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
         <h5 class="font-weight-normal mb-0 text-white">
            <a class="text-danger mr-3" href="get-started.html"><i class="icofont-rounded-left"></i></a>
            Hesabınıza Giriş Yapın
         </h5>
      </div>
      <div class="px-3 pt-3 pb-5">
         <form action="" method="post">
            <div class="form-group">
               <label class="text-muted f-10 mb-1">Telefon Numarası</label>
               <input type="text" name="telefon_no" class="form-control" placeholder="Telefon Numarası Giriniz"
                  required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1">E-Mail</label>
               <input type="email" name="email" class="form-control" placeholder="Email Adresinizi Giriniz" required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1">Şifre</label>
               <input type="password" name="sifre" class="form-control" placeholder="Şifrenizi Giriniz" required>
            </div>
            <div class="text-right mb-3">
               <a href="change-password.html" class="text-muted small">Şifremi Unuttum</a>
            </div>
            <button type="submit" class="btn btn-danger btn-block osahanbus-btn mb-4 rounded-1" name="cmdlogin">Giriş
               Yap</button>
         </form>
         <div class="osahan-signin text-center p-1">
            <p class="m-0">Üye Değil Misin ? <a href="signup.php" class="text-danger ml-2">Üye Ol</a></p>
         </div>
         <!-- Form to enter PNR code -->
         <div class="container mt-4">
            <div class="row justify-content-center">
               <div class="col-md-6">
                  <form method="POST">
                     <div class="form-group">
                        <label for="pnr_kodu">PNR Kodu:</label>
                        <input type="text" class="form-control" id="pnr_kod" name="pnr_kod"
                           placeholder="PNR kodunu girin">
                     </div>
                     <button type="submit" class="btn btn-danger btn-block osahanbus-btn mb-4 rounded-1">Bileti
                        Getir</button>
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
      </div>
   </div>
   <!-- sidebar -->
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

<!-- Mirrored from mobileui.store/preview/osahanbus/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:12 GMT -->

</html>