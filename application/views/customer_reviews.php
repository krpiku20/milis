<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a>
                        <span>Customers' Reviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h4>Facebook</h4>
                </div>
                <?php foreach($customerReviews as $custRev){  ?>
                    <h5><?php echo $custRev['review_text']; ?></h5>
                    <p><?php echo date("jS F Y",strtotime($custRev['created_time']->format('Y-m-d')));  ?>
                    </p>
                    <hr>
                <?php } ?>
            </div>
            <!-- <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h4>Website</h4>
                </div>
                <?php foreach($customerReviews as $custRev){  ?>
                    <h5><?php echo $custRev['review_text']; ?></h5>
                    <p><?php echo date("jS F Y",strtotime($custRev['created_time']->format('Y-m-d')));  ?>
                    </p>
                    <hr>
                <?php } ?>
            </div> -->
        </div>
<!--         <?php foreach($customerReviews as $custRev){  ?>
        <div class="row">
            <div class="col-lg-12 col-md-4">
                <h5><?php echo $custRev['review_text']; ?></h5>
                <p><?php echo date("jS F Y",strtotime($custRev['created_time']->format('Y-m-d')));  ?>
                </p>
                <hr>
            </div>
        </div>
        <?php } ?> -->
    </div>
</section>

<!-- Product Section End -->
