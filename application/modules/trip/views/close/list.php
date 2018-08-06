<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                        <a href="<?php echo base_url('trip/assign/index') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable2 table table-bordered">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('trip_id') ?></th>
                                <th><?php echo display('reg_no') ?></th>
                                <th><?php echo display('route_name') ?></th>
                                <th><?php echo display('start_date') ?></th>
                                <th><?php echo display('end_date') ?></th>
                                <th><?php echo display('sold_ticket') ?></th>
                                <th><?php echo display('total_income') ?></th>
                                <th><?php echo display('total_expense') ?></th>
                                <th><?php echo display('total_fuel') ?></th>
                                <th><?php echo display('status') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($closes)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($closes as $close) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $close->id_no; ?></td>
                                <td><?php echo $close->fleet_registration_name; ?></td>
                                <td><?php echo $close->trip_route_name; ?></td>
                                <td><?php echo $close->start_date; ?></td>
                                <td><?php echo $close->end_date; ?></td>
                                <td><?php echo $close->sold_ticket; ?></td>
                                <td><?php echo $close->total_income; ?></td>
                                <td><?php echo $close->total_expense; ?></td>
                                <td><?php echo $close->total_fuel; ?></td>
                                <td><?php echo (($close->status==1)?display('active'):display('inactive')); ?></td>
                                <td>

                                <?php if($this->permission->method('fleet','read')->access()): ?>
                                    <a href="<?php echo base_url("trip/close/view/$close->id_no") ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <?php endif; ?>

                                <?php if($this->permission->method('fleet','update')->access()): ?>
                                    <a href="<?php echo base_url("trip/close/form/$close->id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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

 