<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><?php _trans('shippername'); ?></th>
            <th><?php _trans('city'); ?></th>
            <th><?php _trans('prov'); ?></th>
            <th><?php _trans('contact'); ?></th>
            <th><?php _trans('phone'); ?></th>
            <th><?php _trans('options'); ?></th>
        </tr>
        </thead>
        <tbody>
            <?php if(!empty($records)){
                foreach ($records as $key => $value) { ?>
                    <tr>
                    <td><?=$value->shippername?></td>
                    <td><?=$value->city?></td>
                    <td><?php $state = getState($value->prov); if(!empty($state->state)){ echo $state->state;}?></td>
                    <td><?=$value->contact?></td>
                    <td><?=$value->phone?></td>
                    <td>
                        <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('shippers/view/' . $value->shipperid); ?>">
                                    <i class="fa fa-eye fa-margin"></i> <?php _trans('view'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('shippers/form/' . $value->shipperid); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            
                            <li>
                                <form action="<?php echo site_url('shippers/delete/' . $value->shipperid); ?>"
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
