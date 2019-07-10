

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
        <h1 class="headerbar-title"><?php _trans('shipper_form'); ?></h1>
        <?php $this->layout->load_view('layout/header_buttons'); ?>
    </div>

    <div id="content">

        <?php $this->layout->load_view('layout/alerts'); ?>

        <input class="hidden" name="is_update" type="hidden"
            <?php if ($this->mdl_shippers->form_value('is_update')) {
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
                            <label for="shippername"><?php _trans('shippername'); ?></label>
                            <input id="shippername" name="shippername" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('shippername', true); ?>">
                        </div>
                        <div class="form-group">
                            <label for="address"><?php _trans('address'); ?></label>
                            <input id="address" name="address" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('address', true); ?>">
                        </div>
                
                        <div class="form-group">
                            <label for="city"><?php _trans('city'); ?></label>
                            <input id="city" name="city" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('city', true); ?>">
                        </div>

                         <div class="form-group">
                            <label for="prov"><?php _trans('prov'); ?></label>
                            <div class="controls">
                                <select name="prov" id="prov" class="form-control select2">
                                    <option value=""><?php _trans('select_prov'); ?></option>
                                    <?php foreach ($states as $k5 => $v5) { ?>
                                        <option value="<?php echo $v5->state_id; ?>" <?php check_select($select_state, $v5->state_id); ?> ><?php echo $v5->state; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="country"><?php _trans('country'); ?></label>
                            <input id="country" name="country" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('country', true); ?>">
                        </div>
                          <div class="form-group">
                            <label for="postal"><?php _trans('postal'); ?></label>
                            <input id="postal" name="postal" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('postal', true); ?>">
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
                            <label for="contact"><?php _trans('contact'); ?></label>
                            <input id="contact" name="contact" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('contact', true); ?>">
                        </div>


                         <div class="form-group">
                            <label for="phone"><?php _trans('phone'); ?></label>
                            <input id="phone" name="phone" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('phone', true); ?>">
                        </div>

                        <div class="form-group">
                            <label for="fax"><?php _trans('fax'); ?></label>
                            <input id="fax" name="fax" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('fax', true); ?>">
                        </div>

                         <div class="form-group">
                            <label for="email"><?php _trans('email'); ?></label>
                            <input id="email" name="email" type="text" class="form-control"  value="<?php echo $this->mdl_shippers->form_value('email', true); ?>">
                        </div>


                         <div class="form-group">
                            <label for="notes"><?php _trans('notes'); ?></label>
                            <textarea  id="notes" name="notes" class="form-control" rows="5"><?php echo $this->mdl_shippers->form_value('notes', true); ?></textarea> 
                        </div>

                         


                       




                      
                    </div>

                </div>

            </div>
        </div>


    </div>
</form>
