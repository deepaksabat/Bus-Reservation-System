<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                        <a href="<?php echo base_url('ticket/passenger/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable2 table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('passenger_id') ?></th>
                                <th><?php echo display('image') ?></th>
                                <th><?php echo display('name') ?></th>
                                <th><?php echo display('email') ?></th>
                                <th><?php echo display('address_line_1') ?></th>
                                <th><?php echo display('address_line_2') ?></th>
                                <th><?php echo display('city') ?></th>
                                <th><?php echo display('zip_code') ?></th>
                                <th><?php echo display('country') ?></th>
                                <th><?php echo display('status') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($passengers)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($passengers as $passenger) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $passenger->id_no; ?></td>
                                <td><img src="<?php echo base_url(!empty($passenger->image)?$passenger->image:'assets/img/icons/default.jpg'); ?>" alt="Image" height="64" ></td>
                                <td><?php echo $passenger->name; ?></td>
                                <td><?php echo $passenger->email; ?></td>
                                <td><?php echo $passenger->address_line_1; ?></td>
                                <td><?php echo $passenger->address_line_2; ?></td>
                                <td><?php echo $passenger->city; ?></td>
                                <td><?php echo $passenger->zip_code; ?></td>
                                <td><?php echo (!empty($passenger->country)?$this->country_model->country($passenger->country):null); ?></td>
                                <td><?php echo (($passenger->status==1)?display('active'):display('inactive')); ?></td>
                                <td>

                                <?php if($this->permission->method('ticket','read')->access()): ?>
                                    <a href="<?php echo base_url("ticket/passenger/view/$passenger->id") ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <?php endif; ?>

                                <?php if($this->permission->method('ticket','update')->access()): ?>
                                    <a href="<?php echo base_url("ticket/passenger/form/$passenger->id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <?php endif; ?>

                                <?php if($this->permission->method('ticket','delete')->access()): ?>
                                    <a href="<?php echo base_url("ticket/passenger/delete/$passenger->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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

 