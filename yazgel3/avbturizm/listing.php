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
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style type="text/css">
      body {
         color: #566787;
         background: #f5f5f5;
         font-family: 'Varela Round', sans-serif;
         font-size: 13px;
      }

      .table-wrapper {
         background: #fff;
         padding: 20px 25px;
         margin: 30px 0;
         border-radius: 3px;
         box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
      }

      .table-title {
         padding-bottom: 15px;
         background: #dc3545;
         color: #fff;
         padding: 16px 30px;
         margin: -20px -25px 10px;
         border-radius: 3px 3px 0 0;
      }

      .table-title h2 {
         margin: 5px 0 0;
         font-size: 24px;
      }

      .table-title .btn-group {
         float: right;
      }

      .table-title .btn {
         color: #fff;
         float: right;
         font-size: 13px;
         border: none;
         min-width: 50px;
         border-radius: 2px;
         border: none;
         outline: none !important;
         margin-left: 10px;
      }

      .table-title .btn i {
         float: left;
         font-size: 21px;
         margin-right: 5px;
      }

      .table-title .btn span {
         float: left;
         margin-top: 2px;
      }

      table.table tr th,
      table.table tr td {
         border-color: #e9e9e9;
         padding: 12px 15px;
         vertical-align: middle;
      }

      table.table tr th:first-child {
         width: 60px;
      }

      table.table tr th:last-child {
         width: 100px;
      }

      table.table-striped tbody tr:nth-of-type(odd) {
         background-color: #fcfcfc;
      }

      table.table-striped.table-hover tbody tr:hover {
         background: #f5f5f5;
      }

      table.table th i {
         font-size: 13px;
         margin: 0 5px;
         cursor: pointer;
      }

      table.table td:last-child i {
         opacity: 0.9;
         font-size: 22px;
         margin: 0 5px;
      }

      table.table td a {
         font-weight: bold;
         color: #566787;
         display: inline-block;
         text-decoration: none;
         outline: none !important;
      }

      table.table td a:hover {
         color: #2196F3;
      }

      table.table td a.edit {
         color: #FFC107;
      }

      table.table td a.delete {
         color: #F44336;
      }

      table.table td i {
         font-size: 19px;
      }

      table.table .avatar {
         border-radius: 50%;
         vertical-align: middle;
         margin-right: 10px;
      }

      .pagination {
         float: right;
         margin: 30px 0 5px;
      }

      .pagination li a {
         border: none;
         font-size: 13px;
         min-width: 30px;
         min-height: 30px;
         color: #999;
         margin: 0 2px;
         line-height: 30px;
         border-radius: 2px !important;
         text-align: center;
         padding: 0 6px;
      }

      .pagination li a:hover {
         color: #666;
      }

      .pagination li.active a,
      .pagination li.active a.page-link {
         background: #03A9F4;
      }

      .pagination li.active a:hover {
         background: #0397d6;
      }

      .pagination li.disabled i {
         color: #ccc;
      }

      .pagination li i {
         font-size: 16px;
         padding-top: 6px
      }

      .hint-text {
         float: left;

         font-size: 13px;
      }

      .custom-checkbox {
         position: relative;
      }

      .custom-checkbox input[type="checkbox"] {
         opacity: 0;
         position: absolute;
         margin: 5px 0 0 3px;
         z-index: 9;
      }

      .custom-checkbox label:before {
         width: 18px;
         height: 18px;
      }

      .custom-checkbox label:before {
         content: '';
         margin-right: 10px;
         display: inline-block;
         vertical-align: text-top;
         background: white;
         border: 1px solid #bbb;
         border-radius: 2px;
         box-sizing: border-box;
         z-index: 2;
      }

      .custom-checkbox input[type="checkbox"]:checked+label:after {
         content: '';
         position: absolute;
         left: 6px;
         top: 3px;
         width: 6px;
         height: 11px;
         border: solid #000;
         border-width: 0 3px 3px 0;
         transform: inherit;
         z-index: 3;
         transform: rotateZ(45deg);
      }

      .custom-checkbox input[type="checkbox"]:checked+label:before {
         border-color: #03A9F4;
         background: #03A9F4;
      }

      .custom-checkbox input[type="checkbox"]:checked+label:after {
         border-color: #fff;
      }

      .custom-checkbox input[type="checkbox"]:disabled+label:before {
         color: #b8b8b8;
         cursor: auto;
         box-shadow: none;
         background: #ddd;
      }

      /* Modal styles */
      .modal .modal-dialog {
         max-width: 400px;
      }

      .modal .modal-header,
      .modal .modal-body,
      .modal .modal-footer {
         padding: 20px 30px;
      }

      .modal .modal-content {
         border-radius: 3px;
      }

      .modal .modal-footer {
         background: #ecf0f1;
         border-radius: 0 0 3px 3px;
      }

      .modal .modal-title {
         display: inline-block;
      }

      .modal .form-control {
         border-radius: 2px;
         box-shadow: none;
         border-color: #dddddd;
      }

      .modal textarea.form-control {
         resize: vertical;
      }

      .modal .btn {
         border-radius: 2px;
         min-width: 100px;
      }

      .modal form label {
         font-weight: normal;
      }
   </style>
   <script type="text/javascript">
      $(document).ready(function () {
         // Activate tooltip
         $('[data-toggle="tooltip"]').tooltip();
         // Select/Deselect checkboxes
         var checkbox = $('table tbody input[type="checkbox"]');
         $("#selectAll").click(function () {
            if (this.checked) {
               checkbox.each(function () {
                  this.checked = true;
               });
            } else {
               checkbox.each(function () {
                  this.checked = false;
               });
            }
         });
         checkbox.click(function () {
            if (!this.checked) {
               $("#selectAll").prop("checked", false);
            }
         });
      });
   </script>
</head>

<body class="bg-light">
   <?php
   include 'dbcon.php';

   ?>
   <!-- Listing Page -->
   <div class="osahan-listing">
      <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
         <h5 class="font-weight-normal mb-0 text-white">
            <a class="text-danger" href="home.php"><i class="icofont-rounded-left"></i></a>
         </h5>

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
   <div class="container">
      <div class="result"></div>

      <div class="table-wrapper">

         <div class="table-title">
            <div class="row">
               <div class="col-sm-6">
                  <h2>Seferler</h2>
               </div>

            </div>
         </div>
         <table class="table table-striped table-hover">
            <thead>
               <tr>
                  <th>
                     <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll">
                        <label for="selectAll"></label>
                     </span>
                  </th>
                  <th>Seferler</th>
                  <th>Kalkış Şehri</th>
                  <th>Varış Şehri</th>
                  <th>Kalkış Tarihi</th>
                  <th>Kalkış Saati</th>
                  <th>Varış Saati</th>
                  <th>Yolculuk Süresi</th>
                  <th>Otobüs Plakası</th>
                  <th>Fiyat</th>
                  <th>Koltuk Sayısı</th>
                  <th>Otobüs Numarası</th>
                  <th>Seç</th>



               </tr>

            </thead>
            <tbody>
               <form action="select-seat.php" method="post">
                  <?php
                  include 'dbcon.php';

                  // Form gönderildiğinde
                  if (isset($_POST["submit"])) {
                     // Kullanıcı tarafından seçilen şehirleri ve tarihi al
                     $kalkis_sehri = $_POST["kalkis_sehri"];
                     $varis_sehri = $_POST["varis_sehri"];
                     $kalkis_tarihi = $_POST["seyahat_tarihi"];

                     // Kalkış ve varış şehirlerinin sehirler tablosundaki sehir_id değerlerini bul
                     $kalkis_sehri_sorgu = $baglanti->prepare("SELECT sehir_id FROM sehirler WHERE sehir_adi = :kalkis_sehri");
                     $kalkis_sehri_sorgu->execute([":kalkis_sehri" => $kalkis_sehri]);
                     $kalkis_sehri_id = $kalkis_sehri_sorgu->fetchColumn();

                     $varis_sehri_sorgu = $baglanti->prepare("SELECT sehir_id FROM sehirler WHERE sehir_adi = :varis_sehri");
                     $varis_sehri_sorgu->execute([":varis_sehri" => $varis_sehri]);
                     $varis_sehri_id = $varis_sehri_sorgu->fetchColumn();

                     // Seferleri veritabanından al
                     $seferler = $baglanti->prepare("SELECT seferler.*, otobüsler.plaka, otobüsler.otobus_id FROM seferler 
            INNER JOIN otobüsler ON seferler.otobus_id = otobüsler.otobus_id
            WHERE seferler.kalkis_sehri_id = :kalkis_sehri_id 
            AND seferler.varis_sehri_id = :varis_sehri_id 
            AND seferler.kalkis_tarihi = :kalkis_tarihi");
                     $seferler->execute([
                        ":kalkis_sehri_id" => $kalkis_sehri_id,
                        ":varis_sehri_id" => $varis_sehri_id,
                        ":kalkis_tarihi" => $kalkis_tarihi,
                     ]);

                     // Alınan seferleri ekrana yazdır
                     if ($seferler->rowCount() > 0) {
                        while ($sefer = $seferler->fetch(PDO::FETCH_ASSOC)) {
                           echo "<tr>";
                           echo "<td><input type='checkbox'></td>";
                           echo "<td>" . $sefer['sefer_id'] . "</td>";
                           echo "<td>" . $kalkis_sehri . "</td>";
                           echo "<td>" . $varis_sehri . "</td>";
                           echo "<td>" . $sefer['kalkis_tarihi'] . "</td>";
                           echo "<td>" . $sefer['kalkis_saati'] . "</td>";
                           echo "<td>" . $sefer['varis_saati'] . "</td>";
                           echo "<td>" . $sefer['yolculuk_suresi'] . "</td>";
                           echo "<td>" . $sefer['plaka'] . "</td>";
                           echo "<td>" . $sefer['fiyat'] . "</td>";
                           echo "<td>" . $sefer['koltuk_sayisi'] . "</td>";
                           echo "<td>" . $sefer['otobus_id'] . "</td>";
                           echo "<td>";
                           echo "<input type='hidden' name='sefer_id' value='" . $sefer['sefer_id'] . "'>";
                           echo "<input type='hidden' name='otobus_id' value='" . $sefer['otobus_id'] . "'>"; // Otobüs ID'sini sefer tablosundan al
                           echo "<button type='submit' name='submit'>Seç</button>";
                           echo "</td>";
                           echo "</tr>";

                        }
                     } else {
                        echo "<tr><td colspan='12'>Uygun sefer bulunamadı.</td></tr>";
                     }
                  }
                  ?>
               </form>


            </tbody>

            </tbody>

         </table>


      </div>

</body>

</html>