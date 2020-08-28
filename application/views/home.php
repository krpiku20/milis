<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Discount Section Begin -->
<div class="col-lg-12 text-center alert covid">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    Being committed to serve my customers in this <b>COVID-19</b> situation, Mili's is constantly adapting to the frequent changes so that my customers can continue to enjoy the service. STAY SAFE, STAY HEALTHY. 
</div>
<img class = "lazy" src="https://traditionalmili.com/assets/img/cover.png" id="banners">
<section class="discount popup-overlay">
    <div class="container popup-content">
        <div class="row">
            <!-- <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img class="mySlides" src="https://traditionalmili.com/assets/img/1.jpg" style="width:100%">
                    <img class="mySlides" src="https://traditionalmili.com/assets/img/2.jpg" style="width:100%">
                    <img class="mySlides" src="https://traditionalmili.com/assets/img/3.jpg" style="width:100%">
                </div>
            </div> -->
            <div class="col-lg-12 p-0">
                <span style="color: #f44336;position: absolute;top: 15px;right: 30px;font-size: 14px;" class="closebtn" onclick="this.parentElement.style.display='none';">CLOSE</span>
                <!-- <span style="color: red;" class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> -->
                <div class="discount__text" style="background-color: #f4f4f4">
                    <div class="discount__text__title">
                        <span>OFFER</span>
                        <h2>August 2020</h2>
                        <h5><span>Sale</span> 10%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                    </div>
                    <a onclick="gallery();" style="cursor:pointer;">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->
<!-- Product Section Begin -->
<section class="product spad">
    <span id="gallery"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <ul class="filter__controls">
                    <li id="filterList" class="active"><a onclick="displayData('');"><b>All</b></a></li>
                    <?php foreach($filterTag as $filter){   ?>
                        <li id="filterList"><a onclick="displayData('<?php echo $filter->name ?>');"><?php echo ucfirst($filter->name) ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-5 col-md-5 text-center">
                <div class="section-title">
                    <h4 style="float: left;">Gallery</h4>
                </div>
            </div>
            <!-- <div class="col-lg-5 col-md-5 text-center">
                <a href="javascript:void(0);" onclick="previous();" id="previous" class="arrow" style="float: left; display: none;">Previous</a>
            </div> -->
            <div class="col-lg-2 col-md-2 text-center">
                <img class = "lazy" src="https://traditionalmili.com/assets/img/loadinfo.net.gif" id="loader" style="display: none; margin-top: 0px;">
            </div>
            <div class="col-lg-5 col-md-5 text-center">
                <a href="javascript:void(0);" onclick="next();" class="arrow" style="float: right">NEXT</a>
            </div>
            <div class="col-lg-12 text-center">&nbsp;</div>  
        </div>
        <form>
            <input type="hidden" id="filterWrite" value="">
            <input type="hidden" value="<?php echo base_url(); ?>display_data" id="displayDataUrl">
            <input type="hidden" id="csrfName" value="<?php echo $this->security->get_csrf_token_name(); ?>">
            <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
        </form>
        <div class="row property__gallery">
        </div>
        <div class="col-lg-12 text-center" >
            <a id="loadHomeButton" style="cursor: pointer; display: none;" class="primary-btn load-btn">
            </a>
        </div>
    </div>
</section>
<!-- Product Section End -->
<div id="cookieConsent">
    <div id="closeCookieConsent">x</div>
    We use cookies 🍪 and location to ensure you get the best experience on our website. Read our <a href="<?php echo base_url();  ?>privacy_policy" target="_blank">Privacy Policy</a> and <a href="<?php echo base_url();  ?>terms_conditions" target="_blank">Terms and Conditions</a>. <a class="cookieConsentOK">Accept</a>
</div>
