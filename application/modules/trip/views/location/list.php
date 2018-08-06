<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                        <a href="<?php echo base_url('trip/location/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('image') ?></th>
                                <th><?php echo display('location_name') ?></th>
                                <th><?php echo display('description') ?></th>
                                <th><?php echo display('status') ?></th>
                                <th><?php echo display('action') ?></th> 
                                <th><?php echo display('google_map') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($locations)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($locations as $location) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><img src="<?php echo base_url(!empty($location->image)?$location->image:'assets/img/icons/default.jpg'); ?>" alt="Image" height="64" ></td>
                                <td><?php echo $location->name; ?></td>
                                <td><?php echo $location->description; ?></td>
                                <td><?php echo (($location->status==1)?display('active'):display('inactive')); ?></td>
                                <td>

                                <?php if($this->permission->method('trip','update')->access()): ?>
                                    <a href="<?php echo base_url("trip/location/form/$location->id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <?php endif; ?>

                                <?php if($this->permission->method('trip','delete')->access()): ?>
                                    <a href="<?php echo base_url("trip/location/delete/$location->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                </td>
                                <td width="125"><?php echo $location->google_map; ?></td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>

 