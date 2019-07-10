<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><?php _trans('shipping_order'); ?></th>
            <th><?php _trans('carrier'); ?></th>
            <th><?php _trans('shipper'); ?></th>
            <th><?php _trans('receiver'); ?></th>
            <th><?php _trans('pickup_date'); ?></th>
            <th><?php _trans('deliver_date'); ?></th>
            <th><?php _trans('options'); ?></th>
        </tr>
        </thead>
        <tbody>
            <?php if(!empty($records)){
                foreach ($records as $key => $value) { ?>
                    <tr>
                    <td><?=$value->shippingorderid?></td>
                    <td><?=$value->carriername?></td>
                    <td><?=$value->shippername?></td>
                    <td><?=$value->receivername?></td>
                    <td><?=$value->pickupdate?></td>
                    <td><?=$value->deldate?></td>
                    <td>
                        <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('moves/view/' . $value->movesid); ?>">
                                    <i class="fa fa-eye fa-margin"></i> <?php _trans('view'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('moves/form/' . $value->movesid); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            
                            <li>
                                <form action="<?php echo site_url('moves/delete/' . $value->movesid); ?>"
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
