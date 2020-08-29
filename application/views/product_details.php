<?php  defined('BASEPATH') OR exit('No direct script access allowed');

?>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo base_url();  ?>"><i class="fa fa-home"></i> Home</a>
                        <a style="text-transform: uppercase;"><?php echo str_replace(str_split('\\/:*?"<>|#_'), ' ', $productView['message_tags'][0]['name']);?></a>
                        <span>Pure Handloom</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider">
                                <img class="product__big__img xzoom5" id="xzoom-magnific" src="<?php echo $productView['full_picture'] ?>" alt="" xoriginal="<?php echo $productView['full_picture'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3><?php echo str_replace(str_split('\\/:*?"<>|#_'), ' ', $productView['message_tags'][0]['name']);?> <span><b> Mili's - An Online Boutique by Mili</b></span></h3>
                        <div class="rating">
                            <span><b>Rating</b>
                                <span id="avgReviewCount">
                                    <?php 
                                    if(empty($avgReviews)) {
                                        echo '0';
                                    }
                                    else{
                                        echo round($avgReviews,1);
                                    }  
                                    ?> 
                                </span>
                            / 5 | <b>Reviews</b>&nbsp;<span id="reviewCount1"><?php echo $totReviews;?></span> |  
                            <b>Likes</b>&nbsp;<span id="likeCount"><?php echo $fetchLikes;  ?></span>
                            </span>
                        </div>
                        <p><?php echo $productView['message'];?></p>
                        <div class="product__details__button">
                           <?php if(count($fetchLikesDetails) > 0){    ?>
                                <a id="likeButton" onclick="productLike('<?php echo $productView['id'];  ?>',1);"  class="cart-btn" style="background-color: #3B5998; display: none;cursor: pointer;"><i class="fa fa-thumbs-o-up"></i>
                                </a>
                                <a id="dislikeButton" onclick="productLike('<?php echo $productView['id'];  ?>',0);"  class="cart-btn" style="background-color: #ca1515;cursor: pointer;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                </a>
                           <?php  }else{ ?>
                                <a id="likeButton" onclick="productLike('<?php echo $productView['id'];  ?>',1);"  class="cart-btn" style="background-color: #3B5998; cursor: pointer;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                </a>
                                <a id="dislikeButton" onclick="productLike('<?php echo $productView['id'];  ?>',0);"  class="cart-btn" style="background-color: #ca1515; display: none;cursor: pointer;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                </a>
                           <?php }  ?>
                           <a onclick="scrollBottom();" class="cart-btn" style="background-color: #3B5998;cursor: pointer;"><i class="fa fa-comment"></i></a>
                           <a onclick="wishList('<?php echo $productView['id'];  ?>','<?php echo str_replace(str_split('\\/:*?"<>|#_'), ' ', $productView['message_tags'][0]['name']);?>','<?php echo $productView['full_picture'];  ?>');" class="cart-btn" style="background-color: black; color: #fff; cursor: pointer;"><i class="fa fa-heart-o"></i></a>
                        </div>
                        <div class="product__details__button">
                            <a href="https://wa.me/+918250813064?text=https://www.facebook.com/100722371551069/posts/<?php echo str_replace('100722371551069_', '', $productView['id']); ?>/ Please tell me the price??" target="_blank" class="cart-btn1"><i class="fa fa-whatsapp"></i> Request Price</a>
                            <a target="_blank" style="background-color: #3B5998;" href="https://www.facebook.com/100722371551069/posts/<?php echo str_replace('100722371551069_', '', $productView['id']); ?>/" class="cart-btn1"><i class="fa fa-facebook"></i> View</a>
                            <form>
                                <input type="hidden" id="addWishList" value="<?php echo base_url();  ?>add_wishlist">
                                <input type="hidden" id="csrfName" value="<?php echo $this->security->get_csrf_token_name(); ?>">
                                <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center" style="text-align: center;">
                    <div class="related__title">
                        <h5>RELATED SAREES</h5>
                    </div>
                </div>
                <?php foreach($productView['attachments']['data'][0]['subattachments']['data'] as $fb){  ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="product__item">
                        <div class="product__item__pic set-bg">
                            <div class="label new"><?php echo str_replace(str_split('\\/:*?"<>|#_'), ' ', $productView['message_tags'][0]['name']);?></div>
                            <img class = "lazy" src="<?php echo $fb['media']['image']['src'];  ?>" xoriginal="<?php echo $fb['media']['image']['src'];  ?>" height="465" width="263">
                            <ul class="product__hover">
                                <li>
                                    <a target="_blank" href="<?php echo $fb['media']['image']['src'];  ?>">
                                        <span class="arrow_expand"></span>
                                    </a>
                                </li>
                                <li><a target="_blank" href="<?php echo $fb['target']['url'];  ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://wa.me/+918250813064?text=<?php echo $fb['target']['url'];  ?>">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php  } ?>
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a onclick="fetchReviews('<?php echo $productView['id'] ?>');" class="nav-link active" id="tab" data-toggle="tab" href="#tabs-1" role="tab">Reviews (<span id="reviewCount2"><?php echo $totReviews;  ?></span>)</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h5 id="success" style="display:none;color: #ffffff; text-align: center; padding: 10px 10px 10px 10px; border: 1px solid #000000; background-color: #000000;"><br></h5>
                    <form style="border:1px solid rgba(91, 91, 91, 0.1);padding: 20px 20px 20px 20px;" id="reviewForm">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fullname"><b>Full Name</b></label>
                                        <input type="text" class="form-control" id="fullname" placeholder="Full Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phoneno"><b>Phone Number</b></label>
                                        <input type="text" class="form-control" id="phoneno" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address"><b>Email</b></label>
                                        <input type="text" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address"><b>Address</b></label>
                                        <input type="text" class="form-control" id="address" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address"><b>Description</b></label>
                                <textarea type="text" class="form-control" id="desc" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formControlRange"><b>Rating</b></label>&nbsp;
                                
                                <input type="text" value="5" readonly="readonly" id="textInput" style="font-size:70px;border: none !important;width: 100%; text-align: center;">
                                <input type="range" class="form-control-range" min="0" max="5" onchange="updateTextInput(this.value);" id="rating" style="width: 100%;" value="5">
                            </div>
                            <div class="col-lg-12 text-center" style="text-align: center;">
                                    <button type="button" class="btn btn-primary" onclick="postReviews();">POST REVIEW</button>
                            </div>
                                <input type="hidden" id="postReviewsUrl" value="<?php echo base_url();  ?>post_reviews">
                                <input type="hidden" id="fetchReviewsUrl" value="<?php echo base_url();  ?>fetch_reviews">
                                <input type="hidden" id="productId" value="<?php echo $productView['id'] ?>">
                                <input type="hidden" id="addWishList" value="<?php echo base_url();  ?>add_wishlist">
                                <input type="hidden" id="productLike" value="<?php echo base_url();  ?>product_like">
                    </form>
                </div>
                <div class="col-sm-6" style=" background:#fff;border:1px solid rgba(91, 91, 91, 0.1);padding: 20px 20px 20px 20px;">
                    <div class="col-lg-12 text-center" id="loader" style="display: none; text-align: center;">
                            <img class = "lazy" src="<?php echo base_url();  ?>assets/img/loadinfo.net.gif">
                    </div> 
                    <div id="tabs-1" style="overflow: auto; height:496px;">             
                    </div>                               
                </div>                
            </div>
        </div>
    </section>

    <!-- Product Details Section End -->

