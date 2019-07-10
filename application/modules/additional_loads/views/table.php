<div class="table-responsive">
    <table class="table table-striped" >
        <thead>
        <tr>
            <th><?php _trans('Additional loads id'); ?></th>
            <th><?php _trans('Customer'); ?></th>
            <th><?php _trans('Pickupdate'); ?></th>
            <th><?php _trans('Shipping_order_id'); ?></th>
            <th><?php _trans('Punotes'); ?></th>
            <th><?php _trans('Orderdate'); ?></th>
            <th><?php _trans('Trailernum'); ?></th>
            <th><?php _trans('Net Weight'); ?></th>
            <th><?php _trans('Seal'); ?></th>
           
            <th><?php _trans('options'); ?></th>
        </tr>
        </thead>
        <tbody>
            <?php if(!empty($records)){
                foreach ($records as $key => $value) { ?>
                    <tr>
                    <td><?=$value->additional_id?></td>
                    <td><?=$value->customer?></td>
                    <td><?=$value->pickupdate?></td>
                    <td><?=$value->shipping_order_id?></td>
                    <td><?=$value->punotes?></td>
                    <td><?=$value->orderdate?></td>
                    <td><?=$value->trailernum?></td>
                    <td><?=$value->netweight?></td>
                    <td><?=$value->seal?></td>
                    

                    <td>
                        <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('additional_loads/view/' . $value->additional_id); ?>">
                                    <i class="fa fa-eye fa-margin"></i> <?php _trans('view'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('additional_loads/form/' . $value->additional_id); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            
                            <li>
                                <form action="<?php echo site_url('additional_loads/delete/' . $value->additional_id); ?>"
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
