<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h4 style="float: left;">Wishlist </h4>
                    <h5 style="float: right;"><strong><?php if(empty($cartdetails)) echo '0';else echo count($cartdetails); ?></strong>
                    </h5>
                </div>
            </div>
        </div>
        <?php if(!empty($cartdetails)){ $i = 0; ?>
            <?php foreach($cartdetails as $cart){ $i++;?>
                <div class="row text-center removeInfo_<?php echo $cart['id'];  ?>" style="text-align: center;">
                    <div class="col-lg-2 col-md-2">
                        <?php echo $i; ?>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <img class = "lazy" height="100" width="100" src="<?php echo $cart['product_image']; ?>">
                    </div>
                    <div class="col-lg-2 col-md-2" style="display: inline;">
                        <?php echo $cart['name']; ?>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <?php echo date("jS F Y",strtotime($cart['date'])); ?>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <a href="<?php echo base_url();  ?>product_details?product=<?php echo $cart['id'];  ?>">View</a>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <a href="javascript:void(0);" id="removeWishbtn" style="color: red; text-align: center;" onclick="removeCart('<?php echo $cart['rowid'];  ?>','<?php echo $cart['id'];  ?>');">Remove</a>
                    </div>
                    <form>
                        <input type="hidden" id="removeCart" value="<?php echo base_url();?>remove_cart">
                        <input type="hidden" id="csrfName" value="<?php echo $this->security->get_csrf_token_name(); ?>">
                        <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    </form>
                </div>
                <div class="col-lg-12 text-center" id="loader_<?php echo $cart['id'];  ?>" style="display: none; text-align: center;">
                    <img class = "lazy" src="<?php echo base_url();  ?>assets/img/loadinfo.net.gif">
                </div>
                <hr>
            <?php } ?>
        <?php }else{ ?>

            <div class="col-lg-12 col-md-12 text-center" style="text-align: center;">
                <div class="section-title">
                    <h6>No data in Wishlist</h6>
                </div>
            </div>
 
        <?php  } ?>
