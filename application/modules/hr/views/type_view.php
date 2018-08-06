<div class="row">
    <!--  table area -->
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>  
                        <?php if($this->permission->method('hr', 'create')->access()): ?>
                        <a href="<?php echo base_url('/hr/hr_controller/create_emtype') ?>" class="btn btn-sm btn-info" title="List"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>
                    </h4>
                </div>
            </div>

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('serial') ?></th>
                            <th><?php echo display('position') ?></th>
                            <th><?php echo display('details') ?></th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($type)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($type as $query) { ?>
                               <tr>
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $query->type_name; ?></td>
                                     <td><?php echo $query->details; ?></td>
                                   
                                     <td class="center">
                                        <?php if($this->permission->method('hr', 'update')->access()): ?>
                                        <a href="<?php echo base_url("hr/hr_controller/type_update/$query->type_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <?php endif; ?>   


                                       <?php if($this->permission->method('hr', 'delete')->access()): ?>
                                        <a href="<?php echo base_url("hr/hr_controller/type_delete/$query->type_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i></a>
                                        <?php endif; ?>    
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>