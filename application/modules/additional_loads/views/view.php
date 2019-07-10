

<div id="headerbar">
    <h1 class="headerbar-title">Additional Loads Number : <?=$additional_loads->additional_id?></h1>
<?php //print_r($additional_loads); ?>

    <div class="headerbar-item pull-right">
        <div class="btn-group btn-group-sm">
            
            
            <a href="<?php echo site_url('additional_loads/form/'.$additional_loads->additional_id); ?>"
               class="btn btn-default">
                <i class="fa fa-edit"></i> <?php _trans('edit'); ?>
            </a>
           
            <a class="btn btn-danger" href="<?php echo site_url('additional_loads/delete/'.$additional_loads->additional_id); ?>" onclick="confirm('confirm delete')" > <i class="fa fa-trash-o"></i> <?php _trans('delete'); ?></a>
     
        </div>
    </div>

</div>
<div id="content" class="tabbable tabs-below no-padding">
   <div class="tab-content no-padding">

        <div id="clientDetails" class="tab-pane tab-rich-content active">

            <?php $this->layout->load_view('layout/alerts'); ?>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h3><?php _trans('order_id'); ?> : <?=$additional_loads->additional_id?></h3>
                    <h5><?php _trans('pickupdate'); ?> : <?=$additional_loads->pickupdate?></h5>
                    <h5><?php _trans('shipper'); ?>: <?=$additional_loads->shipper?></h5>
                    <h5><?php _trans('receiver'); ?> : <?=$additional_loads->receiver?></h5>
                    <style type="text/css">
                        .intro tbody tr th,td{
                            border-top: none !important;
                        }
                    </style>
                    <table class="table intro" style="margin-top: 14px;">
                        <tr>
                            <th>
                              <?php _trans('origincarrier'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->origincarrier?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('pickuptime'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->pickuptime?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('shipping_order_id'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$additional_loads->shipping_order_id?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('trailersize'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$additional_loads->trailersize?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('trailertype'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$additional_loads->trailertype?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('notes'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$additional_loads->notes?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('instructions'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$additional_loads->instructions?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('etadate'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$additional_loads->etadate?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('destcarrier'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$additional_loads->destcarrier?>
                            </td>
                        </tr>



                    </table>



                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <table class="table table-bordered no-margin">
                        <tr>
                            <th>
                               <?php _trans('punotes'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$additional_loads->punotes?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                               <?php _trans('orderdate'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->orderdate?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('bol'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->bol?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               <?php _trans('orderstatus'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->orderstatus?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              <?php _trans('trailernum'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->trailernum?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              <?php _trans('netweight'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->netweight?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               <?php _trans('seal'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->seal?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('piececount'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->piececount?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('deldate'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->deldate?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('delappt'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->delappt?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('delnotes'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->delnotes?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('rate'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->rate?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('fsc'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->fsc?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('currency'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->currency?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('railcompleted'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->railcompleted?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('truckcompleted'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->truckcompleted?>
                            </td>
                        </tr>
                         <tr>
                            <th>
                              <?php _trans('delivered'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->delivered?>
                            </td>
                        </tr>
                         <tr>
                            <th>
                              <?php _trans('customscleared'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->customscleared?>
                            </td>
                        </tr>
                         <tr>
                            <th>
                              <?php _trans('invoicesubmitted'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->invoicesubmitted?>
                            </td>
                        </tr>
                         <tr>
                            <th>
                              <?php _trans('Brokerid'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$additional_loads->Brokerid?>
                            </td>
                        </tr>



                       


                       
                           
                        
                    </table>

                </div>
            </div>

            <hr>
           
       
    </div>

</div>
