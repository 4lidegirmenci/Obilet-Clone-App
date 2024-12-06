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

   <?php include 'dbcon.php';

   if (isset($_POST["cmdaddnew"])) {
      $sql = "INSERT INTO kullanıcılar (kullanici_id, adi_soyadi, email, sifre,telefon_no,tc_kimlik_no,dogum_tarihi,
   cinsiyet,kayit_tarihi,rol_id
   )
           VALUES
           (:kullanici_id, :adi_soyadi, :email,:sifre,:telefon_no,:tc_kimlik_no,:dogum_tarihi,
           :cinsiyet,:kayit_tarihi,:rol_id)";

      $stmt = $baglanti->prepare($sql);

      $stmt->bindParam(':kullanici_id', $_POST["kullanici_id"]);
      $stmt->bindParam(':adi_soyadi', $_POST["adi_soyadi"]);
      $stmt->bindParam(':email', $_POST["email"]);
      $stmt->bindParam(':sifre', $_POST["sifre"]);
      $stmt->bindParam(':telefon_no', $_POST["telefon_no"]);
      $stmt->bindParam(':tc_kimlik_no', $_POST["tc_kimlik_no"]);
      $stmt->bindParam(':dogum_tarihi', $_POST["dogum_tarihi"]);
      $stmt->bindParam(':cinsiyet', $_POST["cinsiyet"]);
      $stmt->bindParam(':kayit_tarihi', $_POST["kayit_tarihi"]);
      $stmt->bindParam(':rol_id', $_POST["rol_id"]);

      if ($stmt->execute()) {
         echo "<script type= 'text/javascript'>alert('Kayıt başarıyla güncellendi');
           window.location.replace('signup.php');</script>";
      } else {
         echo "<script type= 'text/javascript'>alert('Kayıt güncellenirken hata oluştu: " . implode(" ", $stmt->errorInfo()) . "');</script>";
      }

   }




   ?>
   <!-- sign up -->
   <div class="osahan-signup">
      <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
         <h5 class="font-weight-normal mb-0 text-white">
            <a class="text-danger mr-3" href="get-started.html"><i class="icofont-rounded-left"></i></a>
            Hesap Oluştur
         </h5>

      </div>
      <div id="addEmployeeModal" class="p-3">
         <form action="" method="post">
            <div class="form-group">
               <label class="text-muted f-10 mb-1"> Ad-Soyad</label>
               <input type="text" name="adi_soyadi" class="form-control" placeholder="Ad-Soyad Giriniz" required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1"> E-mail</label>
               <input type="email" name="email" class="form-control" placeholder="E-mail Adresinizi Giriniz " required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1">Şifre</label>
               <input type="password" name="sifre" class="form-control" placeholder="Şifrenizi Giriniz" required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1">Şifre(Tekrar)</label>
               <input type="password" class="form-control" placeholder="Şifrenizi Tekrar Giriniz" required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1"> Telefon Numarası</label>
               <input type="text" name="telefon_no" class="form-control" placeholder="Telefon Numarası Giriniz"
                  required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1"> TC Kimlik Numarası</label>
               <input type="text" name="tc_kimlik_no" class="form-control" placeholder="TC Kimlik Numarası Giriniz"
                  required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1">Doğum Tarihi</label>
               <input type="date" name="dogum_tarihi" class="form-control" placeholder="Doğum Tarihi Giriniz" required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1">Cinsiyet</label>
               <input type="text" name="cinsiyet" class="form-control" placeholder="Cinsiyet" required>
            </div>
            <div class="form-group">
               <label class="text-muted f-10 mb-1">Kayıt Tarihi</label>
               <input type="date" name="kayit_tarihi" class="form-control" placeholder="Kayıt Tarihi Giriniz" required>
            </div>
            <button type="submit" class="btn btn-success" name="cmdaddnew">Hesap
               Oluştur</button>


         </form>
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

<!-- Mirrored from mobileui.store/preview/osahanbus/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:12 GMT -->

</html>