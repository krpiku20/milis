/*  ---------------------------------------------------
Template Name: Ashion
Description: Ashion ecommerce template
Author: Colorib
Author URI: https://colorlib.com/
Version: 1.0
Created: Colorib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Product filter
        --------------------*/
        $('.filter__controls li').on('click', function () {
            $('.filter__controls li').removeClass('active');
            $(this).addClass('active');
        });
        // if ($('.property__gallery').length > 0) {
        //     var containerEl = document.querySelector('.property__gallery');
        //     var mixer = mixitup(containerEl);
        // }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Search Switch
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay, .offcanvas__close").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    /*------------------
        Navigation
    --------------------*/
    $(".header__menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    /*--------------------------
        Banner Slider
    ----------------------------*/
    // $(".banner__slider").owlCarousel({
    //     loop: true,
    //     margin: 0,
    //     items: 1,
    //     dots: true,
    //     smartSpeed: 1200,
    //     autoHeight: false,
    //     autoplay: true
    // });

    /*--------------------------
        Product Details Slider
    ----------------------------*/
    // $(".product__details__pic__slider").owlCarousel({
    //     loop: false,
    //     margin: 0,
    //     items: 1,
    //     dots: false,
    //     nav: true,
    //     navText: ["<i class='arrow_carrot-left'></i>","<i class='arrow_carrot-right'></i>"],
    //     smartSpeed: 1200,
    //     autoHeight: false,
    //     autoplay: false,
    //     mouseDrag: false,
    //     startPosition: 'URLHash'
    // }).on('changed.owl.carousel', function(event) {
    //     var indexNum = event.item.index + 1;
    //     product_thumbs(indexNum);
    // });

    function product_thumbs (num) {
        var thumbs = document.querySelectorAll('.product__thumb a');
        thumbs.forEach(function (e) {
            e.classList.remove("active");
            if(e.hash.split("-")[1] == num) {
                e.classList.add("active");
            }
        })
    }


    /*------------------
        Magnific
    --------------------*/

    /*------------------
        CountDown
    --------------------*/
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    if(mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    var timerdate = mm + '/' + dd + '/' + yyyy;
    var timerdate = "2020/08/31" 
    $("#countdown-time").countdown(timerdate, function(event) {
        $(this).html(event.strftime("<div class='countdown__item'><span>%D</span> <p>Day</p> </div>" + "<div class='countdown__item'><span>%H</span> <p>Hour</p> </div>" + "<div class='countdown__item'><span>%M</span> <p>Min</p> </div>" + "<div class='countdown__item'><span>%S</span> <p>Sec</p> </div>"));
    });
    /*-------------------
        Range Slider
    --------------------- */
    // var rangeSlider = $(".price-range"),
 //    minamount = $("#minamount"),
 //    maxamount = $("#maxamount"),
 //    minPrice = rangeSlider.data('min'),
 //    maxPrice = rangeSlider.data('max');
 //    rangeSlider.slider({
 //    range: true,
 //    min: minPrice,
 //    max: maxPrice,
 //    values: [minPrice, maxPrice],
 //    slide: function (event, ui) {
 //        minamount.val('$' + ui.values[0]);
 //        maxamount.val('$' + ui.values[1]);
 //        }
 //    });
 //    minamount.val('$' + rangeSlider.slider("values", 0));
 //    maxamount.val('$' + rangeSlider.slider("values", 1));

    /*------------------
        Single Product
    --------------------*/
    $('.product__thumb .pt').on('click', function(){
        var imgurl = $(this).data('imgbigurl');
        var bigImg = $('.product__big__img').attr('src');
        if(imgurl != bigImg) {
            $('.product__big__img').attr({src: imgurl});
        }
    });
    
    /*-------------------
        Quantity change
    --------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });
    
    /*-------------------
        Radio Btn
    --------------------- */
    $(".size__btn label").on('click', function () {
        $(".size__btn label").removeClass('active');
        $(this).addClass('active');
    });

})(jQuery);
//============CUSTOM FUNCTION=================//
$("img.lazy").lazyload({effect: "slideDown"});   
    /*
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (https://www.arthurgareginyan.com)
    * For full source code, visit https://mycyberuniverse.com
    */
window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } 
      else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };

$(document).ready(function(){

    var value = '';
    displayData(value);       
    wishListCheck();
    wishListUpdate();
    visits();
    popUp();
    var productId = $("#productId").val();
    fetchReviews(productId);
    $(".scroll-top").click(function() {
        $("html, body").animate({ 
            scrollTop: 0 
        }, "slow");
        return false;
    });
    setTimeout(function () {
        $("#cookieConsent").fadeIn(200);
     }, 4000);
    $("#closeCookieConsent, .cookieConsentOK").click(function() {
        $("#cookieConsent").fadeOut(200);
    });
});
function popUp(){
    $(".popup-overlay, .popup-content").addClass("active");
}
function gallery(){
    $('html, body').animate({
        scrollTop: $("#gallery").offset().top
    }, 1000);
}

function visits(){
    $("#visitLoader").show();
    var csrfName = $("#csrfName").val();
    var csrfHash = $("#csrfHash").val();
    var visitUrl = $("#visitUrl").val();
    $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash},
            url: visitUrl,
            success: function(response){
                $("#visitLoader").hide();
                $("#visitCount").html(response);
                 //$("#visitCount2").html(response);
            }
    });   
}

$("form").bind("keypress", function (e) {
    if (e.keyCode == 13) {
    return false;
    }
});

function searchSaree(){
    $('html, body').animate({
        scrollTop: $("#gallery").offset().top
    }, 1000);
    var search_input = $("#search-input").val();
    search_input = search_input.toLowerCase();
    if(search_input == ''){
        $("#filterList").html(search_input);
        $('.search-model').css({"opacity": "0.85"});
        displayData('');
        return false;
    }else{
        displayData(search_input);
        $('.search-model').css({"opacity": "0.85"});
    }
}

function contact(){
    $('html, body').animate({
        scrollTop: $(".fa-envelope").offset().top
    }, 1000);
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var message = $("#message").val();
            var csrfName = $("#csrfName").val();
            var csrfHash = $("#csrfHash").val();
            var contactUrl = $("#contactUrl").val();
                $.ajax({
                    type: "POST",
                    data:{[csrfName]:csrfHash,name:name,email:email,phone:phone,message:message},
                    url: contactUrl,
                        success: function(response){
                            $("#contactResponse").html(response).show();
                            if(response == 1){
                                $("#contactForm").get(0).reset();
                                $("#contactResponse").html('<span style="color:green;">Thank you for contacting. Get you back asap.</span>').show().fadeOut(10000);
                            }                 
                        }
                }); 
}

function next(){
    //$("#previous").show();
    $("#loader").show();
    var value= $("#filterWrite").val();
    var url = $("#nextData").val();
    var csrfName = $("#csrfName").val();
    var csrfHash = $("#csrfHash").val();
    var displayDataUrl = $("#displayDataUrl").val();
        $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash,value:value,url:url},
            url: displayDataUrl,
                success: function(response){
                    if(response == ''){
                        $("#loadButton").show();
                        $("#loadButton").text('Not found '+value+' here? Try Next.');
                        $("#loader").hide();

                    }else{
                        $("#loadButton").hide();
                        $("#loader").hide();
                    }
                        $(".property__gallery").html(response);                       
                        $("#topFilter").removeClass("active");    
                    
                          
                }
        });

}


function displayData(value){
    $("#loader").show();
    $("#filterWrite").val(value);
        var csrfName = $("#csrfName").val();
        var csrfHash = $("#csrfHash").val();      
        var displayDataUrl = $("#displayDataUrl").val();
        $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash,value:value},
            url: displayDataUrl,
                success: function(response){
                    if(response == ''){
                        $("#loadButton").show();
                        $("#loadButton").text('Not found '+value+' here? Try Next.');
                        $("#loader").hide();
                        
                    }else{
                        $("#loadButton").hide();
                        $("#loader").hide();
                    }
                        $(".property__gallery").html(response);                       
                        $("#topFilter").removeClass("active");    
                        
                    
                                            
                }
        }); 
}

function wishList(product_id,product_name,product_image){
        $('#wishStat_'+product_id).show();
        var csrfName = $("#csrfName").val();
        var csrfHash = $("#csrfHash").val();
        var addWishList = $("#addWishList").val();
        $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash,product_id:product_id,product_name:product_name,product_image:product_image},
            url: addWishList,
                success: function(response){
                    $('.wishlistTip').html(response);
                    $('#wishStat_'+product_id).show();
                    displayData();
                }
        }); 
}

function wishListUpdate(){
        $("#loadersss").show();
        var csrfName = $("#csrfName").val();
        var csrfHash = $("#csrfHash").val();
        var wishListUpdateUrl = $("#wishListUpdateUrl").val();
        $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash},
            url: wishListUpdateUrl,
                success: function(response){
                    $('#wishListUpdateDisplay').html(response);
                    $("#loadersss").hide();
                }
        }); 
}

function wishListCheck(){
    var csrfName = $("#csrfName").val();
    var csrfHash = $("#csrfHash").val();
        var checkCart = $("#checkCart").val();
        $.ajax({
            type: "GET",
            data: {[csrfName]:csrfHash},
            url: checkCart,
                success: function(response){
                    $('.wishlistTip').html(response);
                }
        }); 
}

function removeCart(rowid,cartId){
        $("#loader_"+cartId).show();
        $('#wishStat_'+cartId).hide();
        var csrfName = $("#csrfName").val();
        var csrfHash = $("#csrfHash").val();
        var removeCart = $("#removeCart").val();
        $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash,rowid:rowid, cartId:cartId},
            url: removeCart,
                success: function(response){
                    $('.removeInfo_'+cartId).html('<div class="col-lg-12 col-md-12 text-center">Removed</div>').fadeOut(6000);
                    $('.wishtip').html(response);
                    $('#wishStat_'+cartId).hide();
                    $('#wishNoStat_'+cartId).show();
                    $("#loader_"+cartId).hide();
                    wishListUpdate();
                }
        }); 
}

function updateTextInput(val) {
    document.getElementById('textInput').value=val; 
}

function scrollBottom(){
    $('html, body').animate({
        scrollTop: $("#tab").offset().top
    }, 1000);  
}

function postReviews(){
    $('html, body').animate({
        scrollTop: $("#tab").offset().top
    }, 1000);    
            var fullname = $("#fullname").val();
            var phoneno = $("#phoneno").val();
            var email = $("#email").val();
            var address = $("#address").val();
            var desc = $("#desc").val();
            var rating = $("#rating").val();
            var csrfName = $("#csrfName").val();
            var csrfHash = $("#csrfHash").val();
            var postReviewsUrl = $("#postReviewsUrl").val();
            var productId = $("#productId").val();
                $.ajax({
                    type: "POST",
                    data:{[csrfName]:csrfHash,productId:productId,fullname:fullname,phoneno:phoneno,email:email,address:address,desc:desc,rating:rating},
                    url: postReviewsUrl,
                        success: function(response){
                            if(response == '1'){
                                $("#success").html('Name is required').show().fadeOut(6000);
                            }
                            else if(response == '2'){
                                $("#success").html('Phone no is required').show().fadeOut(6000);
                            }
                            else if(response == '3'){
                                $("#success").html('Address is required').show().fadeOut(6000);
                            }
                            else if(response == '4'){
                                $("#success").html('Description is required').show().fadeOut(6000);
                            }
                            else if(response == '5'){
                                $("#success").html('Valid email is required').show().fadeOut(6000);
                            }
                            else{
                                var res = response.split("||");
                                $("#avgReviewCount").html( Math.round(res[0] * 10) / 10);
                                $("#reviewCount1").html(res[1]);
                                $("#reviewCount2").html(res[1]);
                                $("#reviewForm").get(0).reset();
                                fetchReviews(productId);                                
                            }
                        }
                });                
}

function fetchReviews(productId){
    $("#loader").show();
    var limit = 2;
    var end = 0;
    var csrfName = $("#csrfName").val();
    var csrfHash = $("#csrfHash").val();
    var fetchReviewsUrl = $("#fetchReviewsUrl").val();
    $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash,productId:productId,limit:limit,end:end},
            url: fetchReviewsUrl,
            success: function(response){
                $("#loader").hide();
                $("#tabs-1").html(response);
            }
    });  
}

function loadMoreReviews(productId,limit){
    var end = 2;
    var start = (limit)*end;
    $("#loaders").show();
    var csrfName = $("#csrfName").val();
    var csrfHash = $("#csrfHash").val();
    var fetchReviewsUrl = $("#fetchReviewsUrl").val();
        $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash,limit:start,end:end,productId:productId},
            url: fetchReviewsUrl,
                success: function(response){
                    $("#loaders").hide();
                    $('#tabs-1ext').html(response);
                }
        }); 
}

function productLike(productId,like){
    if(like == 1){
        $("#likeButton").hide();
        $("#dislikeButton").show();
        $('#likeCount').html(like);
    }
    if(like == 0){
        $("#likeButton").show();
        $("#dislikeButton").hide();
        $('#likeCount').html(like);
    }
    var csrfName = $("#csrfName").val();
    var csrfHash = $("#csrfHash").val();
    var productLike = $("#productLike").val();
        $.ajax({
            type: "POST",
            data:{[csrfName]:csrfHash,like:like,productId:productId},
            url: productLike,
                success: function(response){
                    $('#likeCount').html(response);
                }
        });
}

function writeReviews(){
    
            var fullname = $("#fullname").val();
            var phoneno = $("#phoneno").val();
            var email = $("#email").val();
            var address = $("#address").val();
            var desc = $("#desc").val();
            var csrfName = $("#csrfName").val();
            var csrfHash = $("#csrfHash").val();
            var csrfName = $("#csrfName").val();
            var csrfHash = $("#csrfHash").val();
            var reviewUrl = $("#reviewUrl").val();
                $.ajax({
                    type: "POST",
                    data:{[csrfName]:csrfHash,fullname:fullname,phoneno:phoneno,email:email,address:address,desc:desc},
                    url: reviewUrl,
                        success: function(response){
                            if(response == '1'){
                                $("#writeReviewsMsg").html('Name is required').show();
                            }
                            else if(response == '2'){
                                $("#writeReviewsMsg").html('Phone no is required').show();
                            }
                            else if(response == '3'){
                                $("#writeReviewsMsg").html('Address is required').show();
                            }
                            else if(response == '4'){
                                $("#writeReviewsMsg").html('Description is required').show();
                            }
                            else if(response == '5'){
                                $("#writeReviewsMsg").html('Valid email is required').show();
                            }
                            else{
                                $("#writeReviewsMsg").html(response);
                                $("#writeReviewsForm").get(0).reset();                              
                            }
                        }
                });                
}