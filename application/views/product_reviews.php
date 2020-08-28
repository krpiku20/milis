<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if(!empty($productReviews)) {  ?>
<?php foreach($productReviews as $reviews){  ?>
	<h4 style="color:#000;"><?php echo $reviews->fullname; ?>
		<span style="float: right;color: #000; font-size: 10px;">
			<?php 
				$now =  strtotime(date("Y-m-d h:i:s"));
				$ago =  strtotime($reviews->date);
				$timelapse = $now - $ago;
			?>
		</span>
	</h4>
	<h6 style="color: #000; font-size: 9px;">
		<?php echo $reviews->address ; ?>&nbsp;|&nbsp;
		<?php if(!empty($reviews->rating)){  ?>
		<?php for($i = 0; $i < $reviews->rating; $i++){?>
				<i class="fa fa-star"></i>
		<?php }}else{?>
		<?php echo '<b>No rating</b>'; } ?>
	</h6>
	<p style="color:#000;font-size: 12px; word-wrap: break-word;"><?php echo $reviews->desc ; ?></p>
	<hr>
<?php }?>
<div id="tabs-1ext" style="color: #000;">
	<div class="col-lg-12 text-center" id="loaders" style="display: none; text-align: center;">
    	<img class = "lazy" src="<?php echo base_url();  ?>assets/img/loadinfo.net.gif">
    </div>
	<div class="col-lg-12 text-center" style="text-align: center;">
	    <button type="button" class="btn btn-primary" onclick="loadMoreReviews('<?php echo $productReviews[0]->product_id ?>',<?php echo count($productReviews) ?>);">More
	    </button>
	</div>
</div>
<?php }else{?>
<div class="col-lg-12 text-center" style="text-align: center;">
    <h6 style="color:#000;"><b>No reviews</b></h6>
</div>
<?php }  ?>
