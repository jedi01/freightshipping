

<div id="headerbar">
    <h1 class="headerbar-title"><?php _trans('receivername'); ?> : <?=$receiver->receivername?></h1>


    <div class="headerbar-item pull-right">
        <div class="btn-group btn-group-sm">
            
            
            <a href="<?php echo site_url('receivers/form/'.$receiver->receiverid); ?>"
               class="btn btn-default">
                <i class="fa fa-edit"></i> <?php _trans('edit'); ?>
            </a>
           
            <a class="btn btn-danger" href="<?php echo site_url('receivers/delete/'.$receiver->receiverid); ?>" onclick="confirm('confirm delete')" > <i class="fa fa-trash-o"></i> <?php _trans('delete'); ?></a>
     
        </div>
    </div>

</div>
<div id="content" class="tabbable tabs-below no-padding">
    <div class="tab-content no-padding">

        <div id="clientDetails" class="tab-pane tab-rich-content active">

            <?php $this->layout->load_view('layout/alerts'); ?>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h3><?php _trans('receivername'); ?> : <?=$receiver->receivername?></h3>
                    <style type="text/css">
                        .intro tbody tr th,td{
                            border-top: none !important;
                        }
                    </style>
                    <table class="table intro" style="margin-top: 14px;">
                         <tr>
                            <th>
                              <?php _trans('address'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$receiver->address?>
                            </td>
                        </tr>
                
                         <tr>
                            <th>
                              <?php _trans('city'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$receiver->city?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                              <?php _trans('prov'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$receiver->prov?>
                            </td>
                        </tr>


                        <tr>
                            <th>
                              <?php _trans('country'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$receiver->country?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <?php _trans('postal'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$receiver->postal?>
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
                               <?=$receiver->fax?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                               <?php _trans('email'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$receiver->email?>
                            </td>
                        </tr>

                         


                         <tr>
                            <th>
                              <?php _trans('notes'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$receiver->notes?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                              <?php _trans('contact'); ?>
                            </th>
                            <td class="td-amount">
                                <?=$receiver->contact?>
                            </td>
                        </tr>

                         <tr>
                            <th>
                              <?php _trans('phone'); ?>
                            </th>
                            <td class="td-amount">
                               <?=$receiver->phone?>
                            </td>
                        </tr>

                     

                       


                       
                           
                        
                    </table>

                </div>
            </div>

            <hr>
           
       
    </div>

</div>
