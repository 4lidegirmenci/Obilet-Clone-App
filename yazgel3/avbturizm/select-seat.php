<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="img/logo.png">
<title>AVB Turizm</title>
<link rel="icon" />

<head>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Icofont Icon-->
  <link href="vendor/icons/icofont.min.css" rel="stylesheet" type="text/css" />
  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet" />

  <!-- Sidebar CSS -->
  <link href="vendor/sidebar/demo.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="image_slide.css" />
  <script type="text/javascript" src="validation.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <style>
    .container {
      display: block;
      position: relative;
      padding-left: 25px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 14px;
    }

    .container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 15px;
      width: 15px;
      background-color: #ffffff;
      border: 1px solid #999999;
      border-radius: 3px;
    }

    .container:hover input~.checkmark {
      background-color: #4dffb8;
      content: "Free";
    }

    .container input:checked~.checkmark {
      background-color: #b3b3b3;
    }

    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    .container input:checked~.checkmark:after {
      display: block;
    }

    .container .checkmark:after {
      left: 2px;
      top: 2px;
      width: 5px;
      height: 5px;
      transform: rotate(90deg);
    }

    #all {
      padding-top: 1%;
      width: 98%;
      height: 500px;
      margin-left: 1%;
      background-color: #ffffff;
    }

    #seat_block {
      background-color: #FFFFFF;
      width: 310px;
      height: 340px;
      margin-top: 2%;
      margin-left: 6%;
      padding-top: 2%;
      box-shadow: 0 0 10px #999999;
      border-radius: 20px;
      padding-bottom: 1%;
      float: left;
    }

    #seat_block:hover {
      box-shadow: 0 0 14px #000000;
    }

    .col2 {
      float: left;
      width: 65px;
      height: 300px;
      background-color: #ffffff;
    }

    #businfo {
      width: 300px;
      height: 350px;
      margin-left: 8%;
      background-color: #ffffff;
      float: left;
      margin-top: 2%;
      padding: 1%;
      border: 1px solid #b9b9b9;
      border-radius: 15px;
      box-shadow: 0 0 8px #999999;
      font-size: 14px;
    }

    #select_info {
      width: 220px;
      height: 400px;
      padding: 1%;
      margin-top: 0%;
      margin-left: 5%;
      background-color: #ffffff;
      float: left;
    }

    .container {
      display: block;
      position: relative;
      padding-left: 25px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 14px;
    }

    .container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 15px;
      width: 15px;
      background-color: #ffffff;
      border: 1px solid #999999;
      border-radius: 3px;
    }

    .container:hover input~.checkmark {
      background-color: #4dffb8;
      content: "Free";
    }

    .container input:checked~.checkmark {
      background-color: #b3b3b3;
    }

    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    .container input:checked~.checkmark:after {
      display: block;
    }

    .container .checkmark:after {
      left: 2px;
      top: 2px;
      width: 5px;
      height: 5px;
      transform: rotate(90deg);
    }

    #all {
      padding-top: 1%;
      width: 98%;
      height: 500px;
      margin-left: 1%;
      background-color: #ffffff;
    }

    #seat_block {
      background-color: #FFFFFF;
      width: 310px;
      height: 350px;
      margin-top: 2%;
      margin-left: 6%;
      padding-top: 2%;
      box-shadow: 0 0 10px #999999;
      border-radius: 20px;
      padding-bottom: 1%;
      float: left;
    }

    #seat_block:hover {
      box-shadow: 0 0 14px #000000;
    }

    .col2 {
      float: left;
      width: 65px;
      height: 300px;
      background-color: #ffffff;
    }

    #businfo {
      width: 300px;
      height: 350px;
      margin-left: 8%;
      background-color: #ffffff;
      float: left;
      margin-top: 2%;
      padding: 1%;
      border: 1px solid #b9b9b9;
      border-radius: 15px;
      box-shadow: 0 0 8px #999999;
      font-size: 14px;
    }

    #select_info {
      width: 220px;
      height: 400px;
      padding: 1%;
      margin-top: 0%;
      margin-left: 5%;
      background-color: #ffffff;
      float: left;
    }

    .red-seat {
      background-color: red;
      /* Kırmızı arka plan rengi */
      color: white;
      /* Beyaz metin rengi (opsiyonel) */
      cursor: not-allowed;
      /* İşaretçi şekli - tıklanamaz hale getirir */
    }
  </style>
</head>

<body>
  <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
    <h5 class="font-weight-normal mb-0 text-white">
      <a class="text-danger mr-3" href="bus-details.php"><i class="icofont-rounded-left"></i></a>
      KOLTUK SEÇİMİ
    </h5>

  </div>

  <form action="ticket.php" name="seats" method="POST">
    <script type="text/javascript">
      $(document).ready(function () {
        // Sayfa yüklendiğinde, daha önce seçilen koltukları kontrol et
        checkSelectedSeats();

        // Koltuk seçildiğinde
        $('.chkbx').click(function () {
          var maleSeats = [];
          var femaleSeats = [];

          // Cinsiyete göre seçilmiş koltukları ayır
          $('.male:checked').each(function () {
            maleSeats.push($(this).val());
          });
          $('.female:checked').each(function () {
            femaleSeats.push($(this).val());
          });

          // Koltuk sayısını hesapla
          var totalCount = maleSeats.length + femaleSeats.length;

          // Erkek ve kadın yolcu sayısına göre koltukları işaretle
          markSelectedSeats(maleSeats, 'blue-seat');
          markSelectedSeats(femaleSeats, 'pink-seat');

          // Koltuk sayısını güncelle
          $('#count').val(totalCount);

          // Ücreti hesapla
          var fare = totalCount * 250;
          $('#fare').val(fare);
        });
        function checkSelectedSeats() {
          var selectedSeats = <?php echo json_encode($selected_seats); ?>;
          selectedSeats.forEach(function (seat) {
            $('.chkbx[value="' + seat + '"]').prop('disabled', true);
            $('.chkbx[value="' + seat + '"]').addClass('red-seat');
          });
        }

        function markSelectedSeats(seats, color) {
          seats.forEach(function (seat) {
            $('.chkbx[value="' + seat + '"]').addClass(color);
          });
        }
      });




    </script>
    <div id="all" style='margin-top:20px;'>
      <div style="text-align:center;" id="businfo">
        <h3 style='text-align:;margin-top:-5px;'>Otubüs Bigileri</h3>
        <?php
        include 'dbcon.php';

        // Veritabanından daha önce seçilen koltukları alın
        $sefer_id = $_POST['sefer_id'];
        $query = $baglanti->prepare("SELECT koltuk_no FROM koltuklar WHERE sefer_id = :sefer_id");
        $query->execute(array(":sefer_id" => $sefer_id));
        $selected_seats = $query->fetchAll(PDO::FETCH_COLUMN);
        ?>

        <?php
        include 'dbcon.php'; // dbcon.php dosyasını dahil et
        
        if (isset($_POST['otobus_id'])) {
          $otobus_id = $_POST['otobus_id'];

          // Otobüs bilgilerini veritabanından al
          $otobus_sorgu = $baglanti->prepare("SELECT otobüsler.*, firmalar.firma_adi 
                                            FROM otobüsler 
                                            INNER JOIN firmalar ON otobüsler.firma_id = firmalar.firma_id 
                                            WHERE otobus_id = :otobus_id");
          $otobus_sorgu->execute([":otobus_id" => $otobus_id]);
          $otobus = $otobus_sorgu->fetch(PDO::FETCH_ASSOC);

          // Sefer bilgilerini al
          $sefer_sorgu = $baglanti->prepare("SELECT sefer_id FROM seferler WHERE otobus_id = :otobus_id");
          $sefer_sorgu->execute([":otobus_id" => $otobus_id]);
          $sefer = $sefer_sorgu->fetch(PDO::FETCH_ASSOC);

          // Otobüs bilgilerini ve sefer bilgilerini ekrana yazdır
          if ($otobus) {
            echo "<p>Plaka: " . $otobus['plaka'] . "</p>";
            echo "<p>Koltuk Tipi: " . $otobus['koltuk_tipi'] . "</p>";
            echo "<p>Firma Adı: " . $otobus['firma_adi'] . "</p>";
            echo "<p>Otobüs Numarası: " . $otobus['otobus_id'] . "</p>";

            if ($sefer) {
              echo "<p>Sefer Numarası: " . $sefer['sefer_id'] . "</p>";
              // Diğer sefer bilgilerini istediğiniz gibi ekle
            } else {
              echo "Bu otobüs için henüz sefer bulunamadı.";
            }
          } else {
            echo "Seçilen otobüs bulunamadı.";
          }
        } else {
          echo "Otobüs seçilmedi.";
        }

        ?>
      </div>
      <div id="seat_block">
        <div
          style="width:80px;height:25px;background-color:#cccccc;margin-bottom:8%;text-align:center;padding-top:2px;">
          Otobü İçi</div>
        <div class="col2" style="margin-left:20px;">
          <label class="container">1
            <input type="checkbox" class="chkbx" name="selected_seats" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">5
            <input type="checkbox" class="chkbx" name="selected_seats" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container">9
            <input type="checkbox" class="chkbx" name="selected_seats" value="9">
            <span class="checkmark"></span>
          </label>
          <label class="container">13
            <input type="checkbox" class="chkbx" name="selected_seats" value="13">
            <span class="checkmark"></span>
          </label>
          <label class="container">17
            <input type="checkbox" class="chkbx" name="selected_seats" value="17">
            <span class="checkmark"></span>
          </label>
          <label class="container">21
            <input type="checkbox" class="chkbx" name="selected_seats" value="21">
            <span class="checkmark"></span>
          </label>

        </div>
        <div class="col2">
          <label class="container">2
            <input type="checkbox" class="chkbx" name="selected_seats" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">6
            <input type="checkbox" class="chkbx" name="selected_seats" value="6">
            <span class="checkmark"></span>
          </label>
          <label class="container">10
            <input type="checkbox" class="chkbx" name="selected_seats" value="10">
            <span class="checkmark"></span>
          </label>
          <label class="container">14
            <input type="checkbox" class="chkbx" name="selected_seats" value="14">
            <span class="checkmark"></span>
          </label>
          <label class="container">18
            <input type="checkbox" class="chkbx" name="selected_seats" value="18">
            <span class="checkmark"></span>
          </label>
          <label class="container">22
            <input type="checkbox" class="chkbx" name="selected_seats" value="22">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="col2" style="margin-left:30px;">
          <label class="container">3
            <input type="checkbox" class="chkbx" name="selected_seats" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">7
            <input type="checkbox" class="chkbx" name="selected_seats" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container">11
            <input type="checkbox" class="chkbx" name="selected_seats" value="11">
            <span class="checkmark"></span>
          </label>
          <label class="container">15
            <input type="checkbox" class="chkbx" name="selected_seats" value="15">
            <span class="checkmark"></span>
          </label>
          <label class="container">19
            <input type="checkbox" class="chkbx" name="selected_seats" value="19">
            <span class="checkmark"></span>
          </label>
          <label class="container">23
            <input type="checkbox" class="chkbx" name="selected_seats" value="23">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="col2">
          <label class="container">4
            <input type="checkbox" class="chkbx" name="selected_seats" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">8
            <input type="checkbox" class="chkbx" name="selected_seats" value="8">
            <span class="checkmark"></span>
          </label>
          <label class="container">12
            <input type="checkbox" class="chkbx" name="selected_seats" value="12">
            <span class="checkmark"></span>
          </label>
          <label class="container">16
            <input type="checkbox" class="chkbx" name="selected_seats" value="16">
            <span class="checkmark"></span>
          </label>
          <label class="container">20
            <input type="checkbox" class="chkbx" name="selected_seats" value="20">
            <span class="checkmark"></span>
          </label>
          <label class="container">24
            <input type="checkbox" class="chkbx" name="selected_seats" value="24">
            <span class="checkmark"></span>
          </label>
        </div>
        <div id="select_info">
          <input style="width:520px;" class="btn btn-danger btn-block osahanbus-btn rounded-1" type="submit"
            name="submit" id="btn" value="Koltuğu Seç"></input>
          <input type="hidden" name="sefer_id" value="<?php echo $sefer['sefer_id']; ?>">

        </div>
      </div>

    </div>
  </form>
  <form action="rezervasyon.php" name="seats" method="POST">
    <h1 style="color: #dc3545; text-align: center;">KOLTUK REZERVE ET</h1>
    <script type="text/javascript">
      $(document).ready(function () {
        // Sayfa yüklendiğinde, daha önce seçilen koltukları kontrol et
        checkSelectedSeats();

        // Koltuk seçildiğinde
        $('.chkbx').click(function () {
          var maleSeats = [];
          var femaleSeats = [];

          // Cinsiyete göre seçilmiş koltukları ayır
          $('.male:checked').each(function () {
            maleSeats.push($(this).val());
          });
          $('.female:checked').each(function () {
            femaleSeats.push($(this).val());
          });

          // Koltuk sayısını hesapla
          var totalCount = maleSeats.length + femaleSeats.length;

          // Erkek ve kadın yolcu sayısına göre koltukları işaretle
          markSelectedSeats(maleSeats, 'blue-seat');
          markSelectedSeats(femaleSeats, 'pink-seat');

          // Koltuk sayısını güncelle
          $('#count').val(totalCount);

          // Ücreti hesapla
          var fare = totalCount * 250;
          $('#fare').val(fare);
        });
        function checkSelectedSeats() {
          var selectedSeats = <?php echo json_encode($selected_seats); ?>;
          selectedSeats.forEach(function (seat) {
            $('.chkbx[value="' + seat + '"]').prop('disabled', true);
            $('.chkbx[value="' + seat + '"]').addClass('red-seat');
          });
        }

        function markSelectedSeats(seats, color) {
          seats.forEach(function (seat) {
            $('.chkbx[value="' + seat + '"]').addClass(color);
          });
        }
      });




    </script>
    <div id="all" style='margin-top:20px;'>
      <div id="businfo">
        <h3 style='text-align:;margin-top:-5px;'>Otubüs Bigileri</h3>
        <?php
        include 'dbcon.php';

        // Veritabanından daha önce seçilen koltukları alın
        $sefer_id = $_POST['sefer_id'];
        $query = $baglanti->prepare("SELECT koltuk_no FROM koltuklar WHERE sefer_id = :sefer_id");
        $query->execute(array(":sefer_id" => $sefer_id));
        $selected_seats = $query->fetchAll(PDO::FETCH_COLUMN);


        ?>

        <?php
        include 'dbcon.php'; // dbcon.php dosyasını dahil et
        
        if (isset($_POST['otobus_id'])) {
          $otobus_id = $_POST['otobus_id'];

          // Otobüs bilgilerini veritabanından al
          $otobus_sorgu = $baglanti->prepare("SELECT otobüsler.*, firmalar.firma_adi 
                                            FROM otobüsler 
                                            INNER JOIN firmalar ON otobüsler.firma_id = firmalar.firma_id 
                                            WHERE otobus_id = :otobus_id");
          $otobus_sorgu->execute([":otobus_id" => $otobus_id]);
          $otobus = $otobus_sorgu->fetch(PDO::FETCH_ASSOC);

          // Sefer bilgilerini al
          $sefer_sorgu = $baglanti->prepare("SELECT sefer_id FROM seferler WHERE otobus_id = :otobus_id");
          $sefer_sorgu->execute([":otobus_id" => $otobus_id]);
          $sefer = $sefer_sorgu->fetch(PDO::FETCH_ASSOC);

          // Otobüs bilgilerini ve sefer bilgilerini ekrana yazdır
          if ($otobus) {
            echo "<p>Plaka: " . $otobus['plaka'] . "</p>";
            echo "<p>Koltuk Tipi: " . $otobus['koltuk_tipi'] . "</p>";
            echo "<p>Firma Adı: " . $otobus['firma_adi'] . "</p>";
            echo "<p>Otobüs Numarası: " . $otobus['otobus_id'] . "</p>";

            if ($sefer) {
              echo "<p>Sefer Numarası: " . $sefer['sefer_id'] . "</p>";
              // Diğer sefer bilgilerini istediğiniz gibi ekle
            } else {
              echo "Bu otobüs için henüz sefer bulunamadı.";
            }
          } else {
            echo "Seçilen otobüs bulunamadı.";
          }
        } else {
          echo "Otobüs seçilmedi.";
        }

        ?>
      </div>
      <div id="seat_block">
        <div
          style="width:80px;height:25px;background-color:#cccccc;margin-bottom:8%;text-align:center;padding-top:2px;">
          Otobü İçi</div>
        <div class="col2" style="margin-left:20px;">
          <label class="container">1
            <input type="checkbox" class="chkbx" name="selected_seats" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">5
            <input type="checkbox" class="chkbx" name="selected_seats" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container">9
            <input type="checkbox" class="chkbx" name="selected_seats" value="9">
            <span class="checkmark"></span>
          </label>
          <label class="container">13
            <input type="checkbox" class="chkbx" name="selected_seats" value="13">
            <span class="checkmark"></span>
          </label>
          <label class="container">17
            <input type="checkbox" class="chkbx" name="selected_seats" value="17">
            <span class="checkmark"></span>
          </label>
          <label class="container">21
            <input type="checkbox" class="chkbx" name="selected_seats" value="21">
            <span class="checkmark"></span>
          </label>

        </div>
        <div class="col2">
          <label class="container">2
            <input type="checkbox" class="chkbx" name="selected_seats" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">6
            <input type="checkbox" class="chkbx" name="selected_seats" value="6">
            <span class="checkmark"></span>
          </label>
          <label class="container">10
            <input type="checkbox" class="chkbx" name="selected_seats" value="10">
            <span class="checkmark"></span>
          </label>
          <label class="container">14
            <input type="checkbox" class="chkbx" name="selected_seats" value="14">
            <span class="checkmark"></span>
          </label>
          <label class="container">18
            <input type="checkbox" class="chkbx" name="selected_seats" value="18">
            <span class="checkmark"></span>
          </label>
          <label class="container">22
            <input type="checkbox" class="chkbx" name="selected_seats" value="22">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="col2" style="margin-left:30px;">
          <label class="container">3
            <input type="checkbox" class="chkbx" name="selected_seats" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">7
            <input type="checkbox" class="chkbx" name="selected_seats" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container">11
            <input type="checkbox" class="chkbx" name="selected_seats" value="11">
            <span class="checkmark"></span>
          </label>
          <label class="container">15
            <input type="checkbox" class="chkbx" name="selected_seats" value="15">
            <span class="checkmark"></span>
          </label>
          <label class="container">19
            <input type="checkbox" class="chkbx" name="selected_seats" value="19">
            <span class="checkmark"></span>
          </label>
          <label class="container">23
            <input type="checkbox" class="chkbx" name="selected_seats" value="23">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="col2">
          <label class="container">4
            <input type="checkbox" class="chkbx" name="selected_seats" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">8
            <input type="checkbox" class="chkbx" name="selected_seats" value="8">
            <span class="checkmark"></span>
          </label>
          <label class="container">12
            <input type="checkbox" class="chkbx" name="selected_seats" value="12">
            <span class="checkmark"></span>
          </label>
          <label class="container">16
            <input type="checkbox" class="chkbx" name="selected_seats" value="16">
            <span class="checkmark"></span>
          </label>
          <label class="container">20
            <input type="checkbox" class="chkbx" name="selected_seats" value="20">
            <span class="checkmark"></span>
          </label>
          <label class="container">24
            <input type="checkbox" class="chkbx" name="selected_seats" value="24">
            <span class="checkmark"></span>
          </label>
        </div>
        <div id="select_info">
          <input style="width:520px;" class="btn btn-danger btn-block osahanbus-btn rounded-1" type="submit"
            name="submit" id="btn" value="Koltuğu Rezerve Et"></input>
          <input type="hidden" name="sefer_id" value="<?php echo $sefer['sefer_id']; ?>">

        </div>
      </div>

    </div>
  </form>

</body>

</html>