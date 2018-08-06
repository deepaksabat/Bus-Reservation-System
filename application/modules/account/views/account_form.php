<?php if($this->permission->method('account','create')->access()): ?>
<div class="form-group text-right">
    <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal">
       <?php echo display('account_add') ?>
    </button> 
</div>
<?php endif; ?>

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('sl') ?></th>
                            <th><?php echo display('account_name') ?></th>
                            <th><?php echo display('account_type') ?></th>
                            <th><?php echo display('action') ?></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($acview)) { ?>
                            <?php $sl = 1; ?>
                                <?php foreach ($acview as $query) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $sl; ?>
                                        </td>
                                        <td>
                                            <?php echo $query->account_name; ?>
                                        </td>
                                        <td>
                                        <?php 
                                            $status=$query->account_type; 
                                            if($status==0){
                                                echo "Expense";
                                            }else{
                                                echo "Income";
                                            } 
                                        ?>
                                        </td>
                                        <td class="center">
                                            <?php if($this->permission->method('account','update')->access()): ?>
                                            <a href="<?php echo base_url("account/account_controller/account_update/$query->account_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                            <?php endif; ?>

                                            <?php if($this->permission->method('account','delete')->access()): ?>
                                            <a href="<?php echo base_url("account/account_controller/account_delete/$query->account_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i>
                                            </a> 
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php $sl++; ?>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>

<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Add New Account Name</strong></center>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">

                            <div class="panel-body">
                                <?= form_open('account/account_controller/create_account') ?>
                                    <div class="form-group row">
                                        <div for="account_name" class="col-sm-4 col-form-div">
                                            <?php echo display('account_name') ?> *</div>
                                        <div class="col-sm-8">
                                            <input name="account_name" class="form-control" type="text" placeholder="<?php echo display('account_name') ?>" id="account_name">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div for="account_type" class="col-sm-4 col-form-div">
                                            <?php echo display('account_type') ?> *</div>
                                        <div class="col-sm-8">
                                            <select name="account_type" class="form-control" style="width: 100%">
                                                <option value="">Select Account Type</option>
                                                <option value="1">Income</option>
                                                <option value="0">Expense</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('add') ?></button>
                                    </div>
                                    <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>