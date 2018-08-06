<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                        <a href="<?php echo base_url('ticket/refund/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable2 table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('booking_id') ?></th>
                                <th><?php echo display('passenger_id') ?></th>
                                <th><?php echo display('cancelation_fees') ?></th>
                                <th><?php echo display('causes') ?></th> 
                                <th><?php echo display('comment') ?></th> 
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($refunds)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($refunds as $refund) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $refund->tkt_booking_id_no ?></td>
                                <td><?php echo $refund->tkt_passenger_id_no ?></td>
                                <td><?php echo $currency; ?><?php echo $refund->cancelation_fees ?></td>
                                <td><?php echo $refund->causes ?></td>
                                <td><?php echo $refund->comment ?></td>
                                <td> 

                                <?php if($this->permission->method('ticket','delete')->access()): ?>
                                    <a href="<?php echo base_url("ticket/refund/delete/$refund->tkt_booking_id_no") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                    <?= $links ?>
                </div>
            </div> 
        </div>
    </div>
</div>
 