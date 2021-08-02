<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<!-- Owl carousel CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <?php
      // Require functions
      require 'functions.php';
    ?>
</head>
<body>
	
    <!-- Header Start -->
    <header id="header">
        <div class="strip d-flex justify-content-between align-items-center px-4 py-1 bg-light">
            <p class="font-raleway font-size-20 text-black-50 m-0">The Mall 54000, Lahore, Pakistan +92 300-1234567 </p>
            <div class="font-raleway font-size-14">
                <a href="" class="px-3 border-start border-end text-dark">Login</a>
                <a href="" class="px-3 border-end text-dark">Wishlist(0)</a>
            </div>
        </div>

        <!-- Primary Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">PhoneKart</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                  </li>
                </ul>
                <form action="" class="font-size-14 font-rale">
                    <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 text-white"><i class="fas fa-shopping-cart ms-2"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')) ?></span>
                    </a>
                </form>
              </div>
            </div>
          </nav>
          <!-- Primary Navbar End -->
    </header>
    <!-- Header End -->