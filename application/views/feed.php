<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a>
                        <span>Feed</span>
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
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h4 style="float: left;">Traditional Mili</h4>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
            <?php
            if(!empty($fetchFeed)) {
            $i=0;
                foreach ($fetchFeed->channel->item as $feed_item) {
                if($i>=10) break;
            ?>
                    <tr>
                    <td valign="top">
                    <h3><a class="feed_title" href="<?php echo $feed_item->link; ?>"><?php echo $feed_item->title; ?></a>
                    </h3>
                    <div>
                        <?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 50)) . "..."; ?>
                    </div>
                    </td>
                    </tr>
            <?php       
            $i++;   
                }
            }
            ?>
            <a href="https://traditionalmili.in" style="cursor: pointer;" class="btn btn-danger">
                Visit Blog
            </a>
            </div>
        </div>
    </div>
</section>

<!-- Product Section End -->
