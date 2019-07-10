

<div id="headerbar">
    <h1 class="headerbar-title"><?=$shipping->client_name?></h1>


    <div class="headerbar-item pull-right">
        <div class="btn-group btn-group-sm">
            
            
            <a href="<?php echo site_url('shipping/form/'.$shipping->id); ?>"
               class="btn btn-default">
                <i class="fa fa-edit"></i> <?php _trans('edit'); ?>
            </a>
           
            <a class="btn btn-danger" href="<?php echo site_url('shipping/delete/'.$shipping->id); ?>" onclick="confirm('confirm delete')" > <i class="fa fa-trash-o"></i> <?php _trans('delete'); ?></a>
     
        </div>
    </div>

</div>
<div id="content" class="tabbable tabs-below no-padding">
    <div class="tab-content no-padding">

        <div id="clientDetails" class="tab-pane tab-rich-content active">

            <?php $this->layout->load_view('layout/alerts'); ?>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <input type="hidden" id ="id" value="<?php echo $shipping->id; ?>">
                    <h3><?=$shipping->client_name?></h3>
                    <h5>Order Number :<?=$shipping->shippingorderid?></h5>
                    <h5>Customer Number:<?=$shipping->customernumber?></h5>
                    <h5>Pickup Date :<?=$shipping->pickupdate?></h5>
                    <style type="text/css">
                        .intro tbody tr th,td{
                            border-top: none !important;
                        }
                    </style>
                    <table class="table intro" style="margin-top: 14px;">
                        <tr>
                            <th>
                               Status
                            </th>
                            <td class="td-amount">
                                <?=$shipping->orderstatus?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              Shipper
                            </th>
                            <td class="td-amount">
                                <?=$shipping->shippername?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              Receiver
                            </th>
                            <td class="td-amount">
                               <?=$shipping->receivername?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                               Destination Hub
                            </th>
                            <td class="td-amount">
                                <?=$shipping->orderstatus?>
                            </td>
                        </tr>


                         <tr>
                            <th>
                              Rail Routing
                            </th>
                            <td class="td-amount">
                                <?=$shipping->routing?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                            Origin Carrier
                            </th>
                            <td class="td-amount">
                                <?=$shipping->carriername?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              Destination Carrier
                            </th>
                            <td class="td-amount">
                                <?=$shipping->routing?>
                            </td>
                        </tr>

                        <tr>
                            <th class="td-amount">
                             Dispatcher
                            </th>
                            <td class="td-amount">
                                <?=$shipping->name?>
                            </td>
                        </tr>
                       


                       <tr>
                            <th class="td-amount">
                              Seal Number
                            </th>
                            <td class="td-amount">
                                <?=$shipping->seal?>
                            </td>
                        </tr>

                        <tr>
                            <th class="td-amount">
                             BOL
                            </th>
                            <td class="td-amount">
                                <?=$shipping->bol?>
                            </td>
                        </tr>


                        <tr>
                            <th class="td-amount">
                             Delivered
                            </th>
                            <td class="td-amount">
                                <?=$shipping->delivered?>
                            </td>
                        </tr>
                       

                    </table>



                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <table class="table table-bordered no-margin">
                        <tr>
                            <th>
                               Order Date
                            </th>
                            <td class="td-amount">
                               <?=$shipping->orderdate?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                               P/U Date
                            </th>
                            <td class="td-amount">
                                <?=$shipping->pickuptime?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              Delivery Date
                            </th>
                            <td class="td-amount">
                                <?=$shipping->deldate?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               ETA Date
                            </th>
                            <td class="td-amount">
                                <?=$shipping->etadate?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               Net Weight
                            </th>
                            <td class="td-amount">
                                <?=$shipping->netweight?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              Delivery Appt
                            </th>
                            <td class="td-amount">
                                <?=$shipping->delappt?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               Rate
                            </th>
                            <td class="td-amount">
                                <?=$shipping->rate?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              FSC
                            </th>
                            <td class="td-amount">
                                <?=$shipping->fsc?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                               Currency
                            </th>
                            <td class="td-amount">
                                <?=$shipping->currency?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                               Invoicesubmitted
                            </th>
                            <td class="td-amount">
                                <?=$shipping->invoicesubmitted?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               Additional Loads
                            </th>
                            <td class="td-amount">
                                <?=$shipping->additionalloadsid?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               Piece Count
                            </th>
                            <td class="td-amount">
                                <?=$shipping->piececount?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                              Customs Broker
                            </th>
                            <td class="td-amount">
                                <?=$shipping->brokername?>
                            </td>
                        </tr>


                        
                           
                        
                    </table>

                </div>
            </div>

            <hr>
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">

                    <table class="table table-bordered no-margin">
                        <tr>
                            <th>
                               Trailer Number
                            </th>
                            <td class="td-amount">
                                <?=$shipping->trailernum?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              Trailer Size
                            </th>
                            <td class="td-amount">
                               <?=$shipping->size?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              Trailer Type
                            </th>
                            <td class="td-amount">
                                <?=$shipping->type?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                               Customscleared
                            </th>
                            <td class="td-amount">
                                <?=$shipping->customscleared?>
                            </td>
                        </tr>
  
                        
                    </table>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <table class="table table-bordered no-margin">
                        <tr>
                            <th>
                               Trackingstatus
                            </th>
                            <td class="td-amount">
                                <?=$shipping->trackingstatus?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              Trackingdetail
                            </th>
                            <td class="td-amount">
                               <?=$shipping->trackingdetail?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                             Railcompleted
                            </th>
                            <td class="td-amount">
                                <?=$shipping->railcompleted?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                               Truckcompleted
                            </th>
                            <td class="td-amount">
                                <?=$shipping->truckcompleted?>
                            </td>
                        </tr>


                         
                           
                        
                    </table>

                </div>
            </div>

         <hr>

         <div class="row">
            <div class="col-md-12">
                <p><b>Notes:</b> <?=$shipping->notes?></p>
                <p><b>P/U Notes:</b> <?=$shipping->punotes?></p>
                <p><b>Delivery Notes:</b> <?=$shipping->delnotes?></p>
                <p><b>Instructions:</b> <?=$shipping->instructions?></p>
            </div>
        </div>

       

       
    </div>

</div>
