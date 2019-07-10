

<div id="headerbar">
    <h1 class="headerbar-title"><?php _trans('carrier_name'); ?> : <?=$carrier->carriername?></h1>


    <div class="headerbar-item pull-right">
        <div class="btn-group btn-group-sm">
            
            
            <a href="<?php echo site_url('carriers/form/'.$carrier->carrierid); ?>"
               class="btn btn-default">
                <i class="fa fa-edit"></i> <?php _trans('edit'); ?>
            </a>
           
            <a class="btn btn-danger" href="<?php echo site_url('carriers/delete/'.$carrier->carrierid); ?>" onclick="confirm('confirm delete')" > <i class="fa fa-trash-o"></i> <?php _trans('delete'); ?></a>
     
        </div>
    </div>

</div>
<div id="content" class="tabbable tabs-below no-padding">
    <div class="tab-content no-padding">

        <div id="clientDetails" class="tab-pane tab-rich-content active">

            <?php $this->layout->load_view('layout/alerts'); ?>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h3><?php _trans('carrier_name'); ?> : <?=$carrier->carriername?></h3>
                    <style type="text/css">
                        .intro tbody tr th,td{
                            border-top: none !important;
                        }
                    </style>
                    <table class="table intro" style="margin-top: 14px;">
                         <tr>
                            <th>
                              <?php _trans('address1'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->address1?>
                            </td>
                        </tr>
                         <tr>
                            <th>
                              <?php _trans('address2'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->address2?>
                            </td>
                        </tr>
                         <tr>
                            <th>
                              <?php _trans('city'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->city?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                              <?php _trans('prov'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->state?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              <?php _trans('country'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->country?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('postal'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->postal?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('contact'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->contact?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('phone'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$carrier->phone?>
                            </td>
                        </tr>

                    </table>



                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <table class="table table-bordered no-margin">
                        <tr>
                            <th>
                               <?php _trans('fax'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$carrier->fax?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                               <?php _trans('email'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->email?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('website'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->website?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               <?php _trans('insuranceconfirm'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->insuranceconfirm?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              <?php _trans('insuranceexp'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->insuranceexp?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              <?php _trans('WSIB'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->WSIB?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                               <?php _trans('WCB'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->WCB?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('notes'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->notes?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('lanes'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->lanes?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                              <?php _trans('rating'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$carrier->rating?>
                            </td>
                        </tr>

                       


                       
                           
                        
                    </table>

                </div>
            </div>

            <hr>
           
       
    </div>

</div>
