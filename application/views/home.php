<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Discount Section Begin -->
<img class = "lazy" src="https://traditionalmili.com/assets/img/cover.png" height="auto" width="1345" id="banners" alt="Mili's Cover">
<br>
<div style="margin-top:10px;" class="sharethis-inline-share-buttons"></div>
<br>
<!-- <div class="col-lg-12 text-center alert covid">
    Being committed to serve my customers in this <b>COVID-19</b> situation, Mili's is constantly adapting to the frequent changes so that my customers can continue to enjoy the service. STAY SAFE, STAY HEALTHY. <br>
    <span class="closebtn"  style="text-align: center;" onclick="this.parentElement.style.display='none';">Close</span>
</div> -->
<!-- <section class="discount popup-overlay">
    <div class="container popup-content">
        <div class="row">
            <div class="col-lg-12 p-0">
                <span style="color: #f44336;position: absolute;top: 15px;right: 30px;font-size: 14px;" class="closebtn" onclick="this.parentElement.style.display='none';">CLOSE</span>
                <div class="discount__text" style="background:url('https://traditionalmili.com/assets/img/offer_cover.png') no-repeat">
                    <div class="discount__text__title">
                        <span>OFFER</span>
                        <h2>August 2020</h2>
                        <h5><span>Sale</span> 10%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                    </div>
                    <a style="color: #fff;" onclick="gallery();" style="cursor:pointer;">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Discount Section End -->
<!-- Product Section Begin -->
<section class="product spad">
    <span id="gallery"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <ul class="filter__controls">
                    <li id="filterList" class="active"><a style="color: #000 !important;" onclick="displayData('');"><b>All</b></a></li>
                    <?php foreach($filterTag as $filter){   ?>
                        <li id="filterList"><a style="color: #000 !important;" onclick="displayData('<?php echo $filter->name ?>');"><?php echo ucfirst($filter->name) ?></a></li>
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
                <img class = "lazy" src="https://traditionalmili.com/assets/img/loadinfo.net.gif" height="64" width="64" id="loader" style="display: none; margin-top: 0px;">
            </div>
            <div class="col-lg-5 col-md-5 text-center">
                <a href="javascript:void(0);" onclick="next();" class="arrow" style="float: right"><b>NEXT</b></a>
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
<div class="cookie-disclaimer" style="text-align: center;">

    Cookies 🍪 and Location are used on my website. Read my <a href="https://www.cookiepolicygenerator.com/live.php?token=SjvKmu8DAeW5rsX4RSny1GhTaqxMxLIK" target="_blank" rel="noreferrer">Cookie Policies</a>.    <br>
        <button class="btn btn-success" style="cursor: pointer; color: #FFF;" onclick="this.parentElement.style.display='none';">Accept</button>
</div>
