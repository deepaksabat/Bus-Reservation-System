<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                        <a href="<?php echo base_url('account/bank/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable2 table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('bank_name') ?></th>
                                <th><?php echo display('bank_logo') ?></th>
                                <th><?php echo display('account_details') ?></th>
                                <th><?php echo display('instruction') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($bank)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($bank as $bank) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $bank->bank_name; ?></td>
                                <td><img src="<?php echo base_url(!empty($bank->bank_logo)?$bank->bank_logo:'assets/img/icons/default.jpg'); ?>" alt="Image" height="64" ></td>
                                <td><?php echo $bank->account_details; ?></td>
                                <td><?php echo $bank->instruction; ?></td>
                                <td>

                               

                                <?php if($this->permission->method('account','update')->access()): ?>
                                    <a href="<?php echo base_url("account/bank/form/$bank->id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <?php endif; ?>

                                <?php if($this->permission->method('account','delete')->access()): ?>
                                    <a href="<?php echo base_url("account/bank/delete/$bank->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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

 