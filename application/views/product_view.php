<?php  defined('BASEPATH') OR exit('No direct script access allowed'); 
$cartId = $this->cart->contents();

$postDate = strtotime($f['created_time']);
$nowDate = time();

?>
<?php if(!empty($f)){  ?>
<?php if($f['attachments']['data'][0]['subattachments']['data'][0]['type'] == 'photo'){   ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg">
                        <div class="label new" id="wishNoStat_<?php echo $f['id'] ?>"><?php echo str_replace(str_split('\\/:*?"<>|#_'), ' ', $f['message_tags'][0]['name']);?>
                        </div>
                        <?php if(empty($cartId)){  ?>
                        <div style="display:none;background-color: #dc3545;left: 220px;" id="wishStat_<?php echo $f['id'] ?>" class="label new">
                            <span class="icon_heart_alt"></span>
                        </div>
                        <?php } ?>
                        <?php foreach($cartId as $cart){ if($f['id'] == $cart['id']){ ?>
                        <div style="background-color: #dc3545;left: 220px;" id="wishStat_<?php echo $f['id'] ?>" class="label new">
                            <span class="icon_heart_alt"></span>
                        </div>
                        <?php }} ?>
                        <?php if(round(($nowDate - $postDate)/(60*60*24)) <= 4){  ?>
                        <a target="_blank" href="<?php echo base_url();  ?>product_details?product=<?php echo $f['id'];  ?>">
                            <img class = "lazy" src="<?php echo $f['full_picture'];?>" height="465" width="100%">
                        </a>
                        <?php }else{ ?>
                            <img class = "lazy imgLay" src="<?php echo $f['full_picture'];?>" height="465" width="263">
                            <div class="overlay_container">
                                <div class="overlay">
                                    <div class="text">Saree is either sold out or out of stock. To know more WhatsApp me.</div>
                                </div>
                            </div>
                        <?php } ?>
                        <ul class="product__hover">
                            <li>
                                <a target="_blank" href="<?php echo $f['full_picture'];  ?>" class="image-popup">
                                    <span class="arrow_expand"></span>
                                </a>
                            </li>
                            <?php if(round(($nowDate - $postDate)/(60*60*24)) <= 4){  ?>
                            <li>
                                <a class="isCart_<?php echo $f['id'];  ?>" onclick="wishList('<?php echo $f['id'];  ?>','<?php echo str_replace(str_split('\\/:*?"<>|#_'), ' ', $f['message_tags'][0]['name']);?>','<?php echo $f['full_picture'];  ?>');" style="cursor: pointer;">
                                    <span class="icon_heart_alt"></span>
                                </a>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="https://wa.me/+918250813064?text=https://www.facebook.com/100722371551069/posts/<?php echo str_replace('100722371551069_', '', $f['id']); ?>/ from Mili's" target="_blank" class="cart-btn1"><i class="fa fa-whatsapp"></i></a>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form>
                        <input type="hidden" id="nextData" value="<?php echo $fbdata['paging']['next'];    ?>">
                        <input type="hidden" id="addWishList" value="<?php echo base_url();  ?>add_wishlist">
                        <input type="hidden" id="csrfName" value="<?php echo $this->security->get_csrf_token_name(); ?>">
                        <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    </form>
                    <div class="product__item__text">
                        <h6><i class="fa fa-star" aria-hidden="true"></i>
                            <?php if(empty($avgReviews)) { echo '0';}
                                  else{ echo round($avgReviews,1);}  
                            ?> &nbsp;&nbsp; <i class="fa fa-comment" aria-hidden="true"></i>
                            <?php echo $totReviews;?> &nbsp;&nbsp; <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                             <?php echo $fetchLikes;?>
                        </h6>
                        <?php echo date("jS F Y",strtotime($f['created_time']));  ?>
                        <?php  //echo round(($nowDate - $postDate)/(60*60*24));  ?>
                        <div class="rating">
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>
<?php }else{ echo 'No data';}?>

