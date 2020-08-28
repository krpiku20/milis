<?php defined('BASEPATH') OR exit('No direct script access allowed');?> 
<?php if ($this->session->flashdata('error')){ 
    echo 
    '<script>
        $("html, body").animate({
        scrollTop: $("#wishAlert").offset().top
    	}, 1000);
    	$("#wishAlert").show().fadeOut(10000);
    </script>'; 
}?>
<a href="<?php echo base_url(); ?>wishlist_fetch"><span class="icon_heart_alt"></span>
    <div class="tip wishtip"><?php echo count($wishDetails);  ?></div>
</a>