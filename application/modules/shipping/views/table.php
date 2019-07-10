<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><?php _trans('shipping_order'); ?></th>
            <th><?php _trans('customer'); ?></th>
            <th><?php _trans('pickup_date'); ?></th>
            <th><?php _trans('shipper'); ?></th>
            <th><?php _trans('receiver'); ?></th>
            <th><?php _trans('origin_carrier'); ?></th>
            <th><?php _trans('customer_number'); ?></th>
            <th><?php _trans('order_date'); ?></th>
            <th><?php _trans('bol'); ?></th>
            <th><?php _trans('status'); ?></th>
            <th><?php _trans('eta_date'); ?></th>
            <th><?php _trans('dispatcher'); ?></th>
            <th><?php _trans('options'); ?></th>
        </tr>
        </thead>
        <tbody>
            <?php if(!empty($records)){
                foreach ($records as $key => $value) { ?>
                    <tr>
                    <td><?=$value->shippingorderid?></td>
                    <td><?=$value->client_name?></td>
                    <td><?=$value->pickupdate?></td>
                    <td><?=$value->shippername?></td>
                    <td><?=$value->receivername?></td>
                    <td><?=$value->carriername?></td>
                    <td><?=$value->customernumber?></td>
                    <td><?=$value->orderdate?></td>
                    <td><?=$value->bol?></td>
                    <td><?php $status =  getOrderStatus($value->orderstatus); echo $status->orderstatus?></td>
                    <td><?=$value->etadate?></td>
                    <td><?=$value->name?></td>
                    <td>
                        <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('shipping/view/' . $value->id); ?>">
                                    <i class="fa fa-eye fa-margin"></i> <?php _trans('view'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('shipping/form/' . $value->id); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            
                            <li>
                                <form action="<?php echo site_url('shipping/delete/' . $value->id); ?>"
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
