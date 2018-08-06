<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('ticket/passenger/index') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a>  
                        <a href="<?php echo base_url('ticket/passenger/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  

                        <a type="button" onclick="printContent('PrintMe')" class="btn btn-sm btn-danger" ><i class="fa fa-print"></i></a> 
                    </h4>
                </div>
            </div> 
            <div class="panel-body" id="PrintMe">
                <table class="table table-hover" width="100%">
                    <thead>
                        <tr>
                            <th colspan="2"><img src="<?php echo base_url((!empty($passenger->image)?$passenger->image:'assets/img/icons/default.jpg')) ?>" width="200" height="200"> </th> 
                        </tr>
                        <tr>
                            <th><?php echo $passenger->name ?></th> 
                            <td><?php echo $passenger->about ?></td> 
                        </tr>
                        <tr>
                            <th><?php echo display('passenger_id') ?></th>
                            <td><?php echo $passenger->id_no;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('phone') ?></th>
                            <td><?php echo $passenger->phone;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('email') ?></th>
                            <td><?php echo $passenger->email;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('date_of_birth') ?></th>
                            <td><?php echo $passenger->date_of_birth;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('address_line_1') ?></th>
                            <td><?php echo $passenger->address_line_1;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('address_line_2') ?></th>
                            <td><?php echo $passenger->address_line_2;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('city') ?></th>
                            <td><?php echo $passenger->city;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('zip_code') ?></th>
                            <td><?php echo $passenger->zip_code;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('country') ?></th>
                            <td><?php echo $passenger->country;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('status') ?></th>
                            <td><?php echo (($passenger->status==1)?display('active'):display('inactive')); ?></td>
                        </tr> 
                    </thead>
                </table>  
            </div> 
        </div> 
    </div>
</div>


 