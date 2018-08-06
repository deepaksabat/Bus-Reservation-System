<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                        <?php if($this->permission->method('hr', 'create')->access()): ?>
                        <a href="<?php echo base_url('hr/hr_controller/create_hr') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?> 
                    </h4>
                </div>
            </div>
            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                             <th><?php echo display('serial') ?></th>
                            <th><?php echo display('name') ?></th>
                            <th><?php echo display('position') ?></th>
                           
                            <th><?php echo display('phone_no') ?></th>
                            <th><?php echo display('email_no') ?></th>
                           
                            <th><?php echo display('picture') ?></th>
                            <th>action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($hr)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($hr as $query) { ?>
                               <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $query->first_name." ".$query->second_name; ?></td>
                                     <td><?php echo $query->position; ?></td> 
                                    <td><?php echo $query->phone_no; ?></td>
                                    <td><?php echo $query->email_no; ?></td>  
                                    <td><?php echo "<img src='" . base_url().$query->picture."' width=60px; height=60px; class=img-thumbnail>";?>
                                    </td> 
                                     <td class="center">
                                        <a href="<?php echo base_url("hr/hr_controller/download?file=$query->document_pic") ?>" tareget="_blank" class="btn btn-xs btn-info"><i class="fa fa-download"></i></a> 

                                        <?php if($this->permission->method('hr', 'read')->access()): ?>
                                        <a href="<?php echo base_url("hr/hr_controller/emp_details/$query->id") ?>" class="btn btn-xs btn-default"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <?php endif; ?> 

                                        <?php if($this->permission->method('hr', 'update')->access()): ?>
                                        <a href="<?php echo base_url("hr/hr_controller/hr_update/$query->id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <?php endif; ?> 

                                        <?php if($this->permission->method('hr', 'delete')->access()): ?>
                                        <a href="<?php echo base_url("hr/hr_controller/hr_delete/$query->id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i>
                                        </a> 
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

 