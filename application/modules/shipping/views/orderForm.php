

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

    <input type="hidden" name="id" value="<?php if(!empty($shipping)){ echo $shipping->id; } ?>">

    <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>" value="<?php echo $this->security->get_csrf_hash() ?>">

    <div id="headerbar">
        <h1 class="headerbar-title"><?php _trans('client_form'); ?></h1>
        <?php $this->layout->load_view('layout/header_buttons'); ?>
    </div>

    <div id="content">

        <?php $this->layout->load_view('layout/alerts'); ?>

        <input class="hidden" name="is_update" type="hidden"
            <?php if ($this->mdl_shipping->form_value('is_update')) {
                echo 'value="1"';
            } else {
                echo 'value="0"';
            } ?>
        >


        <div class="row">
            <div class="col-xs-12 col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-heading form-inline clearfix">
                        <?php _trans('shipping_order'); ?>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label for="shippingorderid">
                                <?php _trans('shipping_order'); ?>
                            </label>
                            <input id="shippingorderid" name="shippingorderid" type="number" class="form-control"  autofocus value="<?php echo $this->mdl_shipping->form_value('shippingorderid', true); ?>">
                        </div>

                        <div class="form-group">
                            <label for="customer"><?php _trans('customer'); ?></label>

                            <div class="controls">
                                <select name="customer" id="customer" class="form-control select2">
                                    <option value=""><?php _trans('select_customer'); ?></option>
                                    <?php foreach ($customer as $k => $v) { ?>
                                        <option value="<?php echo $v->client_id; ?>" <?php check_select($select_customer, $v->client_id); ?>><?php echo $v->client_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
 

                        <div class="form-group has-feedback">
                            <label for="pickupdate"><?php _trans('pickup_date'); ?></label>

                            <div class="input-group">
                                <input type="text" name="pickupdate" id="pickupdate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_shipping->form_value('pickupdate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="shipper"><?php _trans('shipper'); ?></label>
                            <div class="controls">
                                <select name="shipper" id="shipper" class="form-control select2">
                                    <option value=""><?php _trans('select_shipper'); ?></option>
                                    <?php foreach ($shipper as $k2 => $v2) { ?>
                                        <option value="<?php echo $v2->shipperid; ?>" <?php check_select($select_shipper, $v2->shipperid); ?>><?php echo $v2->shippername; ?></option>
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
                                        <option value="<?php echo $v3->receiverid; ?>" <?php check_select($select_reciver, $v3->receiverid); ?>><?php echo $v3->receivername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="customernumber"><?php _trans('customer_number'); ?></label>
                            <input id="customernumber" name="customernumber" type="text"  maxlength="50" class="form-control"   value="<?php echo $this->mdl_shipping->form_value('customernumber', true); ?>">
                        </div>


                       <div class="form-group has-feedback">
                            <label for="orderdate"><?php _trans('order_date'); ?></label>

                            <div class="input-group">
                                <input type="text" name="orderdate" id="orderdate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_shipping->form_value('orderdate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="orderstatus"><?php _trans('status'); ?></label>
                            <div class="controls">
                                <select name="orderstatus" id="orderstatus" class="form-control select2">
                                    <option value=""><?php _trans('select_status'); ?></option>
                                    <?php foreach ($orderstatus as $k4 => $v4) { ?>
                                        <option value="<?php echo $v4->orderstatusid; ?>" <?php check_select($select_orderstatus, $v4->orderstatusid); ?> ><?php echo $v4->orderstatus; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>


                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <?php _trans('address'); ?>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label for="destinationhub"><?php _trans('destination_hub'); ?></label>
                            <div class="controls">
                                <select name="destinationhub" id="destinationhub" class="form-control select2">
                                    <option value=""><?php _trans('select_destinationHub'); ?></option>
                                     <?php foreach ($destinationhub as $k5 => $v5) { ?>
                                        <option value="<?php echo $v5->receiverid; ?>" <?php check_select($select_destinationhub,  $v5->receiverid); ?> ><?php echo $v5->receivername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="routing"><?php _trans('rail_routing'); ?></label>

                            <div class="controls">
                                <input type="text" name="routing" id="routing" class="form-control" value="<?php echo $this->mdl_shipping->form_value('routing', true); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="origincarrier"><?php _trans('origin_carrier'); ?></label>
                            <div class="controls">
                                <select name="origincarrier" id="origincarrier" class="form-control select2">
                                    <option value=""><?php _trans('select_origin_carrier'); ?></option>
                                     <?php foreach ($origincarrier as $k6 => $v6) { ?>
                                        <option value="<?php echo $v6->carrierid; ?>" <?php check_select($select_origincarrier,  $v6->carrierid); ?> ><?php echo $v6->carriername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                         <div class="form-group has-feedback">
                            <label for="pickuptime"><?php _trans('pickup_date'); ?></label>

                            <div class="input-group">
                                <input type="text" name="pickuptime" id="pickuptime"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_shipping->form_value('pickuptime', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="punotes"><?php _trans('pickup_notes'); ?></label>

                            <div class="controls">
                                <input type="text" name="punotes" id="punotes" class="form-control" value="<?php echo $this->mdl_shipping->form_value('punotes', true); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bol"><?php _trans('bol'); ?></label>

                            <div class="controls">
                                <input type="text" name="bol" id="bol" class="form-control" value="<?php echo $this->mdl_shipping->form_value('bol', true); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="destcarrier"><?php _trans('destination_carrier'); ?></label>
                            <div class="controls">
                                <select name="destcarrier" id="destcarrier" class="form-control select2">
                                    <option value=""><?php _trans('select_destination_carrier'); ?></option>
                                    <?php foreach ($destcarrier as $k7 => $v7) { ?>
                                        <option value="<?php echo $v7->carrierid; ?>" <?php check_select($select_destcarrier,  $v7->carrierid); ?> ><?php echo $v7->carriername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="trackingstatus"><?php _trans('trackingstatus'); ?></label>

                            <div class="controls">
                                <input type="text" name="trackingstatus" id="trackingstatus" class="form-control" value="<?php echo $this->mdl_shipping->form_value('trackingstatus', true); ?>">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="trackingdetail"><?php _trans('trackingdetail'); ?></label>

                            <div class="controls">
                                <input type="text" name="trackingdetail" id="trackingdetail" class="form-control" value="<?php echo $this->mdl_shipping->form_value('trackingdetail', true); ?>">
                            </div>
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
                            <label for="trailernum"><?php _trans('trailer_number'); ?></label>

                            <div class="controls">
                                <input type="text" name="trailernum" id="trailernum" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('trailernum', true); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="netweight"><?php _trans('net_weight'); ?></label>

                            <div class="controls">
                                <input type="text" name="netweight" id="netweight" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('netweight', true); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="seal"><?php _trans('seal_number'); ?></label>

                            <div class="controls">
                                <input type="text" name="seal" id="seal" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('seal', true); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="piececount"><?php _trans('piece_count'); ?></label>

                            <div class="controls">
                                <input type="text" name="piececount" id="piececount" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('piececount', true); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="trailersize"><?php _trans('trailer_size'); ?></label>

                            <div class="controls">
                                <select name="trailersize" id="trailersize" class="form-control select2">
                                    <option value=""><?php _trans('select_trailersize'); ?></option>
                                    <?php foreach ($trailersize as $k11 => $v11) { ?>
                                        <option value="<?php echo $v11->trailersizeid; ?>" <?php check_select($select_trailersize, $v11->trailersizeid); ?> ><?php echo $v11->size; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="trailertype"><?php _trans('trailer_type'); ?></label>
                            <div class="controls">
                                <select name="trailertype" id="trailertype" class="form-control select2">
                                    <option value=""><?php _trans('select_trailertype'); ?></option>
                                    <?php foreach ($trailertype as $k8 => $v8) { ?>
                                        <option value="<?php echo $v8->trailertypeid; ?>" <?php check_select($select_trailertype, $v8->trailertypeid); ?> ><?php echo $v8->type; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="etadate"><?php _trans('eta_date'); ?></label>

                            <div class="input-group">
                                <input type="text" name="etadate" id="etadate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_shipping->form_value('etadate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="notes"><?php _trans('notes'); ?></label>

                            <div class="controls">
                                <textarea type="text" name="notes" id="notes" class="form-control" rows="2"><?php echo $this->mdl_shipping->form_value('notes', true); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="trailersize"><?php _trans('instructions'); ?></label>

                            <div class="controls">
                                <textarea type="text" name="instructions" id="instructions" class="form-control" rows="2"><?php echo $this->mdl_shipping->form_value('instructions', true); ?></textarea>
                            </div>
                        </div>

                        

                      
                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <?php _trans('personal_information'); ?>
                    </div>

                    <div class="panel-body">
                        



                        <div class="form-group has-feedback">
                            <label for="deldate"><?php _trans('deliverydate'); ?></label>
                           
                            <div class="input-group">
                                <input type="text" name="deldate" id="deldate"
                                       class="form-control datepicker"
                                       value="<?php echo $this->mdl_shipping->form_value('deldate', true); ?>">
                                <span class="input-group-addon">
                                <i class="fa fa-calendar fa-fw"></i>
                            </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="delappt"><?php _trans('deliveryappt'); ?></label>

                            <div class="controls">
                                <input type="text" name="delappt" id="delappt" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('delappt', true); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="delnotes"><?php _trans('delivery_notes'); ?></label>

                            <div class="controls">
                                <textarea type="text" name="delnotes" id="delnotes" class="form-control" rows="2"><?php echo $this->mdl_shipping->form_value('delnotes', true); ?></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="rate"><?php _trans('rate'); ?></label>

                            <div class="controls">
                                <input type="text" name="rate" id="rate" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('rate', true); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="fsc"><?php _trans('fsc'); ?></label>

                            <div class="controls">
                                <input type="text" name="fsc" id="fsc" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('fsc', true); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="currency"><?php _trans('currency'); ?></label>

                            <div class="controls">
                                <input type="text" name="currency" id="currency" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('currency', true); ?>">
                            </div>
                        </div>

                        

                     

                            

                       
                    </div>

                </div>

            </div>
            <div class="col-xs-12 col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php _trans('tax_information'); ?>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label for="railcompleted"><?php _trans('railcompleted'); ?></label>
                            <label class="radio-inline">
                              <input type="radio" name="railcompleted" value="1" <?php echo check_select($select_railcompleted,1,"==",true); ?>><?php _trans('active'); ?>
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="railcompleted" value="0" <?php echo check_select($select_railcompleted,0,"==",true); ?>><?php _trans('inactive'); ?>
                          </label>
                        </div>

                        <div class="form-group">
                            <label for="truckcompleted"><?php _trans('truckcompleted'); ?></label>
                            <label class="radio-inline">
                              <input type="radio" name="truckcompleted" value="1" <?php echo check_select($select_truckcompleted,1,"==",true); ?>><?php _trans('active'); ?>
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="truckcompleted" value="0" <?php echo check_select($select_truckcompleted,0,"==",true); ?>><?php _trans('inactive'); ?>
                          </label>
                        </div>


                        <div class="form-group">
                            <label for="delivered"><?php _trans('delivered'); ?></label>
                            <label class="radio-inline">
                              <input type="radio" name="delivered" value="1" <?php echo check_select($select_delivered,1,"==",true); ?> ><?php _trans('active'); ?>
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="delivered" value="0" <?php echo check_select($select_delivered,0,"==",true); ?> ><?php _trans('inactive'); ?>
                          </label>
                        </div>


                        <div class="form-group">
                            <label for="customscleared"><?php _trans('customscleared'); ?></label>
                            <label class="radio-inline">
                              <input type="radio" name="customscleared" value="1" <?php echo check_select($select_customscleared,1,"==",true); ?> ><?php _trans('active'); ?>
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="customscleared" value="0" <?php echo check_select($select_customscleared,0,"==",true); ?> ><?php _trans('inactive'); ?>
                          </label>
                        </div>

                        <div class="form-group">
                            <label for="invoicesubmitted"><?php _trans('invoicesubmitted'); ?></label>
                            <label class="radio-inline">
                              <input type="radio" name="invoicesubmitted" value="1" <?php echo check_select($select_invoicesubmitted,1,"==",true); ?>><?php _trans('active'); ?>
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="invoicesubmitted" value="0" <?php echo check_select($select_invoicesubmitted,0,"==",true); ?>><?php _trans('inactive'); ?>
                          </label>
                        </div>


                        <div class="form-group">
                            <label for="dispatcher"><?php _trans('dispatcher'); ?></label>
                            <div class="controls">
                                <select name="dispatcher" id="dispatcher" class="form-control select2">
                                    <option value=""><?php _trans('select_dispatcher'); ?></option>
                                   <?php foreach ($dispatcher as $k9 => $v9) { ?>
                                        <option value="<?php echo $v9->dispatcherid; ?>" <?php check_select($select_dispatcher, $v9->dispatcherid); ?> ><?php echo $v9->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="brokerid"><?php _trans('customs_broker'); ?></label>
                            <div class="controls">
                                <select name="brokerid" id="brokerid" class="form-control select2">
                                    <option value=""><?php _trans('select_customer_broker'); ?></option>
                                    <?php foreach ($brokerid as $k10 => $v10) { ?>
                                        <option value="<?php echo $v10->brokerid; ?>" <?php check_select($select_brokerid, $v10->brokerid); ?> ><?php echo $v10->brokername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="additionalloadsid"><?php _trans('additional_loads'); ?></label>

                            <div class="controls">
                                <input type="text" name="additionalloadsid" id="additionalloadsid" class="form-control"
                                       value="<?php echo $this->mdl_shipping->form_value('additionalloadsid', true); ?>">
                            </div>
                        </div>

                      
                    </div>

                </div>

            </div>
        </div>
    </div>
</form>
