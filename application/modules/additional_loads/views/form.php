

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

    <input type="hidden" name="id" value="<?=@$id?>">

    <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>" value="<?php echo $this->security->get_csrf_hash() ?>">

    <div id="headerbar">
        <h1 class="headerbar-title"><?php _trans('Additional Loads'); ?></h1>
        <?php $this->layout->load_view('layout/header_buttons'); ?>
    </div>

    <div id="content">

        <?php $this->layout->load_view('layout/alerts'); ?>

        <input class="hidden" name="is_update" type="hidden"
            <?php  if ($this->mdl_additional_loads->form_value('is_update')) {
                echo 'value="1"';
            } else {
                echo 'value="0"';
            } ?>
        >

        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <?php _trans('Additional Loads information'); ?>
                    </div>

                    <div class="panel-body">

                        
                        <div class="form-group">
                            <label for="shippingorderid"><?php _trans('Customer'); ?></label>
                            <div class="controls">
                                <select name="customer" id="customer" class="form-control select2">
                                    <option value=""><?php _trans('Select Customer'); ?></option>
                                    <?php foreach ($client as $k => $v) { ?>
                                    <option value="<?php echo $v->client_id; ?>" 
                                    <?php check_select($this->mdl_additional_loads->form_value('customer', true) , $v->client_id); ?>    

                                        ><?php echo $v->client_name; ?>
                                            
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                         <div class="form-group has-feedback">
                            <label for="Pickupdate"><?php _trans('Pickupdate'); ?></label>

                            <div class="input-group">
                                <input type="text" name="pickupdate" id="pickupdate"
                                class="form-control datepicker" value="<?php echo $this->mdl_additional_loads->form_value('pickupdate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>
                     <div class="form-group">
                            <label for="shipper"><?php _trans('Shipper'); ?></label>
                            <div class="controls">
                                <select name="shipper" id="shipper" class="form-control select2">
                                    <option value=""><?php _trans('Select Shipper'); ?></option>
                                    <?php foreach ($shippers as $k => $v) { ?>
                                    <option value="<?php echo $v->shipperid; ?>"
                                        <?php check_select($this->mdl_additional_loads->form_value('shipper', true) , $v->shipperid); ?>    >
                                        <?php echo $v->shippername; ?>
                                            

                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="receiver"><?php _trans('Receiver'); ?></label>
                            <div class="controls">
                                <select name="receiver" id="receiver" class="form-control select2">
                                    <option value=""><?php _trans('Select Receiver'); ?></option>
                                    <?php foreach ($receivers as $k => $v) { ?>
                                    <option value="<?php echo $v->receiverid; ?>"
                                        <?php check_select($this->mdl_additional_loads->form_value('receiver', true) , $v->receiverid); ?>  
                                        >
                                        <?php echo $v->receivername; ?>
                                            
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="origincarrier"><?php _trans('Origin Carrier'); ?></label>
                            <div class="controls">
                                <select name="origincarrier" id="origincarrier" class="form-control select2">
                                    <option value=""><?php _trans('Select Origin Carrier'); ?></option>
                                    <?php foreach ($carriers as $k => $v) { ?>
                                    <option value="<?php echo $v->carrierid; ?>" 
                                        <?php check_select($this->mdl_additional_loads->form_value('origincarrier', true) , $v->carrierid); ?>
                                        >
                                        <?php echo $v->carriername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="pickuptime"><?php _trans('Pickuptime'); ?></label>

                            <div class="input-group">
                                <input type="text" name="pickuptime" id="pickuptime"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_additional_loads->form_value('pickuptime', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        <div class="form-group">
                            <label for="shipping_order_id"><?php _trans('Shipping Order ID'); ?></label>
                            <div class="controls">
                                <select name="shipping_order_id" id="shipping_order_id" class="form-control select2">
                                    <option value=""><?php _trans('Select Order id'); ?></option>
                                    <?php foreach ($shipping as $k => $v) { ?>
                                    <option value="<?php echo $v->shippingorderid; ?>"
                                        <?php check_select($this->mdl_additional_loads->form_value('shipping_order_id', true) , $v->shippingorderid); ?>
                                       <?php check_select(@$_GET['shipping_id'] == $v->shippingorderid) ?>  >
                                        <?php echo $v->shippingorderid; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="punotes"><?php _trans('Punotes'); ?></label>
                            <input id="punotes" name="punotes" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('punotes', true); ?>">
                        </div>


                        <div class="form-group has-feedback">
                            <label for="orderdate"><?php _trans('Orderdate'); ?></label>

                            <div class="input-group">
                                <input type="text" name="orderdate" id="orderdate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_additional_loads->form_value('orderdate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="bol"><?php _trans('Bol'); ?></label>
                            <input id="bol" name="bol" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('bol', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="orderstatus"><?php _trans('Orderstatus'); ?></label>
                            <div class="controls">
                                <select name="orderstatus" id="orderstatus" class="form-control select2">
                                    <option value=""><?php _trans('Select Order Status'); ?></option>
                                    <?php foreach ($orderstatus as $k => $v) { ?>
                                    <option value="<?php echo $v->orderstatusid; ?>"
                                        <?php check_select($this->mdl_additional_loads->form_value('orderstatus', true) , $v->orderstatusid); ?>>
                                        <?php echo $v->orderstatus; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="trailernum"><?php _trans('Trailernum'); ?></label>
                            <input id="trailernum" name="trailernum" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('trailernum', true); ?>">
                        </div>
                         <div class="form-group">
                            <label for="netweight"><?php _trans('Netweight'); ?></label>
                            <input id="netweight" name="netweight" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('netweight', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="seal"><?php _trans('Seal'); ?></label>
                            <input id="seal" name="seal" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('seal', true); ?>">
                        </div>  
                        <div class="form-group">
                            <label for="piececount"><?php _trans('Piececount'); ?></label>
                            <input id="piececount" name="piececount" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('piececount', true); ?>">
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <?php _trans('Additional Loads information'); ?>
                    </div>

                    <div class="panel-body">

                         <div class="form-group">
                            <label for="trailersize"><?php _trans('Trailersize'); ?></label>
                            <div class="controls">
                                <select name="trailersize" id="trailersize" class="form-control select2">
                                    <option value=""><?php _trans('Select Trailer Size'); ?></option>
                                    <?php foreach ($trailersize as $k => $v) { ?>
                                    <option value="<?php echo $v->trailersizeid; ?>"
                                         <?php check_select($this->mdl_additional_loads->form_value('trailersize', true) , $v->trailersizeid); ?>>
                                        <?php echo $v->size; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="trailertype"><?php _trans('Trailertype'); ?></label>
                            <div class="controls">
                                <select name="trailertype" id="trailertype" class="form-control select2">
                                    <option value=""><?php _trans('Select Trailer Type'); ?></option>
                                    <?php foreach ($trailertype as $k => $v) { ?>
                                    <option value="<?php echo $v->trailertypeid; ?>" 
                                        <?php check_select($this->mdl_additional_loads->form_value('trailertype', true) , $v->trailertypeid); ?>>
                                        <?php echo $v->type; ?>
                                            
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="notes"><?php _trans('Notes'); ?></label>
                            <textarea name="notes" id="notes" class="form-control"><?php echo $this->mdl_additional_loads->form_value('notes', true); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="instructions"><?php _trans('Instructions'); ?></label>
                            <textarea name="instructions" id="instructions" class="form-control"><?php echo $this->mdl_additional_loads->form_value('instructions', true); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="etadate"><?php _trans('Etadate'); ?></label>
                             <div class="input-group">
                                <input type="text" name="etadate" id="etadate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_additional_loads->form_value('etadate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="destcarrier"><?php _trans('Destination Carrier'); ?></label>
                            <div class="controls">
                                <select name="destcarrier" id="destcarrier" class="form-control select2">
                                    <option value=""><?php _trans('Destination Carrier'); ?></option>
                                    <?php foreach ($select_destcarrier as $k => $v) { ?>
                                    <option value="<?php echo $v->carrierid; ?>"
                                         <?php check_select($this->mdl_additional_loads->form_value('destcarrier', true) , $v->carrierid); ?>>
                                        <?php echo $v->carriername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="deldate"><?php _trans('Deldate'); ?></label>
                             <div class="input-group">
                                <input type="text" name="deldate" id="deldate"
                                class="form-control datepicker"
                                value="<?php echo $this->mdl_additional_loads->form_value('deldate', true); ?>">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="delappt"><?php _trans('Delappt'); ?></label>
                            <input id="delappt" name="delappt" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('delappt', true); ?>">
                        </div>
                           <div class="form-group">
                            <label for="delnotes"><?php _trans('Delnotes'); ?></label>
                            <textarea name="delnotes" id="delnotes" class="form-control"><?php echo $this->mdl_additional_loads->form_value('delnotes', true); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rate"><?php _trans('Rate'); ?></label>
                            <input id="rate" name="rate" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('rate', true); ?>">
                        </div>
                         <div class="form-group">
                            <label for="fsc"><?php _trans('Fsc'); ?></label>
                            <input id="fsc" name="fsc" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('fsc', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="currency"><?php _trans('Currency'); ?></label>
                            <div class="controls">
                                <select name="currency" id="currency" class="form-control select2">
                                    <option value=""><?php _trans('Select Currency'); ?></option>
                                    <option value="USD" <?php check_select($this->mdl_additional_loads->form_value('currency', true) , "USD"); ?>><?php _trans('USD'); ?></option>
                                     <option value="CAD" <?php check_select($this->mdl_additional_loads->form_value('currency', true) , "CAD"); ?>><?php _trans('CAD'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="railcompleted"><?php _trans('Railcompleted'); ?></label>
                            <input id="railcompleted" name="railcompleted" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('railcompleted', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="truckcompleted"><?php _trans('Truckcompleted'); ?></label>
                            <input id="truckcompleted" name="truckcompleted" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('truckcompleted', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="delivered"><?php _trans('Delivered'); ?></label>
                            <input id="delivered" name="delivered" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('delivered', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="customscleared"><?php _trans('Customscleared'); ?></label>
                            <input id="customscleared" name="customscleared" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('customscleared', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="invoicesubmitted"><?php _trans('Invoicesubmitted'); ?></label>
                            <input id="invoicesubmitted" name="invoicesubmitted" type="text"  maxlength="13" class="form-control"  value="<?php echo $this->mdl_additional_loads->form_value('invoicesubmitted', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="Brokerid"><?php _trans('Brokerid'); ?></label>
                            <div class="controls">
                                <select name="Brokerid" id="Brokerid" class="form-control select2">
                                    <option value=""><?php _trans('select Broker id'); ?></option>
                                    <?php foreach ($brokerid as $k => $v) { ?>
                                    <option value="<?php echo $v->brokerid; ?>"
                                        <?php check_select($this->mdl_additional_loads->form_value('Brokerid', true) , $v->brokerid); ?>
                                        ><?php echo $v->brokername; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>



                        

                    </div>

                </div>
        </div>    


    </div>
</form>
