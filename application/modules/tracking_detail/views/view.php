

<div id="headerbar">
    <h1 class="headerbar-title">Order Number : <?=$tracking->shippingorderid?></h1>


    <div class="headerbar-item pull-right">
        <div class="btn-group btn-group-sm">
            
            
            <a href="<?php echo site_url('tracking_detail/form/'.$tracking->trackingdetailid); ?>"
               class="btn btn-default">
                <i class="fa fa-edit"></i> <?php _trans('edit'); ?>
            </a>
           
            <a class="btn btn-danger" href="<?php echo site_url('tracking_detail/delete/'.$tracking->trackingdetailid); ?>" onclick="confirm('confirm delete')" > <i class="fa fa-trash-o"></i> <?php _trans('delete'); ?></a>
     
        </div>
    </div>

</div>
<div id="content" class="tabbable tabs-below no-padding">
    <div class="tab-content no-padding">

        <div id="clientDetails" class="tab-pane tab-rich-content active">

            <?php $this->layout->load_view('layout/alerts'); ?>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h3><?php _trans('trackingStatus'); ?> : <?=$tracking->type?></h3>
                    <h5><?php _trans('tracking_date'); ?> : <?=$tracking->trackingdate?></h5>
                    <h5><?php _trans('location'); ?>: <?=$tracking->location?></h5>
                    <h5><?php _trans('comment'); ?> : <?=$tracking->trackingcomment?></h5>
                </div>
                
            </div>

            <hr>
           
       
    </div>

</div>
