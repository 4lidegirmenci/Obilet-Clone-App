<?php
session_start();
?>
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
                        <h2>Bilet Bilgileri</h2>
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
                        <th>Biletler</th>
                        <th>Ad-Soyad</th>
                        <th>Kalkış-Varış Şehirleri</th>
                        <th>Sefer Numarası</th>
                        <th>Koltuk Numarası</th>
                        <th>Bilet Tarihi</th>
                        <th>Kalkış Saati</th>
                        <th>PNR Kodu</th>
                        <th>Fiyat</th>
                        <th>Seç</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="ödeme.php">
                        <?php
                        include 'dbcon.php';

                        // Fetch $biletler from the database
                        $biletler = $baglanti->query("SELECT * FROM biletler");

                        // POST edilen verileri alın
                        $sefer_id = $_POST['sefer_id'];
                        $selected_seats = explode("\n", $_POST['selected_seats']);

                        // Seçilen koltuk numaralarını veritabanına ekleyin
                        // Seçilen koltuk numaralarını saklayacak bir dizi oluşturun
                        $selected_seat_numbers = array();

                        // Seçilen koltuk numaralarını veritabanına ekleyin ve PNR kodunu oluşturun
                        foreach ($selected_seats as $seat) {
                            // Koltuk numarasını ve sefer_id'yi veritabanına ekleyin
                            $query = $baglanti->prepare("INSERT INTO koltuklar (koltuk_no, sefer_id) VALUES (:koltuk_no, :sefer_id)");
                            $query->execute(array(":koltuk_no" => $seat, ":sefer_id" => $sefer_id));

                            // Eklenen koltuk numarasını diziye ekle
                            $selected_seat_numbers[] = $seat;

                            // PNR kodunu oluşturmak için gerekli bilgileri seferler ve otobusler tablolarından al
                            $sefer_query = $baglanti->prepare("SELECT s.kalkis_tarihi, s.kalkis_saati, s.fiyat, k.sehir_adi AS kalkis_sehri, v.sehir_adi AS varis_sehri, s.kalkis_sehri_id, o.plaka
                                                       FROM seferler s
                                                       INNER JOIN sehirler k ON s.kalkis_sehri_id = k.sehir_id
                                                       INNER JOIN sehirler v ON s.varis_sehri_id = v.sehir_id
                                                       INNER JOIN otobüsler o ON s.otobus_id = o.otobus_id
                                                       WHERE s.sefer_id = :sefer_id");
                            $sefer_query->execute(array(":sefer_id" => $sefer_id));
                            $sefer_row = $sefer_query->fetch(PDO::FETCH_ASSOC);
                            $kalkis_sehir_id = $sefer_row['kalkis_sehri_id'];
                            $kalkis_sehir_plaka = getCityPlate($kalkis_sehir_id); // İl plakasını almak için fonksiyonu çağır
                            $zaman = $sefer_row['kalkis_tarihi'] . " " . $sefer_row['kalkis_saati']; // Kalkış tarihini ve saati birleştir
                            $peron_harf = "Ç"; // Örnek olarak 'Ç' harfini sabit olarak alıyorum, rastgele atanabilir
                            $otobus_plaka = $sefer_row['plaka']; // Otobüs plakasını otobusler tablosundan al
                        
                            // Bilet alındığı zamanın öğleden önce mi, sonra mı olduğunu kontrol et
                            $zaman_parsed = strtotime($zaman);
                            $zaman_parsed_noon = date("A", $zaman_parsed);
                            $zaman_suffix = ($zaman_parsed_noon == "AM") ? "ÖÖ" : "ÖS";

                            // PNR kodunu oluşturmak için fonksiyonu çağır ve PNR kodunu al
                            $pnr_kod = generatePNRCode($seat, $kalkis_sehir_id, $zaman_suffix, $zaman, $peron_harf, $otobus_plaka);



                            // Oluşturulan PNR kodunu kullanarak tabloyu doldur
                            echo "<tr>";
                            echo "<td></td>"; // Empty cell for checkbox
                            echo "<td></td>"; // Empty cell for ticket
                            if (isset($_SESSION['adi_soyadi'])) {
                                // Oturum var, adı ve soyadı kullanabilirsiniz
                                echo "<td>" . $_SESSION['adi_soyadi'] . "</td>"; // Cell for name
                            } else {
                                // Oturum yok veya sonlandırıldı, uygun bir işlem yapın
                            }
                            echo "<td>" . $sefer_row['kalkis_sehri'] . " - " . $sefer_row['varis_sehri'] . "</td>"; // Cell for journey name
                            echo "<td>$sefer_id</td>"; // Cell for journey name
                            echo "<td>$seat</td>"; // Cell for seat number
                            echo "<td>" . $sefer_row['kalkis_tarihi'] . "</td>"; // Cell for departure date
                            echo "<td>" . $sefer_row['kalkis_saati'] . "</td>"; // Cell for departure time
                            echo "<td>$pnr_kod</td>"; // Cell for PNR code
                            echo "<td>" . $sefer_row['fiyat'] . "</td>"; // Cell for price
                            echo "<td>";
                            echo "<button type='submit' name='submit' >Ödemeye Geç</button>";
                            echo "</td>";
                            echo "</tr>";
                        }

                        // PNR kodunu oluşturan fonksiyon
                        function generatePNRCode($koltuk_no, $kalkis_sehir_id, $zaman_suffix, $zaman, $peron_harf, $otobus_plaka)
                        {
                            // Zaman formatını düzenle
                            $formatted_zaman = date("dmYHis", strtotime($zaman));

                            // PNR kodunu oluştur
                            $pnr_code = $koltuk_no . $kalkis_sehir_id . $zaman_suffix . $formatted_zaman . $peron_harf . $otobus_plaka;

                            return $pnr_code;
                        }


                        // İl plakasını almak için fonksiyon
                        function getCityPlate($city_id)
                        {
                            return $city_id;
                        }
                        // Kullanıcı adı ve soyadını al
                        $adi_soyadi = isset($_SESSION['adi_soyadi']) ? $_SESSION['adi_soyadi'] : null;

                        // Kullanıcı ID'sini al
                        $kullanici_id = null;
                        if ($adi_soyadi) {
                            // Kullanıcı adı ve soyadına göre kullanıcı kimliğini alacak bir işlev kullanarak kullanıcı kimliğini al
                            $kullanici_id = getUserIdFromName($adi_soyadi);
                        }

                        // Eğer kullanıcı ID'si alınamazsa bir hata mesajı göstermek veya işlemi sonlandırmak uygun olabilir
                        if (!$kullanici_id) {
                            echo "Kullanıcı kimliği alınamadı.";
                            // Gerekirse işlemi sonlandırabilirsiniz: exit; veya return; gibi
                        }

                        // getUserIdFromName fonksiyonunu gerçek veritabanı yapınıza göre uyarlamalısınız
                        function getUserIdFromName($adi_soyadi)
                        {
                            global $baglanti; // Bağlantıyı global olarak kullanabilmek için
                        
                            // Örnek olarak, adı ve soyadına göre kullanıcı kimliğini almak için bir sorgu çalıştırıyorum
                            $query = $baglanti->prepare("SELECT kullanici_id FROM kullanıcılar WHERE adi_soyadi = :adi_soyadi");
                            $query->execute(array(":adi_soyadi" => $adi_soyadi));
                            $row = $query->fetch(PDO::FETCH_ASSOC);

                            // Kullanıcı kimliğini döndürüyorum
                            return $row ? $row['kullanici_id'] : null; // Eğer sonuç yoksa veya hata varsa null dönecek
                        }

                        // Bilet bilgilerini biletler tablosuna eklemek için SQL sorgusunu hazırla ve çalıştır
                        $insert_query = $baglanti->prepare("INSERT INTO biletler (kullanici_id, sefer_id, koltuk_id, bilet_tarihi, pnr_kod) VALUES (:kullanici_id, :sefer_id, :koltuk_id, NOW(), :pnr_kod)");

                        foreach ($selected_seats as $seat) {
                            // Koltuk ID'sini almak için örnek olarak bir sorgu çalıştırıyorum, gerçek veritabanınıza göre değiştirmelisiniz
                            $koltuk_query = $baglanti->prepare("SELECT koltuk_id FROM koltuklar WHERE koltuk_no = :koltuk_no AND sefer_id = :sefer_id");
                            $koltuk_query->execute(array(":koltuk_no" => $seat, ":sefer_id" => $sefer_id));
                            $koltuk_row = $koltuk_query->fetch(PDO::FETCH_ASSOC);
                            $koltuk_id = $koltuk_row['koltuk_id']; // Koltuk ID'sini al
                        
                            // PNR kodunu oluşturmak için fonksiyonu çağır
                            $pnr_kod = generatePNRCode($seat, $kalkis_sehir_id, $zaman_suffix, $zaman, $peron_harf, $otobus_plaka);



                            // SQL sorgusunu çalıştır
                            $insert_query->execute(
                                array(
                                    ":kullanici_id" => $kullanici_id,
                                    ":sefer_id" => $sefer_id,
                                    ":koltuk_id" => $koltuk_id,
                                    ":pnr_kod" => $pnr_kod
                                )
                            );
                        }
                        ?>
                    </form>

                </tbody>
            </table>
        </div>

</body>

</html>