<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a>
                        <span>Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<!-- Product Section Begin -->
<section class="product spad wishListUpdateDisplay">
    <div class="container">
        <div id="wishListUpdateDisplay">
            <div class="col-lg-12 text-center" id="loadersss" style="display: none; text-align: center;">
                <img class = "lazy" src="<?php echo base_url();  ?>assets/img/loadinfo.net.gif">
            </div>
        </div>
        <input type="hidden" id="wishListUpdateUrl" value="<?php echo base_url();?>wishlist_update">
        <input type="hidden" id="csrfName" value="<?php echo $this->security->get_csrf_token_name(); ?>">
        <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
    </div>
</section>

<!-- Product Section End -->
