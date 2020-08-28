<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>Contact info</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker"></i> Address</h6>
                                    <p>10/4B, Sunny Seasons Complex, Kamalgazi More, Kolkata-700103. </p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> Phone | &nbsp;<i class="fa fa-whatsapp"></i> WhatsApp</h6>
                                    <p><span>+918250813064</span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-envelope"></i> Email</h6>
                                    <p>milisarkar.2019@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <h5 id="contactResponse" style="display: none; color:#ca1515; font-weight: bold;"></h5>
                            <form method="POST" id="contactForm">
                                <input type="text" id="name" placeholder="Name">
                                <input type="text" id="email" placeholder="Email">
                                <input type="text" id="phone" placeholder="Phone Number">
                                <textarea id="message" placeholder="Message"></textarea>
                                <button type="button" onclick="contact();" class="site-btn">Send Message</button>
                                <input type="hidden" id="contactUrl" value="<?php echo base_url(); ?>send_contact">
                                <input type="hidden" id="csrfName" value="<?php echo $this->security->get_csrf_token_name(); ?>">
                                <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.5639766774407!2d88.38692451427126!3d22.445431343284426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0271d7746d56e1%3A0x81e90a037d774938!2sMili&#39;s!5e0!3m2!1sen!2sin!4v1596614222754!5m2!1sen!2sin" width="600" height="780" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                       </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Contact Section End -->
