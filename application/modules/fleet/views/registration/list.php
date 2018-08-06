<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                        <a href="<?php echo base_url('fleet/fleet_registration/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('reg_no') ?></th>
                                <th><?php echo display('fleet_type') ?></th>
                                <th><?php echo display('engine_no') ?></th>
                                <th><?php echo display('model_no') ?></th>
                                <th><?php echo display('chasis_no') ?></th>
                                <th><?php echo display('total_seat') ?></th>
                                <th><?php echo display('seat_numbers') ?></th>
                                <th><?php echo display('fleet_facilities') ?></th>
                                <th><?php echo display('owner') ?></th>
                                <th><?php echo display('company') ?></th>
                                <th><?php echo display('ac_available') ?></th>
                                <th><?php echo display('status') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($fleet_registrations)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($fleet_registrations as $fleet_registration) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $fleet_registration->reg_no; ?></td>
                                <td><?php echo $fleet_registration->fleet_type; ?></td>
                                <td><?php echo $fleet_registration->engine_no; ?></td> 
                                <td><?php echo $fleet_registration->model_no; ?></td> 
                                <td><?php echo $fleet_registration->chasis_no; ?></td> 
                                <td><?php echo $fleet_registration->total_seat; ?></td> 
                                <td><?php echo $fleet_registration->seat_numbers; ?></td> 
                                <td><?php echo $fleet_registration->fleet_facilities; ?></td> 
                                <td><?php echo $fleet_registration->owner; ?></td> 
                                <td><?php echo $fleet_registration->company; ?></td> 
                                <td><?php echo (($fleet_registration->ac_available==1)?"Yes":"No"); ?></td>
                                <td><?php echo (($fleet_registration->status==1)?display('active'):display('inactive')); ?></td>
                                
                                <td>
                                <?php if($this->permission->method('fleet','update')->access()): ?>
                                    <a href="<?php echo base_url("fleet/fleet_registration/form/$fleet_registration->id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <?php endif; ?>

                                <?php if($this->permission->method('fleet','delete')->access()): ?>
                                    <a href="<?php echo base_url("fleet/fleet_registration/delete/$fleet_registration->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>

 