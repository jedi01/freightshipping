

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
            <?php if ($this->mdl_moves->form_value('is_update')) {
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
                                    <option value=""><?php _trans('order_id'); ?></option>
                                    <?php foreach ($shippingOrders as $k => $v) { ?>
                                    <option value="<?php echo $v->shippingorderid; ?>" <?php check_select($select_shippingOrder, $v->shippingorderid); ?> ><?php echo $v->shippingorderid; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="carrier"><?php _trans('carrier'); ?></label>
                            <div class="controls">
                                <select name="carrier" id="carrier" class="form-control select2">
                                    <option value=""><?php _trans('select_carrier'); ?></option>
                                    <?php foreach ($carrier as $k1 => $v1) { ?>
                                    <option value="<?php echo $v1->carrierid; ?>" <?php check_select($select_carrier, $v1->carrierid); ?> ><?php echo $v1->carriername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="shipper"><?php _trans('shipper'); ?></label>
                            <div class="controls">
                                <select name="shipper" id="shipper" class="form-control select2">
                                    <option value=""><?php _trans('select_shipper'); ?></option>
                                    <?php foreach ($shipper as $k2 => $v2) { ?>
                                    <option value="<?php echo $v2->shipperid; ?>" <?php check_select($select_shipper, $v2->shipperid); ?> ><?php echo $v2->shippername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="receiver"><?php _trans('receiver'); ?></label>
                            <div class="controls">
                                <select name="receiver" id="receiver" class="form-control select2">
                                    <option value=""><?php _trans('select_reciver'); ?></option>
                                    <?php foreach ($receiver as $k3 => $v3) { ?>
                                    <option value="<?php echo $v3->receiverid; ?>" <?php check_select($select_reciver, $v3->receiverid); ?> ><?php echo $v3->receivername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="moverate"><?php _trans('moverate'); ?></label>
                            <input id="moverate" name="moverate" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_moves->form_value('moverate', true); ?>">
                        </div>

                        <div class="form-group">
                            <label for="movetaxrate"><?php _trans('tax'); ?></label>
                            <div class="controls">
                                <select name="movetaxrate" id="movetaxrate" class="form-control select2">
                                    <option value=""><?php _trans('select_tax'); ?></option>
                                    <?php foreach ($tax_rates as $k4 => $v4) { ?>
                                    <option value="<?php echo $v4->tax_rate_id; ?>" <?php check_select($select_taxrate, $v4->tax_rate_id); ?> ><?php echo $v4->tax_rate_name; ?></option>
                                    <?php } ?>
                                </select>
                             </div>
                        </div>


                        <div class="form-group">
                            <label for="movefsc"><?php _trans('fsc'); ?></label>
                            <input id="movefsc" name="movefsc" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_moves->form_value('movefsc', true); ?>">
                        </div>
                      
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <?php _trans('contact_information'); ?>
                    </div>

                    <div class="panel-body">

                      
                        <div class="form-group">
                            <label for="pickupnum"><?php _trans('P/U_number'); ?></label>
                            <input id="pickupnum" name="pickupnum" type="text"  maxlength="50" class="form-control"  value="<?php echo $this->mdl_moves->form_value('pickupnum', true); ?>">
                        </div>


                        <div class="form-group">
                            <label for="servicecode"><?php _trans('servicecode'); ?></label>
                            <div class="controls">
                                <select name="servicecode" id="servicecode" class="form-control select2">
                                    <option value=""><?php _trans('select_service_code'); ?></option>
                                    <?php foreach ($serviceCode as $k5 => $v5) { ?>
                                        <option value="<?php echo $v5->servicecodeid; ?>" <?php check_select($select_servicecode, $v5->servicecodeid); ?> ><?php echo $v5->type; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        

                         <div class="form-group">
                            <label for="notes"><?php _trans('notes'); ?></label>
                            <input id="notes" name="notes" type="text"   class="form-control"  value="<?php echo $this->mdl_moves->form_value('notes', true); ?>">
                        </div>

                        <div class="form-group">
                            <label for="instructions"><?php _trans('instructions'); ?></label>
                            <input id="instructions" name="instructions" type="text" class="form-control"  value="<?php echo $this->mdl_moves->form_value('instructions', true); ?>">
                        </div>

                         <div class="form-group has-feedback">
                            <label for="pickupdate"><?php _trans('pickup_date'); ?></label>

                            <div class="input-group">
                                <input type="text" name="pickupdate" id="pickupdate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_moves->form_value('pickupdate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>


                        <div class="form-group has-feedback">
                            <label for="deldate"><?php _trans('deliverydate'); ?></label>

                            <div class="input-group">
                                <input type="text" name="deldate" id="deldate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_moves->form_value('deldate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="puappt"><?php _trans('P/U_appt'); ?></label>
                            <input id="puappt" name="puappt" type="text"  maxlength="20" class="form-control"  value="<?php echo $this->mdl_moves->form_value('puappt', true); ?>">
                        </div>


                        <div class="form-group">
                            <label for="delappt"><?php _trans('deliverytime'); ?></label>
                            <input id="delappt" name="delappt" type="text"  maxlength="20" class="form-control"  value="<?php echo $this->mdl_moves->form_value('delappt', true); ?>">
                        </div>

                   





                      
                    </div>

                </div>

            </div>
        </div>


    </div>
</form>
