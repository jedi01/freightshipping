<div class="table-responsive">
    <table class="table table-striped" >
        <thead>
        <tr>
            <th><?php _trans('shipping_order'); ?></th>
            <th><?php _trans('tracking_date'); ?></th>
            <th><?php _trans('location'); ?></th>
            <th><?php _trans('trackingStatus'); ?></th>
            <th><?php _trans('comment'); ?></th>
            <th><?php _trans('options'); ?></th>
        </tr>
        </thead>
        <tbody>
            <?php if(!empty($records)){
                foreach ($records as $key => $value) { ?>
                    <tr>
                    <td><?=$value->shippingorderid?></td>
                    <td><?=$value->trackingdate?></td>
                    <td><?=$value->location?></td>
                    <td><?php $status = getTrackingStatus($value->trackingstatus); echo $status->type;?></td>
                    <td><?=$value->trackingcomment?></td>
                    <td>
                        <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('tracking_detail/view/' . $value->trackingdetailid); ?>">
                                    <i class="fa fa-eye fa-margin"></i> <?php _trans('view'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('tracking_detail/form/' . $value->trackingdetailid); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            
                            <li>
                                <form action="<?php echo site_url('tracking_detail/delete/' . $value->trackingdetailid); ?>"
                                      method="POST">
                                    <?php _csrf_field(); ?>
                                    <button type="submit" class="dropdown-button"
                                            onclick="return confirm('<?php _trans('delete_client_warning'); ?>');">
                                        <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    </td>
                </tr>
                 
               <?php }
            } ?>
        </tbody>
    </table>
</div>
