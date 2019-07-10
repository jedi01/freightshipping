

<div id="headerbar">
    <h1 class="headerbar-title">Order Number : <?=$move->shippingorderid?></h1>


    <div class="headerbar-item pull-right">
        <div class="btn-group btn-group-sm">
            
            
            <a href="<?php echo site_url('moves/form/'.$move->movesid); ?>"
               class="btn btn-default">
                <i class="fa fa-edit"></i> <?php _trans('edit'); ?>
            </a>
           
            <a class="btn btn-danger" href="<?php echo site_url('moves/delete/'.$move->movesid); ?>" onclick="confirm('confirm delete')" > <i class="fa fa-trash-o"></i> <?php _trans('delete'); ?></a>
     
        </div>
    </div>

</div>
<div id="content" class="tabbable tabs-below no-padding">
    <div class="tab-content no-padding">

        <div id="clientDetails" class="tab-pane tab-rich-content active">

            <?php $this->layout->load_view('layout/alerts'); ?>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h3><?php _trans('order_id'); ?> : <?=$move->shippingorderid?></h3>
                    <h5><?php _trans('carrier'); ?> : <?=$move->carriername?></h5>
                    <h5><?php _trans('shipper'); ?>: <?=$move->shippername?></h5>
                    <h5><?php _trans('receiver'); ?> : <?=$move->receivername?></h5>
                    <style type="text/css">
                        .intro tbody tr th,td{
                            border-top: none !important;
                        }
                    </style>
                    <table class="table intro" style="margin-top: 14px;">
                        <tr>
                            <th>
                              <?php _trans('moverate'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->moverate?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('tax'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->movetaxrate?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('fsc'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$move->movefsc?>
                            </td>
                        </tr>

                    </table>



                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <table class="table table-bordered no-margin">
                        <tr>
                            <th>
                               <?php _trans('P/U_number'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$move->pickupnum?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                               <?php _trans('service_code'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->servicecode?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('pickup_date'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->pickupdate?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               <?php _trans('deliver_date'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->deldate?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              <?php _trans('P/U_appt'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->puappt?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              <?php _trans('deliverytime'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->delappt?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               <?php _trans('notes'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->mvnotes?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('instructions'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$move->instructions?>
                            </td>
                        </tr>

                       


                       
                           
                        
                    </table>

                </div>
            </div>

            <hr>
           
       
    </div>

</div>
