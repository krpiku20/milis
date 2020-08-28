<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Assured Delivery</h6>
                    <p>DTDC, BlueDart, India Post</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>Read <a href="https://traditionalmili.com/exchange_policy">Exchange Policy</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support</h6>
                    <p>Phone and WhatsApp</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Secured Payment</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->
<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="<?php echo base_url();  ?>"><img class = "lazy" src="https://traditionalmili.com/assets/img/download.png" alt="Mili's"></a>
                    </div>
                    <p>Mili's is an online exclusive platform where it is willing to offer you the finest of Indian handloom sarees. It aims to cater the best and provide the best so that customers need not to worry about the quality and price.</p>
                    <div class="footer__payment">
                        <a><img class = "lazy" src="https://traditionalmili.com/assets/img/payment/payment-1.png" alt="Master Card"></a>
                        <a><img class = "lazy" src="https://traditionalmili.com/assets/img/payment/payment-2.png" alt="Visa"></a>
                        <a><img class = "lazy" src="https://traditionalmili.com/assets/img/payment/payment-3.png" alt="Net Banking"></a>
                        <a><img class = "lazy" src="https://traditionalmili.com/assets/img/payment/payment-4.png" alt="Google Pay"></a>
                        <a><img class = "lazy" src="https://traditionalmili.com/assets/img/payment/payment-5.png" alt="PayPal"></a>
                        <a><img class = "lazy" src="https://traditionalmili.com/assets/img/payment/payment-6.png" alt="Western Union"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li <?php if($this->uri->segment(1) == 'about_milis') echo 'class="bold"';  ?>><a href="<?php echo base_url(); ?>about_milis">About Mili's</a></li>
                        <li <?php if($this->uri->segment(1) == 'contact') echo 'class="bold"';  ?>><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                        <li <?php if($this->uri->segment(1) == 'feed') echo 'class="bold"';  ?>><a href="<?php echo base_url(); ?>feed">Feed</a></li>
                        <li><a href="https://traditionalmili.in" target="_blank">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Others</h6>
                    <ul>
                        <li <?php if($this->uri->segment(1) == 'privacy_policy') echo 'class="bold"';  ?>><a href="<?php echo base_url(); ?>privacy_policy">Privacy Policy</a></li>
                        <li <?php if($this->uri->segment(1) == 'terms_conditions') echo 'class="bold"';  ?>><a href="<?php echo base_url(); ?>terms_conditions">Terms and Conditions</a></li>
                        <li <?php if($this->uri->segment(1) == 'exchange_policy') echo 'class="bold"';  ?>><a href="<?php echo base_url(); ?>exchange_policy">Exchange Policy</a></li>
                        <li <?php if($this->uri->segment(1) == 'feedback') echo 'class="bold"';  ?>><a href="<?php echo base_url(); ?>feedback">Write a Review</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <!-- <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form> -->
                    <div class="col-lg-12 text-center">
                        <div class="fb-page" data-href="https://www.facebook.com/milistradition/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/milistradition/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/milistradition/">Mili&#039;s</a></blockquote></div>
                        <iframe style="margin-top: 10px;" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fmilistradition&width=160&layout=button_count&action=like&size=large&share=true&height=46&appId=320650182701940" width="160" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>

                    <div class="footer__social text-center">
                        <br>
                        <a href="https://www.facebook.com/mili.traditional" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/traditionalmili" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/milistradition/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://in.pinterest.com/milisarkar2019/" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-12 text-center" >
                <a style="background-color: #dc3545; color: #fff; border-radius: 0px !important;" class="primary-btn load-btn">Total visits&nbsp;:&nbsp;<span id="visitCount" >0</span></a>
            </div> -->
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; Mili's <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>


<!-- Footer Section End -->


<!-- Js Plugins -->
<!-- <script defer="defer" src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- <script defer="defer" src="https://traditionalmili.com/assets/js/bootstrap.min.js"></script> -->

<script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<!-- <script defer="defer" src="https://traditionalmili.com/assets/js/jquery.magnific-popup.min.js"></script> -->
<!-- <script defer="defer" src="https://traditionalmili.com/assets/js/jquery-ui.min.js"></script> -->
<!-- <script defer="defer" src="https://traditionalmili.com/assets/js/mixitup.min.js"></script> -->
<script defer="defer" src="https://traditionalmili.com/assets/js/jquery.countdown.min.js"></script>
<script defer="defer" src="https://traditionalmili.com/assets/js/jquery.slicknav.js"></script>
<!-- <script src="https://traditionalmili.com/assets/js/owl.carousel.min.js"></script> -->
<!-- <script defer="defer" src="https://traditionalmili.com/assets/js/jquery.nicescroll.min.js"></script> -->
<script defer="defer" src="https://traditionalmili.com/assets/js/main.js"></script>
<script defer="defer" src="https://traditionalmili.com/assets/js/scrollpagination.js"></script>

<!-- Zoom Effects -->
<script defer="defer" src="https://traditionalmili.com/assets/js/zoom/modernizr.js"></script>
<script defer="defer" type="text/javascript" src="https://traditionalmili.com/assets/js/zoom/xzoom.min.js"></script>
<script defer="defer" type="text/javascript" src="https://traditionalmili.com/assets/js/zoom/jquery.hammer.min.js"></script>  
<script defer="defer" type="text/javascript" src="https://traditionalmili.com/assets/js/zoom/jquery.fancybox.js"></script>
<script defer="defer" type="text/javascript" src="https://traditionalmili.com/assets/js/zoom/magnific-popup.js"></script>
<script defer="defer" src="https://traditionalmili.com/assets/js/zoom/foundation.min.js"></script>
<script defer="defer" src="https://traditionalmili.com/assets/js/zoom/setup.js"></script>

<button type="button" class="btn btn-danger scroll-top"><i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>
</body>

</html>