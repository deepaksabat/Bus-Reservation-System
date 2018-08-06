<?php foreach ($detls as $row){ }  ?>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('agent/agent_controller/create_agent') ?>" class="btn btn-sm btn-success" title="Add"><i class="fa fa-list"></i> <?php echo display('list') ?></a> 

                        <a href="<?php echo base_url("$row->agent_pic_document") ?>" target="_blank" download class="btn btn-sm btn-info"><i class="fa fa-download"></i> <?php echo display('download_document') ?></a>

                        <a href="#" class="btn btn-sm btn-danger" onclick="printContent('PrintMe')" title="Print"> <i class="fa fa-print"></i></a>

                    </h4>
                </div>
            </div>
            <div class="panel-body" id="PrintMe"> 
                <table class="table table-hover" width="100%">
                    <thead>
                        <tr>
                            <th colspan="2"><img src="<?php echo base_url($row->agent_picture) ?>" width="200" height="200"> </th> 
                        </tr>
                        <tr>
                            <th colspan="2"><?php echo $row->agent_first_name." " .$row->agent_second_name; ?></th> 
                        </tr>
                        <tr>
                            <th><?php echo display('company') ?></th>
                            <td><?php echo $row->agent_company_name;?></td>
                        </tr>
                        <tr>
                            <th><?php echo display('phone') ?></th>
                            <td><?php echo $row->agent_phone;?></td>
                        </tr>
                        <tr>
                            <th><?php echo display('mobile') ?></th>
                            <td><?php echo $row->agent_mobile;?></td>
                        </tr>
                        <tr>
                            <th><?php echo display('email') ?></th>
                            <td><?php echo $row->agent_email;?></td>
                        </tr>
                        <tr>
                            <th><?php echo display('address_line_1') ?></th>
                            <td><?php echo $row->agent_address_line_1;?></td>
                        </tr>
                        <tr>
                            <th><?php echo display('address_line_2') ?></th>
                            <td><?php echo $row->agent_address_line_2;?></td>
                        </tr>
                        <tr>
                            <th><?php echo display('country') ?></th>
                            <td><?php echo $row->agent_country;?></td>
                        </tr>
                        <tr>
                            <th><?php echo display('zip_code') ?></th>
                            <td><?php echo $row->agent_address_zip_code;?></td>
                        </tr>
                    </thead>
                </table> 
            </div> 
        </div>
    </div>
</div> 