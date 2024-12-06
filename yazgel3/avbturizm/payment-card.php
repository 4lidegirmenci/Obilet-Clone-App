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
   <!-- Payment -->
   <div class="payment padding-bt">
      <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
         <h5 class="font-weight-normal mb-0 text-white">
            <a class="text-danger mr-3" href="payment.html"><i class="icofont-rounded-left"></i></a>
            Ödeme
         </h5>
         <div class="ml-auto d-flex align-items-center">
            <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                  class="icofont-navigation-menu"></i></a>
         </div>
      </div>
      <!-- You Ticket -->
      <div class="your-ticket p-3">
         <div class="list_item d-flex rounded-1 col-12 m-0 bg-white shadow-sm mb-3">
            <div class="pt-3 d-flex mb-auto">
               <img src="img/qr-code.png" class="img-fluid osahan-qr">
            </div>
            <div class="pl-3 py-3 d-flex w-100">
               <div class="bus_details w-100">
                  <p class="mb-2 l-hght-18 font-weight-bold">Niloy Poribohon</p>
                  <div class="l-hght-10 d-flex align-items-center my-2">
                     <small class="text-muted mb-0 pr-1">Yolculuk Başlangıcı</small>
                     <p class="small mb-0 l-hght-14 ml-auto">05May, 12:00am</p>
                  </div>
                  <div class="l-hght-10 d-flex align-items-center my-2">
                     <small class="text-muted mb-0 pr-1">Nereden-Nereye</small>
                     <p class="small mb-0 l-hght-14 ml-auto">Dhaka to Bogura</p>
                  </div>
                  <div class="l-hght-10 d-flex align-items-center my-2">
                     <small class="text-muted mb-0 pr-1">İniş</small>
                     <p class="small mb-0 l-hght-14 ml-auto">Bus Stand (8:45)</p>
                  </div>
                  <div class="l-hght-10 d-flex align-items-center mt-2">
                     <small class="text-muted mb-0 pr-1">Koltuk No</small>
                     <p class="small mb-0 l-hght-14 ml-auto">C1 - C2 - C3</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Select Payment -->
   <div class="fixed-bottom payment-borrad shadow bg-white m-3 rounded-1 p-3">
      <div class="d-flex small">
         <p>Toplam Ücret</p>
         <p class="ml-auto font-weight-bold text-danger">$53</p>
      </div>
      <div class="d-flex small">
         <form class="w-100" action="javascript:;">
            <div class="form-group mb-2">
               <div class="d-flex align-items-start">
                  <label for="exampleInputEmail1" class="mb-1 small text-muted">Kart Numarası</label>
                  <img src="img/master-card.png" class="img-fluid ml-auto rounded">
               </div>
               <input type="number" class="form-control form-control-sm" placeholder="1234 5678 9145 4589"
                  id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group row mb-3">
               <div class="col-8">
                  <label for="exampleInputmondate1" class="mb-1 small text-muted">Ay / Yıl</label>
                  <div class="d-flex border rounded">
                     <input type="number" class="form-control text-center form-control-sm border-0 px-1"
                        placeholder="AA" id="exampleInputmondate1" aria-describedby="mondateHelp">
                     <span class="pt-2">/</span>
                     <input type="number" class="form-control text-center form-control-sm border-0 px-1"
                        placeholder="YY" id="exampleInputmondate1" aria-describedby="mondateHelp">
                  </div>
               </div>
               <div class="col-4">
                  <label for="exampleInputcvv1" class="mb-1 small text-muted">CVV</label>
                  <input type="number" class="form-control text-center form-control-sm" placeholder="000"
                     id="exampleInputcvv1" aria-describedby="cvvHelp">
               </div>
            </div>
            <button type="submit" class="btn btn-danger btn-block" data-toggle="modal"
               data-target="#paymentModal">Öde</button>
         </form>
      </div>
   </div>
   <!-- Payment Success Modal -->
   <div class="modal fade" id="paymentModal" data-backdrop="static" tabindex="-1" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content mx-4 rounded-2">
            <div class="modal-header d-none">
            </div>
            <div class="modal-body text-center py-4">
               <img src="img/valid.png" class="img-fluid mb-2">
               <h5 class="font-weight-normal">Payment Success!</h5>
               <p class="mb-4">The system is waiting for the<br>the ticket</p>
               <a href="your-ticket.php" class="btn btn-sm btn-danger">Check Your Ticket</a>
            </div>
            <div class="modal-footer d-none">
            </div>
         </div>
      </div>
   </div>
   <!-- sidebar -->
   <nav id="main-nav">
      <ul class="second-nav">
         <li>
            <a href="#" class="bg-danger sidebar-user d-flex align-items-center py-4 px-3 border-0 mb-0">
               <img src="img/user1.jpg" class="img-fluid rounded-pill mr-3">
               <div class="text-white">
                  <h6 class="mb-0">I Am Osahan</h6>
                  <small>+91 12345-67890</small><br>
                  <span class="f-10 text-white-50">Version 1.32</span>
               </div>
            </a>
         </li>
         <li>
            <a href="index.html"><i class="icofont-page mr-2"></i>Açılış </a>
         </li>
         <li>
            <a href="landing.html"><i class="icofont-stylish-right mr-2"></i> Başlangıç Sayfası</a>
         </li>
         <li>
            <a href="get-started.html"><i class="icofont-ui-play mr-2"></i> Hadi Başlayalım</a>
         </li>
         <li>
            <a href="#"><i class="icofont-key mr-2"></i> Üyelik İşlemleri</a>
            <ul>
               <li><a href="signin.html">Giriş Yap</a></li>
               <li><a href="signup.html">Üye Ol</a></li>
               <li><a href="change-password.html">Şifreyi Değiştir</a></li>
               <li><a href="verification.html">Doğrulama</a></li>
            </ul>
         </li>
         <li><a href="home.html"><i class="icofont-ui-home mr-2"></i> Ana Sayfa</a></li>
         <li><a href="gift-card.html"><i class="icofont-sale-discount mr-2"></i> Teklifler</a></li>
         <li><a href="listing.html"><i class="icofont-list mr-2"></i> Otobüsler</a></li>
         <li><a href="bus-details.html"><i class="icofont-file-text mr-2"></i> Otobüs Detay</a></li>
         <li><a href="select-seat.html"><i class="icofont-check-circled mr-2"></i> Koltuk Seç</a></li>
         <li><a href="payment.html"><i class="icofont-id-card mr-2"></i> Çıkış Yap</a></li>
         <li><a href="payment-card.html"><i class="icofont-ui-v-card mr-2"></i> Ödeme</a></li>
         <li>
            <a href="#"><i class="icofont-user-alt-3 mr-2"></i> Profil</a>
            <ul>
               <li><a href="profile.html"> Profil</a></li>
               <li><a href="your-ticket.html"> Aktif Biletim</a></li>
               <li><a href="my-ticket.html"> Eski Biletim</a></li>
               <li><a href="customer-feedback.html"> Müşteri Yorumları</a></li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="icofont-page mr-2"></i> Daha Fazla </a>
            <ul>
               <li><a href="support.html">Destek</a></li>
               <li><a href="notification.html">Bildirimler</a></li>
               <li><a href="not-available.html">Not Available</a></li>
               <li><a href="404.html"> Not Found</a></li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="icofont-link mr-2"></i> Navigation Link Example</a>
            <ul>
               <li>
                  <a href="#">Link Example 1</a>
                  <ul>
                     <li>
                        <a href="#">Link Example 1.1</a>
                        <ul>
                           <li><a href="#">Link</a></li>
                           <li><a href="#">Link</a></li>
                           <li><a href="#">Link</a></li>
                           <li><a href="#">Link</a></li>
                           <li><a href="#">Link</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#">Link Example 1.2</a>
                        <ul>
                           <li><a href="#">Link</a></li>
                           <li><a href="#">Link</a></li>
                           <li><a href="#">Link</a></li>
                           <li><a href="#">Link</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li><a href="#">Link Example 2</a></li>
               <li><a href="#">Link Example 3</a></li>
               <li><a href="#">Link Example 4</a></li>
               <li data-nav-custom-content>
                  <div class="custom-message">
                     You can add any custom content to your navigation items. This text is just an example.
                  </div>
               </li>
            </ul>
         </li>
      </ul>
      <ul class="bottom-nav">
         <li class="email">
            <a class="text-danger nav-item text-center" href="home.html" tabindex="0" role="menuitem">
               <p class="h5 m-0"><i class="icofont-ui-home text-danger"></i></p>
               Ana Sayfa
            </a>
         </li>
         <li class="github">
            <a href="gift-card.html" class="nav-item text-center" tabindex="0" role="menuitem">
               <p class="h5 m-0"><i class="icofont-sale-discount"></i></p>
               Teklifler
            </a>
         </li>
         <li class="ko-fi">
            <a href="support.html" class="nav-item text-center" tabindex="0" role="menuitem">
               <p class="h5 m-0"><i class="icofont-support-faq"></i></p>
               Yardım
            </a>
         </li>
      </ul>
   </nav>
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

<!-- Mirrored from mobileui.store/preview/osahanbus/payment-card.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:20 GMT -->

</html>