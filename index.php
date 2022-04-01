<?php 
//Search form and button
if(isset($_GET['searchBtn'])){
    $search_term = $_GET['search'];
    header("Location: https://pharmplug.com/?s=$search_term");
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en" prefix="og:http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>PharmPlug</title>
    <meta name="title" content="PharmPlug" />
    <meta name="description" content="Provision of Healthcare Products, Laboratory services in Enugu, Prescription drugs provider in Enugu, Provision of Healthcare Products in Enugu, Subsription drugs in enugu" />
    <meta name="keywords" content="Provision of Healthcare retail products" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="shortcut icon" href="assets/img/pharmplug_logo.jpeg" /> 
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PharmPlug" />
    <meta property="og:description" content="Provision of Healthcare Products" />
    <meta property="og:image" content="" />
    <!-- all css here -->
    <!-- bootstrap v5.0.3 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Themify Icons-->
    <link rel="stylesheet" type="text/css" href="assets/icons/themify-icons.css">

    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
         body,html{font-family:'Poppins', sans-serif; overflow-x:hidden;}
        a{text-decoration: none;}
        .lightBlueText{color: #06b1cf !important;}
        .lightBlueTextHover:hover{color: #06b1cf !important;}
        .lightBlueBg{background-color: #06b1cf !important;}
        .lightBlueBgHover:hover{background-color: #06b1cf !important;}

        .darkBlueText{color: #1971a3 !important;}
        .darkBlueTextHover:hover{color: #1971a3 !important;}
        .darkBlueBg{background-color: #1971a3 !important;}
        .darkBlueBgHover:hover{background-color: #1971a3 !important;}

        .lemonText{color: #8cd50a !important;}
        .lemonTextHover:hover{color: #8cd50a !important;}
        .lemonBg{background-color: #8cd50a !important;}
        .lemonBgHover:hover{background-color: #8cd50a !important;}

        .aquaText{color: #c2f2ff !important;}
        .aquaTextHover:hover{color: #c2f2ff !important;}
        .aquaBg{background-color: #c2f2ff !important;}
        .aquaBgHover:hover{background-color: #c2f2ff !important;}

        .hover:hover{background-color: #8cd50a !important; color: #fff;}

        .float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:40px;
   background-color:#0C9;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    box-shadow: 2px 2px 3px #999;
}

    .my-float{
    margin-top:0px;
}
    </style>
    
</head>

<body class="">
    <div class="container-fluid">
      <!-- NAVIGATION BEGINS-->
      <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                    <div class="col-md-4 d-none d-md-block">
                        <a class="navbar-brand" href="#"><img src="assets/img/pharmplug_logo.jpeg" alt="PharmPlug" title="PharmPlug" width="150px" height="60px" class="d-inline-block align-text-bottom"></a>
                    </div>
                    <div class="col-md-4 d-none d-md-block pe-2">
                     <form class="d-flex" action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="GET">
                        <input class="form-control me-2 lemonBg" type="search" placeholder="Search" name="search" aria-label="Search">
                        <button class="btn btn-outline-success lightBlueBg" type="submit" name="searchBtn"><i class="ti-search text-white"></i></button>
                      </form>
                    </div>
                     <div class="col-md-2 border-start border-primary m-0">
                        <ul class="ps-2 list-group list-unstyled">
                            <li class="small p-0 m-0"><a class="lightBlueText" href="#">Upload Prescription</a></li>
                            <li class="small p-0 m-0"><a class="lightBlueText" href="#">Get Prescription</a></li>
                        </ul>

                    </div>
                    <div class="col-md-2 border-start border-primary">
                      <a class="lightBlueText" href="https://pharmplug.com/cart/"><span class="ps-2"><i class="ti-shopping-cart align-middle" style="font-size:30px;"></i>&nbsp;Cart&nbsp;<br></span> </a>                   
                    </div>
                </div>
            </div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <div class="col-md-12">
                      <div class="collapse navbar-collapse float-end" id="navbarTogglerDemo01">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                             <a class="lightBlueText nav-link" href="https://pharmplug.com/contact/">Online Doctor</a>
                              <li>
                                <li class="nav-item">
                              <a class="lightBlueText nav-link" aria-current="page" href="https://pharmplug.com/contact/">Lab Tests</a>
                              <li>
                            <li class="nav-item dropdown">
                              <a class="lightBlueText nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><strong>Ask Pharm. Josy</strong></a>
                               <ul class="dropdown-menu dropdown-menu-light border border-4 p-1" style="background: transparent !important;">
                                    <li class="border-bottom border-4">
                                        <a class="p-0 dropdown-item text-white hover" href="https://wa.me/+2348035400457"><i class="ti-mobile"></i>&nbsp;+234 803 540 0457</a></li>
                                    <li class="border-bottom border-4">
                                        <a class="p-0 dropdown-item text-white hover" href="https://web.facebook.com/pharmplugrx"><i class="ti-facebook"></i>&nbsp;Facebook</a></a></li>
                                    <li class="border-bottom border-4">
                                        <a class="p-0 dropdown-item text-white hover" href="https://twitter.com/pharmplugrx"><i class="ti-twitter"></i>&nbsp;Twitter</a></a></li>
                                     <li class="border-bottom border-4">
                                        <a class="p-0 dropdown-item text-white hover" href="https://www.instagram/pharmplugrx"><i class="ti-instagram"></i>&nbsp;Instagram</a></a></li>
                                    <li><a class="p-0 dropdown-item text-white hover" href="#" style=""><i class="ti-themify-favicon"></i>&nbsp;Chatbox</a></a></li>
                                  </ul>
                            </li>
                          </ul>
                  </div>
              </div>
            </div>
             </nav>
         </div>

          </nav>

         <!-- NAVIGATION ENDS -->

         <!-- CAROUSEL BEGINS -->
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="assets/img/pharm plug_1.jpg" class="d-block w-100" alt="PharmPlug carousel">
      <div class="carousel-caption d-none d-md-block">
        <h5>About Us</h5>
        <p><a class="btn btn-lg lemonBg darkBlueBgHover" type="button" href="https://pharmplug.com/shop/"><span class="text-white">Buy Now</span></a> start from ₦70</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="assets/img/pharm plug_2.jpg" class="d-block w-100" alt="PharmPlug carousel">
      <div class="carousel-caption d-none d-md-block">
        <h5>About Us</h5>
        <p><a class="btn btn-lg lemonBg darkBlueBgHover" type="button" href="https://pharmplug.com/shop/"><span class="text-white">Buy Now</span></a> start from ₦70</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="assets/img/pharm plug_3.jpg" class="d-block w-100" alt="PharmPlug carousel">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p><a class="btn btn-lg lemonBg darkBlueBgHover" type="button" href="https://pharmplug.com/shop/"><span class="text-white">Buy Now</span></a> start from ₦70</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
         <!-- CAROUSEL ENDS -->

          <!-- PRE ICON LIST SECTION BEGINS -->

          <div class="row ms-5">
            <div class="col-sm-3 px-5 py-3">
                <span><i class="ti-shopping-cart-full lemonText" style="font-size:40px; font-weight:900; position:relative;"></i>&nbsp;FREE SHIPPING<br>
                On orders over ₦18,000</span>
            </div>
            <div class="col-sm-3 px-5 py-3">
               <span><i class="ti-gift lemonText" style="font-size:40px; font-weight:900; position:relative;"></i>&nbsp;SPECIAL GIFT CARD<br>
               The perfect gift idea</span>
            </div>
            <div class="col-sm-3 px-5 py-3">
                <span><i class="ti-check-box lemonText" style="font-size:40px; font-weight:900; position:relative;"></i>&nbsp;RETURN/EXCHANGE<br>
                Free return within 3 days</span>
            </div>
            <div class="col-sm-3 px-5 py-3">
                <span><i class="ti-mobile lemonText" style="font-size:40px; font-weight:900; position:relative;"></i>&nbsp;SUPPORT 24 / 7<br>
                Customer support</span>
            </div>

          </div>
          <!-- PRE ICON LIST SECTION ENDS -->

         <!-- ICON LIST SECTION BEGINS -->
<div class="row m-4">
    <div class="col-md-3 p-5">     
        <img src="assets/img/pharmplug_icon_row1.png" class="d-block" alt="PharmPlug carousel">
        <h5 class="lightBlueText">PharmPlug Special</h5>
        <p class="text-muted small">Special programs and services are available to our member and the public from time to time.</p>
    </div>

    <div class="col-md-3 p-5">
        <img src="assets/img/pharmplug_icon_row2.png" class="d-block" alt="PharmPlug carousel">
        <h5 class="lightBlueText">Instant Discounts</h5>
        <p class="text-muted small">Instant discounts are available on products and prescriptions are available on orders above ₦18,000.</p>
    </div>

    <div class="col-md-3 p-5">
        <img src="assets/img/pharmplug_icon_row3.png" class="d-block" alt="PharmPlug carousel">
        <h5 class="lightBlueText">Free Deliveries</h5>
        <p class="text-muted small">Free deliveries are available on products and prescriptions are available on orders above ₦18,000.</p>
    </div>

    <div class="col-md-3 p-5">
        <img src="assets/img/pharmplug_icon_row4.png" class="d-block" alt="PharmPlug carousel">
        <h5 class="lightBlueText">PharmPlug special</h5>
        <p class="text-muted small">Special programs and services are available to our member and the public from time to time.</p>
    </div>
</div>
  <!-- ICON LIST SECTION ENDS -->

  <!-- 3-COL PRODUCT LIST SECTION BEGINS -->
       <div class="row m-5">
    <div class="col-12 pb-5">
        <div>
        <center><img src="assets/img/pharmplug_product.png" class="d-block" alt="PharmPlug carousel"></center>
    </div>
    <div>
        <center><a href="https://pharmplug.com/shop/"><button class="btn btn-lg text-white lemonBg lightBlueBgHover"><i class="ti-shopping-cart-full"></i>&nbsp;Shop Now</button></a></center>
    </div>
    </div>
        <!-- 3-COL PRODUCT LIST SECTION ENDS -->
<!-- PHOTO AND COLUMN SECTION BEGINS HERE -->
<div class="row mt-5">
    <div class="col-sm-12 pt-4">
        <center>
        <h1 class="darkBlueText">YOUR MEDS, LAB AND A WAITING PHARMACIST</h1>
    </center>
    </div>
    <div class="col-sm-6 pt-5">
      <img src="assets/img/just_smile.jpeg" width="599px" height="400px" class="d-block" alt="PharmPlug flash" title="PharmPlug flash">  
    </div>

    <div class="col-sm-3 pt-5">
      <h4 class="lightBlueText">Book Lab Test</h4>
      <p>It's easy to book a laboratory test. Sample collections are done by trained scientists.</p>
      <a class="btn btn-lg lemonBg lightBlueBgHover text-white" href="https://pharmplug.com/#"><i class="ti-pulse"></i>&nbsp;<small>Book Lab Test</small></a>

      <h4 class="lightBlueText pt-5">Buy Medicines</h4>
      <p>Get NAFDAC-approved medications delivered to you no matter your current location.</p>
      <a class="btn btn-lg lemonBg lightBlueBgHover text-white" href="https://pharmplug.com/shop/"><i class="ti-pulse"></i>&nbsp;<small>Enter Pharmacy</small></a>
    </div>
    <div class="col-sm-3 py-5">
      <h4 class="lightBlueText">Consult an Expert</h4>
      <p>Book the appointment of a doctor or pharmacist without stress from your current location</p>
      <a class="btn btn-lg lemonBg lightBlueBgHover text-white" href="https://pharmplug.com/ask/"><i class="ti-pulse"></i>&nbsp;<small>Consult Expert</small></a>

      <h4 class="lightBlueText pt-5">Product Consultation</h4>
      <p>We will guide you into getting the right prescriptions and medications for your conditions.</p>
      <a class="btn btn-lg lemonBg lightBlueBgHover text-white" href="https://pharmplug.com/ask/"><i class="ti-pulse"></i>&nbsp;<small>Ask an Expert</small></a>
    </div>
</div>

<!-- PHOTO AND COLUMN SECTION ENDS HERE -->

<!-- STORE DEALS SECTION BEGINS HERE -->
<div class="row my-5">
 <div class="col-sm-12">
        <center>
        <h1 class="darkBlueText py-5">STORE DEALS</h1>
    </center>
    </div>
    <div class="col-sm-2">
        <div class="card" style="width: 12rem;">
  <img src="assets/img/catether.png" class="card-img-top" alt="Catether" title="Buy Catether and similar products">
  <div class="card-body">
    <h5 class="card-title darkBlueTextHover">Catether</h5>
    <p class="card-text">Medical consumables <br><span class="lemonText"><strong>Starting from ₦600.00</strong></span></p>
    <a title="Buy Catether and similar products" href="https://pharmplug.com/product-category/medical-consumables/" class="btn lemonBg lightBlueBgHover text-white stretched-link"><i class="ti-shopping-cart-full"></i>&nbsp;Shop Now</a>
  </div>
</div>
    </div>
    <div class="col-sm-2">
       <div class="card" style="width: 12rem;">
  <img src="assets/img/surgica-clothing.jpg" class="card-img-top" alt="Easy-Care Medical Uniforms" title="Buy Easy-Care Medical Uniforms and similar products" height="140px">
  <div class="card-body">
    <h5 class="card-title darkBlueTextHover">Medical Uniforms</h5>
    <p class="card-text">Surgical Clothing<br><span class="lemonText"><strong>Starting from ₦600.00</strong></span></p>
    <a title="Buy Easy-Care Medical Uniforms and similar products" href="https://pharmplug.com/product-category/surgical-clothing/" class="btn lemonBg lightBlueBgHover text-white stretched-link"><i class="ti-shopping-cart-full"></i>&nbsp;Shop Now</a>
  </div>
</div>
    </div>
    <div class="col-sm-2">
        <div class="card" style="width: 12rem;">
  <img src="assets/img/masks.png" class="card-img-top" alt="Surgical Masks" title="Buy Surgical Masks and related products" height="160px">
  <div class="card-body">
    <h5 class="card-title">Surgical Masks</h5>
    <p class="card-text">Surgical Clothing<br><span class="lemonText"><strong>Starting from ₦500.00</strong></span></p>
    <a title="Buy Surgical Masks and related products" href="https://pharmplug.com/product-category/surgical-clothing/" class="btn lemonBg lightBlueBgHover text-white stretched-link"><i class="ti-shopping-cart-full"></i>&nbsp;Shop Now</a>
  </div>
</div>
    </div>
    <div class="col-sm-2">
        <div class="card" style="width: 12rem;">
  <img src="assets/img/supplements.jpg" class="card-img-top" alt="Supplements" title="Buy Supplements and related products" height="160px">
  <div class="card-body">
    <h5 class="card-title">Supplements</h5>
    <p class="card-text">Food Supplements<br><span class="lemonText"><strong>Starting from ₦800.00</strong></span></p>
    <a title="Buy Supplements and related products" href="https://pharmplug.com/product-category/food-supplements/" class="btn lemonBg lightBlueBgHover text-white stretched-link"><i class="ti-shopping-cart-full"></i>&nbsp;Shop Now</a>
  </div>
</div>
    </div>
    <div class="col-sm-2">
        <div class="card" style="width: 12rem;">
  <img src="assets/img/multivitamin.jpg" class="card-img-top" alt="multivitamin" title="Buy multivitamins and related products" height="140px">
  <div class="card-body">
    <h5 class="card-title">Vitamins</h5>
    <p class="card-text">Vitamins/Minerals/Multivitamins<br><span class="lemonText"><strong>Starting from ₦700.00</strong></span></p>
    <a title="Buy multivitamins and related products" href="https://pharmplug.com/product-category/vitamins-minerals-multivitamins/" class="btn lemonBg lightBlueBgHover text-white stretched-link"><i class="ti-shopping-cart-full"></i>&nbsp;Shop Now</a>
  </div>
</div>
    </div>
    <div class="col-sm-2">
        <div class="card" style="width: 12rem;">
  <img src="assets/img/imgr-countdown-477x470.png" class="card-img-top" alt="Medical Equipment" title="Buy Medical Equipment and related supplies" height="160px">
  <div class="card-body">
    <h5 class="card-title">Equipment</h5>
    <p class="card-text">Medical Equipment<br><span class="lemonText"><strong>Starting from ₦3,000.00</strong></span></p>
    <a title="Buy Medical Equipment and related supplies" href="https://pharmplug.com/product-category/medical-equipment/" class="btn lemonBg lightBlueBgHover text-white stretched-link"><i class="ti-shopping-cart-full"></i>&nbsp;Shop Now</a>
  </div>
</div>
    </div>
</div>

<!-- STORE DEALS SECTION ENDS HERE -->
  </div>
  <div class="container-fluid" style="background:url('assets/img/slider-banner-01.png') no-repeat right fixed,linear-gradient(to right, #c2f2ff,#c2f2ff);">
      <div class="row p-5">
         <div class="col-sm-12 py-5">
        <center>
        <h1 class="darkBlueText">ASK THE PHARMACIST</h1>
        <p class="lead">ASK PHARM. JOSY AND CREW</p>
    </center>
    </div> 
    <div class="col-sm-12 pb-5">
        <center>
        <a class="btn btn-lg lemonBg lightBlueBgHover text-white" title="Call Pharmacist" href="tel:+2348148255508" target="_blank" rel="noopener noreferrer"><small><i class="ti-mobile"></i>&nbsp;Call the Pharmacist</small></a>&nbsp;&nbsp;
        <a class="btn btn-lg lemonBg lightBlueBgHover text-white" title="Call Pharmacist" href="https://wa.me/+2348035400457?text=I%20Need%20Mr.%20Josys%20Help" target="_blank" rel="noopener noreferrer"><small><i class="ti-comments-smiley"></i>&nbsp;Message via WhatsApp</small></a>
    </center>
    </div>
      </div>
  </div>
  <div class="container-fluid shadow my-2 bg-body rounded">
      <div class="row p-3">
          <div class="col-sm-2">
            <center>
              <img class="border" src="assets/img/dot3_doctors_reward.jpg" alt="Doctors reward" title="Doctors reward program">
          </center>
          </div>
          <div class="col-sm-2">
            <center>
              <img class="border" src="assets/img/drug_free_project.jpg" alt="Drug free project" title="Drug free project">
          </center>
          </div>
          <div class="col-sm-2">
            <center>
              <img class="border" src="assets/img/drug_interaction.jpg" alt="Drug interaction program" title="Drug interaction program">
          </center>
          </div>
          <div class="col-sm-2">
            <center>
              <img class="border" src="assets/img/health_fitness.jpg" alt="Health fitness program" title="Health fitness program">
          </center>
          </div>
          <div class="col-sm-2">
            <center>
              <img class="border" src="assets/img/indigent_care.jpg" alt="Indigent care program" title="Indigent care program">
          </center>
          </div>
          <div class="col-sm-2">
            <center>
              <img class="border" src="assets/img/medication_therapy_management.jpg" alt="Medication therapy management" title="Medication therapy management">
          </center>
          </div>
      </div>
  </div>


        <!-- PRE-FOOTER -->
     <div class="container-fluid">
        <div class="row p-5">
            <div class="col-md-12">
                <p class="text-muted small"><strong>Nigeria’s One-Stop Online Pharmacy – PharmPlug</strong><br>We’ve got Nigeria Covered!
We now deliver in 1000+ cities and towns across the country. We thereby cover every nook and corner of the country! </p>
            </div>
            <div class="col-md-12">
                <p class="text-muted small"><strong>Say Goodbye to All Your Healthcare Worries With PharmPlug!</strong><br>PharmPlug is here to help you take it easy! We are amongst one of Nigeria’s top online pharmacy and medical care platforms. It enables you to order pharmaceutical and healthcare products online by connecting you to registered retail pharmacies and get them delivered to your home. We are an online pharmacy store, making your purchase easy, simple, and affordable! </p>
            </div>

             <div class="col-md-12">
                <p class="text-muted small"><strong>How Are We Making Lives Simpler With Our Online Medical Store?</strong><br>Our doorstep delivery service is available in Nigeria across the major cities like Enugu, Lagos, Rivers, Anambra, Abuja, Imo, Edo, etc. Our online pharmacy store also allows you to choose from OTC products and medical equipment. PharmPlug is a one-stop online pharamceutical platform where you can also book diagnostic tests including blood tests, full-body checkups, and other preventive health check-ups at an affordable cost, right from the comfort of your home. We have partnered with trusted & certified labs that arrange for a sample pick-up from the convenience of your home. They also provide you with timely reports. </p>
            </div>

              <div class="col-md-12">
                <p class="text-muted small"><strong>Why Are We The Most Preferred Online Pharmacy?</strong><br>Lucrative offers on our platform allow you to make payment online and via various payment wallets at a discounted price. Alternatively, you can also choose to pay cash on delivery as we deliver the products at your doorstep. We cater to all your pharmaceutical needs and also make ordering medicines online a hassle-free experience for you. We connect you only with registered retail pharmacies & certified diagnostic labs. We ensure that healthcare is affordable to all and make the process of ordering online simple.</p>
            </div>

             <div class="col-md-12">
                <p class="text-muted small"><strong>Sit Back & Relax While You Get Your Essentials Delivered Every Month!</strong><br>It’s tough to remember to refill every month, especially in the case of chronic and recurring diseases. PharmPlug’s subscription service not only ensures that you are reminded of your refills but also makes sure that you are never out on your medical essentials. You will get a reminder every month and your order will be delivered at your convenience!</p>
            </div>

             <div class="col-md-12">
                <p class="text-muted small"><strong>Access medical and health information</strong><br>PharmPlug delivers reliable and accurate pharmaceutical information that has been carefully written, vetted and validated by our health experts. Our specialists curate high-quality and most reliable literature about medicines, illnesses, lab tests, and over the counter health products.</p>
            </div>
        </div>
    </div>
</div>
    <!-- PRE FOOTER ENDS HERE -->
    <!-- MAIN FOOTER BEGINS HERE -->
    <div class="container-fluid">
        <div class="row p-5" style="background-image:url('assets/img/particles.jpg'); background-attachment:fixed;background-size:cover; background-repeat:no-repeat;">
            <div class="col-sm-4">
               <!--  <div class="d-none d-md-block"> <a class="navbar-brand" href="#"><img src="assets/img/pharmplug_logo.jpeg" alt="PharmPlug" title="PharmPlug" width="150px" height="60px" class="d-inline-block align-text-bottom"></a></div> --><div> <p class=""><big><strong>| Who We Are</strong></big></p></div>
                <p class="text-muted">PharmPlug is a subsidiary of Inland Medical Company Ltd.
We are amongst one of Nigeria’s top online pharmacy and medical care platforms that enables you to order pharmaceutical and healthcare products online by connecting you to registered retail pharmacies and get them delivered to your home. We are an online pharmacy store, making your purchase easy, simple, and affordable!<br>
<a class="btn btn-outline-primary" href="https://pharmplug.com/about/">Read More...</a></p>
            </div>     
             <div class="col-sm-3">
                <div> <p class="ps-5"><big><strong>| Programs</strong></big></p></div>
                <ul class="list-group-flush">
                    <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/contact/" target="_blank" rel="noopener">Pharmplug Special</a></li>
                     <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/shop/" target="_blank" rel="noopener">Free Deliveries</a></li>
                  <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/contact/" target="_blank" rel="noopener">Free Lab Tests</a></li>
                   <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/shop/" target="_blank" rel="noopener">Instant Discounts</a></li>
                    <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/order-tracking/" target="_blank" rel="noopener">Delivery Tracking</a></li>
                </ul>
            </div> 

             <div class="col-sm-3">
                <div> <p class="ps-5"><big><strong>| Product Links</strong></big></p></div>
                <ul class="list-group-flush">
                <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/my-account/orders/" target="_blank" rel="noopener">Orders</a></li>
                 <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/my-account/wallet/" target="_blank" rel="noopener">Wallet</a></li>
                  <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/wishlist/" target="_blank" rel="noopener">wishlist</a></li>
                   <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/checkout/" target="_blank" rel="noopener">Checkout</a></li>
                    <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/cart/" target="_blank" rel="noopener">Cart</a></li>
                    <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/order-tracking/" target="_blank" rel="noopener">Order Tracking</a></li>
                </ul>
            </div> 

            <div class="col-sm-2">
                <div> <p class="ps-5"><big><strong>| Resources</strong></big></p></div>
                <ul class="list-group-flush">
               <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/blog/" target="_blank" rel="noopener">Blog</a></li>
                  <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/contact/" target="_blank" rel="noopener">Contact</a></li>
                  <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/faq/" target="_blank" rel="noopener">FAQs</a></li>
                   <li class="list-group-item text-muted" style="background:transparent;"><a class="text-muted" href="https://pharmplug.com/contact/" target="_blank" rel="noopener">Lab Tests</a></li>
                   
                </ul>
            </div> 

        </div>
        <!-- MAIN FOOTER ENDS HERE -->
<!-- POST FOOTER BEGINS HERE-->
        <footer class="row" style="background-color:#8cd50a !important; height:auto;">
            <div class="col-sm-3 pt-4">
                <center>
                <a href="https://www.facebook.com/pharmplugrx" target="_blank" rel="noopener"><img class="" src="assets/img/social/facebook.png" alt="PharmPlug on Facebook" title="PharmPlug on Facebook" width="24px" height="24px"></a>&nbsp;&nbsp;
                <a href="https://www.twitter.com/pharmplugrx" target="_blank" rel="noopener"><img class="" src="assets/img/social/twitter.png" alt="PharmPlug on Twitter" title="PharmPlug on Twitter" width="24px" height="24px"></a>&nbsp;&nbsp;
                <a href="https://www.instagram.com/pharmplugrx" target="_blank" rel="noopener"><img class="" src="assets/img/social/instagram.png" alt="PharmPlug on Instagram" title="PharmPlug on Instagram" width="24px" height="24px"></a>&nbsp;&nbsp;
                 <a href="https://www.linkedin.com/company/pharmplugrx" target="_blank" rel="noopener"><img class="" src="assets/img/social/linkedin.png" alt="PharmPlug on Linkedin" title="PharmPlug on Linkedin" width="24px" height="24px"></a>
            </center>
            </div>
            <div class="col-sm-6 pt-4">
                <center>
                 <a class="text-white" href="https://pharmplug.com/ask/" target="_blank" rel="noopener">Ask&nbsp;|</a>
                <a class="text-white" href="https://pharmplug.com/about/" target="_blank" rel="noopener">About&nbsp;|</a>&nbsp;
                <a class="text-white" href="https://pharmplug.com/blog/" target="_blank" rel="noopener">Blog&nbsp;|</a>&nbsp;
                 <a class="text-white" href="https://pharmplug.com/faq/" target="_blank" rel="noopener">FAQ&nbsp;|</a>&nbsp;
                 <a class="text-white" href="https://pharmplug.com/privacy/" target="_blank" rel="noopener">Privacy&nbsp;|</a>&nbsp;
                <a class="text-white" href="https://pharmplug.com/refund/" target="_blank" rel="noopener">Refunds&nbsp;|</a>&nbsp;
                <a class="text-white" href="https://pharmplug.com/terms/" target="_blank" rel="noopener">Terms&nbsp;|</a>&nbsp;
                 <a class="text-white" href="https://pharmplug.com/contact/" target="_blank" rel="noopener">Contact</a>&nbsp;
             </center>
            </div>
           
            <div class="col-sm-3 pt-3">
                 <center>
                <img src="assets/img/shop-img24-2.png" width="170px" height="50px">
            </center>
            </div>
            <div class="col-sm-12" style="overflow:hidden;">
                <a title="Back to Top" class="text-white aquaBgHover" href="#top" style="position:relative;bottom:5%;left:96%; font-weight: bolder; font-size:large; z-index:9; scroll-behavior: smooth; border:2px solid #fff;padding:0.2%; text-align: center;"><i class="ti-arrow-up"></i></a>
                <!-- WHATSAPP FLOATING IMAGE -->
               <a href="https://wa.me/+2348035400457?text=I%20Need%20Mr.%20Josys%20Help" class="float">
               <img class="my-float" src="assets/img/social/whatsapp.png" title="Chat via WhatsApp" alt="Chat via WhatsApp" width="60px" height="60px">
           </a>
           <!-- WHATSAPP FLOATING IMAGE -->
            </div>
        </footer>
        <!-- POST FOOTER ENDS HERE -->
</div>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  
</body>
</html>