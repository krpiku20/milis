<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=UA-175475729-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-175475729-1');
    </script>
    <meta charset="UTF-8">
    <meta name="description" content="Mili's is an online exclusive platform where it is willing to offer you the finest of Indian Handloom Sarees. It aims to cater the best and provide the best so that customers need not to worry about the quality and price.">
    <meta name="keywords" content="Mili's, traditional mili, handloom, boutique, facebook">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv='content-language' content='en-in'>
    <title>Mili's | Boutique</title>
    <link rel="icon" href="https://traditionalmili.com/assets/img/milifav.png" type="image/png" sizes="96x96">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="https://traditionalmili.com/assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="https://traditionalmili.com/assets/css/zoom/magnific-popup.css" type="text/css">
    <!-- <link rel="stylesheet" href="https://traditionalmili.com/assets/css/owl.carousel.min.css" type="text/css"> -->
    <link rel="stylesheet" href="https://traditionalmili.com/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="https://traditionalmili.com/assets/css/style.css" type="text/css">
    <!-- Zoom Effects -->
    <link rel="stylesheet" href="https://traditionalmili.com/assets/css/zoom/normalize.css" />
    <link rel="stylesheet" href="https://traditionalmili.com/assets/css/zoom/demo.css" />
    <link type="text/css" rel="stylesheet" media="all" href="https://traditionalmili.com/assets/css/zoom/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="https://traditionalmili.com/assets/css/zoom/xzoom.css" media="all" />
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f3faa62c8e5ad00121d28bd&product=sop' async='async'></script>
</head>
<!--  oncontextmenu="return false;"  -->
<body oncontextmenu="return false;">
    <noscript>JavaScript is off. Please enable to view full site.</noscript>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=320650182701940&autoLogAppEvents=1" nonce="dmsi7aIC"></script> 

    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <?php  if($this->uri->segment(1) == ''){  ?>
            <li><span class="icon_search search-switch"></span></li>
            <?php  } ?>
            <li class="wishlistTip">
                <a onclick="wishListCheck();" href="<?php echo base_url(); ?>wishlist_fetch"><span class="icon_heart_alt"></span>
                    <div class="tip">0</div>
                </a>
            </li>
            <li>
                <a data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <div class="tip">0</div>
                </a>
            </li>
        </ul>
        <div class="offcanvas__logo">
            <a href="<?php echo base_url();  ?>"><img class = "lazy" src="https://traditionalmili.com/assets/img/download.png" height="110" width="220" alt="mili's"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <!-- <div class="offcanvas__auth">
            Total Visits:&nbsp;<span id="visitCount" >0</span>
        </div> -->
    </div>
    <!-- Offcanvas Menu End -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="<?php echo base_url();  ?>"><img class = "lazy" src="https://traditionalmili.com/assets/img/download.png" height="50" width="120" alt="mili's">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7" style="text-align: center;">
                    <nav class="header__menu">
                        <ul>
                            <li <?php if($this->uri->segment(1) == '') echo 'class="active"';  ?>><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li <?php if($this->uri->segment(1) == 'about_milis') echo 'class="active"';  ?>><a href="<?php echo base_url(); ?>about_milis">About Mili's</a></li>
                            <li <?php if($this->uri->segment(1) == 'feed') echo 'class="active"';  ?>><a href="<?php echo base_url(); ?>feed">Feed</a></li>
                            <li><a href="https://traditionalmili.in" target="_blank">Blog</a></li>
                            <li <?php if($this->uri->segment(1) == 'contact') echo 'class="active"';  ?>><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                            <li <?php if($this->uri->segment(1) == 'customer_reviews') echo 'class="active"';  ?>><a href="<?php echo base_url(); ?>customer_reviews">Customers' Reviews</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <b> Total Visits:&nbsp;<span id="visitCount" >
                                <a style="display: none" id="visitLoader">
                                    <img style="display: inline-block; margin-bottom: 5px" class = "lazy" src="https://traditionalmili.com/assets/img/3.gif" height="20" width="20" alt="mili's">
                                </a>
                            </span></b>
                        </div>
                        <ul class="header__right__widget">
                            <?php  if($this->uri->segment(1) == ''){  ?>
                            <li><span class="icon_search search-switch"></span></li>
                            <?php  } ?>
                            <li class="wishlistTip">
                                <a onclick="wishListCheck();" href="<?php echo base_url(); ?>wishlist_fetch"><span class="icon_heart_alt"></span>
                                  <div class="tip">0</div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <div class="tip">0</div>
                                </a>
                            </li>
                            <form>
                                <input type="hidden" id="checkCart" value="<?php echo base_url();?>check_cart">
                                <input type="hidden" id="wishListFetchUrl" value="<?php echo base_url();?>wishlist_fetch">
                                <input type="hidden" value="<?php echo base_url(); ?>visit" id="visitUrl">
                                <input type="hidden" id="csrfName" value="<?php echo $this->security->get_csrf_token_name(); ?>">
                                <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <div class="container p-0">
        <div class="row">
            <div class="col-lg-12 text-center alert" id="wishAlert" style="display: none;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                You already added this product in <a href="<?php echo base_url(); ?>wishlist_fetch" style="color: #fff; font-weight: bold;">Wishlist</a>.
            </div>
        </div>
    </div>
    <!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" method="POST">
            <input autocomplete="off" onchange="searchSaree();" type="text" id="search-input" placeholder="e.g. Kanchipuram">
            <i class="fa fa-search" aria-hidden="true" style="cursor: pointer;"></i>
            <div class="formDisplay"></div>
            <input type="hidden" value="<?php echo base_url(); ?>filter_tag" id="filterTag">
        </form>
    </div>
</div>
<!-- Search End -->
    <!-- Header Section End -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Shopping Cart</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        This section is under development.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>