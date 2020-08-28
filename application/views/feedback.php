<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a>
                        <span>Review</span>
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
                Trust, Satisfaction and Happiness matter to me. If you have some time then please give me a feedback so that I can develop myself and provide you better service. <br>
            </div>
            <div class="col-lg-6 col-md-6 text-center">
                <h5 style="display:none;color: #ffffff; text-align: center; padding: 10px 10px 10px 10px; border: 1px solid #000000; margin-bottom: 10px; background-color: #000000;" id="writeReviewsMsg"></h5>
                    <form method="POST" id="writeReviewsForm">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="fullname" placeholder="Full Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="phoneno" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="address" placeholder="Address">
                                </div>
                            </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" id="desc" placeholder="Description"></textarea>
                                </div>
                            <div class="col-lg-12 text-center" >
                                <button type="button" class="btn btn-primary" onclick="writeReviews();">Submit</button>
                            </div>
                    <input type="hidden" id="csrfName" value="<?php echo $this->security->get_csrf_token_name(); ?>">
                    <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <input type="hidden" value="<?php echo base_url(); ?>feedback_post" id="reviewUrl">
                    </form>
            </div>
        </div>
    </div>
</section>


<!-- Product Section End -->
