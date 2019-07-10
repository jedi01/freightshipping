

<script type="text/javascript">
    $(function () {
        $(".select2").select2({
            allowClear: true
        });
    });
    $(function () {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
});
</script>

<form method="post">

    <input type="hidden" name="id" value="<?=$id?>">

    <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>" value="<?php echo $this->security->get_csrf_hash() ?>">

    <div id="headerbar">
        <h1 class="headerbar-title"><?php _trans('moves_form'); ?></h1>
        <?php $this->layout->load_view('layout/header_buttons'); ?>
    </div>

    <div id="content">

        <?php $this->layout->load_view('layout/alerts'); ?>

        <input class="hidden" name="is_update" type="hidden"
            <?php if ($this->mdl_tracking_detail->form_value('is_update')) {
                echo 'value="1"';
            } else {
                echo 'value="0"';
            } ?>
        >

        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <?php _trans('address'); ?>
                    </div>

                    <div class="panel-body">

                        
                        <div class="form-group">

                            <label for="shippingorderid"><?php _trans('order_id'); ?></label>
                            <div class="controls">
                                <select name="shippingorderid" id="shippingorderid" class="form-control select2">
                                    <option value=""><?php _trans('select_order_id'); ?></option>
                                    <?php foreach ($shippingOrders as $k => $v) { ?>
                                    <option value="<?php echo $v->shippingorderid; ?>" <?php check_select($select_shippingOrder, $v->shippingorderid); ?> 
                                     <?php if(@$_GET['shipping_id'] == $v->shippingorderid){ echo "selected"; } ?>
                                    ><?php echo $v->shippingorderid; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group has-feedback">
                            <label for="trackingdate"><?php _trans('tracking_date'); ?></label>

                            <div class="input-group">
                                <input type="text" name="trackingdate" id="trackingdate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_tracking_detail->form_value('trackingdate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="location"><?php _trans('location'); ?></label>
                            <input id="location" name="location" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_tracking_detail->form_value('location', true); ?>">
                        </div>


                        <div class="form-group">
                           
                            <label for="trackingstatus"><?php _trans('trackingStatus'); ?></label>
                            <div class="controls">
                                <select name="trackingstatus" id="trackingstatus" class="form-control select2">
                                    <option value=""><?php _trans('select_tracking_status'); ?></option>
                                    <?php foreach ($trackingStatus as $k1 => $v1) { ?>
                                    <option value="<?php echo $v1->tracktraceid; ?>" <?php check_select($select_trackingStatus, $v1->tracktraceid); ?>  >
                                        <?php echo $v1->type; ?>
                                        


                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="trackingcomment"><?php _trans('comment'); ?></label>
                            <input id="trackingcomment" name="trackingcomment" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_tracking_detail->form_value('trackingcomment', true); ?>">
                        </div>

                      
                    </div>
                </div>
            </div>

        </div>


    </div>
</form>
