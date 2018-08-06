<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                        <a href="<?php echo base_url('trip/assign/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  
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
                                <th><?php echo display('driver_name') ?></th>
                                <th><?php echo display('status') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($assigns)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($assigns as $assign) { ?>
                            <tr class="<?php echo (!empty($assign->isClosed)?$assign->isClosed:null) ?>">
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $assign->id_no; ?></td>
                                <td><?php echo $assign->fleet_registration_name; ?></td>
                                <td><?php echo $assign->trip_route_name; ?></td>
                                <td><?php echo $assign->start_date; ?></td>
                                <td><?php echo $assign->end_date; ?></td>
                                <td><?php echo $assign->driver_name; ?></td>
                                <td><?php echo (($assign->status==1)?display('active'):display('inactive')); ?></td>
                                <td width="150">

                                <?php if($this->permission->method('fleet','read')->access()): ?>
                                    <a href="<?php echo base_url("trip/assign/view/$assign->id_no") ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                
                                <?php if($this->permission->method('fleet','update')->access()): ?>
                                    <a href="<?php echo base_url("trip/assign/form/$assign->id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <?php endif; ?>


                                <?php if($this->permission->method('fleet','update')->access()): ?>
                                    <?php if(empty($assign->closed_by_id)): ?>
                                    <a href="<?php echo base_url("trip/close/form/$assign->id") ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Close Trip"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <?php endif; ?>
                                <?php endif; ?>


                                <?php if($this->permission->method('fleet','delete')->access()): ?>
                                    <a href="<?php echo base_url("trip/assign/delete/$assign->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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

 