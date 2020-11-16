<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Olshop Kampus</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{url('system')}}/css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{url('system')}}/css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="{{url('system')}}/css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{url('system')}}/css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{url('system')}}/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{url('system')}}/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
  <body>
    <!-- HEADER -->
    <header>
      <!-- TOP HEADER -->
      <div id="top-header">
        <div class="container">
          <ul class="header-links pull-left">
            <li><a href="#"><i class="fa fa-phone"></i> +62-89524526934</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> olshopkampus@gmail.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> ketapang, kalimantan Barat, Indonesia</a></li>
          </ul>
          <ul class="header-links pull-right">
            
            <li><a href="login"><i class="fa fa-user-o"></i> Login </a></li>
          </ul>
        </div>
      </div>
      <!-- /TOP HEADER -->

      <!-- MAIN HEADER -->
      <div id="header">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">

            <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo">
                  <img src="{{url('system')}}/img/olshopkampus.jpg" width="100px" height="100px">
                </a>
              </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
              <diw class="row">
              <div class="header-search">
                <form class="col-md-12 row form-group">
                  <select class="input-select">
                    <option value="0">All Categories</option>
                    <option value="1">Category 01</option>
                    <option value="1">Category 02</option>
                  </select>
                  <input class="input" placeholder="Search here">
                  <button class="search-btn">Search</button>
                </form>
              </div>
              </diw>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3">
              <div class="header-ctn">
                <!-- Wishlist -->
                <div>
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                    <span>Your Wishlist</span>
                    <div class="qty">2</div>
                  </a>
                </div>
                <!-- /Wishlist -->

                <!-- Cart -->
                <div class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Your Cart</span>
                    <div class="qty">3</div>
                  </a>
                  <div class="cart-dropdown">
                    <div class="cart-list">
                      <div class="product-widget">
                        <div class="product-img">
                          <img src="{{url('system')}}/img/product01.png" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#">product name goes here</a></h3>
                          <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>

                      <div class="product-widget">
                        <div class="product-img">
                          <img src="{{url('system')}}/img/product02.png" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#">product name goes here</a></h3>
                          <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>
                    </div>
                    <div class="cart-summary">
                      <small>3 Item(s) selected</small>
                      <h5>SUBTOTAL: $2940.00</h5>
                    </div>
                    <div class="cart-btns">
                      <a href="#">View Cart</a>
                      <a href="checkout">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- /Cart -->

                <!-- Menu Toogle -->
                <div class="menu-toggle">
                  <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                  </a>
                </div>
                <!-- /Menu Toogle -->
              </div>
            </div>
            <!-- /ACCOUNT -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
      <!-- container -->
      <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
          <!-- NAV -->
          <ul class="section-tab-nav tab-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Hot Deals</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Cameras</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>
          <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
      </div>
      <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
          <div class="row">
               <div class="main-start-box">
                  <div class="container">
                     <div class="buyer-box clearfix">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                           <div class="left-buyer">
                              <img class="img-responsive" src="{{url('system')}}/img/product06.png" width="300" height="300" ml-5 />
                           </div>
                        </div>
                                  <h3>Baju Bekas{{$produk->nama}}</h3>
                                  <hr>
                                  <p>
                                    Rp.50000{{($produk->harga)}} |
                                    Stok : 100{{$produk->stok}} |
                                    Berat : 1 {{$produk->berat}} gr
                                  </p>
                                  <p>
                                    {!! nl2br($produk->deskripsi) !!}
                                  </p>
                              <a class="primary-btn cta-btn" href="main">Beli Sekarang</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    


      <!-- bottom footer -->
      <div id="bottom-footer" class="section">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12 text-center">
              <ul class="footer-payments">
                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
              </ul>
              <span class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </span>
            </div>
          </div>
            <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{url('system')}}/js/jquery.min.js"></script>
    <script src="{{url('system')}}/js/bootstrap.min.js"></script>
    <script src="{{url('system')}}/js/slick.min.js"></script>
    <script src="{{url('system')}}/js/nouislider.min.js"></script>
    <script src="{{url('system')}}/js/jquery.zoom.min.js"></script>
    <script src="{{url('system')}}/js/main.js"></script>

  </body>
</html>
