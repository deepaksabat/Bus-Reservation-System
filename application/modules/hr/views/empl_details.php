<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('hr/hr_controller/hrView') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('list') ?></a> 

                        <?php if($this->permission->method('hr', 'create')->access()): ?>
                        <a href="<?php echo base_url('hr/hr_controller/create_hr') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>

                        <a href="<?php echo base_url("hr/hr_controller/download?file=$details->document_pic") ?>" target="_blank" download class="btn btn-sm btn-primary"><i class="fa fa-download"></i> <?php echo display('download_document') ?></a>

                        <a href="#" class="btn btn-sm btn-danger" onclick="printContent('PrintMe')" title="Print"> <i class="fa fa-print"></i></a>

                    </h4>
                </div>
            </div>
            <div class="panel-body" id="PrintMe"> 
                <table class="table table-hover" width="100%">
                    <thead>
                    <tr>
                        <th colspan="2"><img src="<?php echo base_url($details->picture) ?>" width="200" height="200"> </th> 
                    </tr>
                    <tr>
                        <th colspan="2"><?php echo $details->first_name." " .$details->second_name;?></th> 
                    </tr>
                    <tr>
                        <th><?php echo display('position') ?></th>
                        <td><?php echo $details->position;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('phone') ?></th>
                        <td><?php echo $details->phone_no;?></td>
                    </tr> 
                    <tr>
                        <th><?php echo display('email') ?></th>
                        <td><?php echo $details->email_no;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('blood_group') ?></th>
                        <td><?php echo $details->blood_group;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('address_line_1') ?></th>
                        <td><?php echo $details->address_line_1;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('address_line_2') ?></th>
                        <td><?php echo $details->address_line_2;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('country') ?></th>
                        <td><?php echo $details->country;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('city') ?></th>
                        <td><?php echo $details->city;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('zip_code') ?></th>
                        <td><?php echo $details->zip;?></td>
                    </tr>
                </thead>
                </table> 
            </div> 
        </div>
    </div>
</div> 
 