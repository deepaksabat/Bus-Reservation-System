<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('account/bank/index') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <?php if($bank->id): ?>
                        <a href="<?php echo base_url('account/bank/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">
                <?= form_open_multipart('account/bank/form/') ?>
                    <?php echo form_hidden('id', $bank->id); ?>

                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label"><?php echo display('bank_name') ?> *</label>
                        <div class="col-sm-9">
                            <input name="bank_name" class="form-control" type="text" placeholder="<?php echo display('bank_name') ?>" id="bank_name" value="<?php echo $bank->bank_name ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">
                        <?php echo display('account_details') ?> </label>
                        <div class="col-sm-9">
                           <textarea name="account_details" class="form-control"  placeholder="<?php echo display('account_details') ?>" id="account_details"><?php echo $bank->account_details ?></textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label"><?php echo display('instruction') ?></label>
                        <div class="col-sm-9">
                            <textarea name="instruction" class="form-control" placeholder="<?php echo display('instruction') ?>" id="instruction"><?php echo $bank->instruction ?></textarea>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="bank_logo" class="col-sm-3 col-form-label"><?php echo display('bank_logo') ?></label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="<?php echo base_url(!empty($bank->bank_logo)?$bank->bank_logo: "./assets/img/icons/default.jpg") ?>" class="img-thumbnail" width="125" height="100">
                                </div>
                                <div class="col-sm-10">
                                    <input type="file" name="bank_logo" id="bank_logo" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="old_image" value="<?php echo $bank->bank_logo ?>">
                    </div> 
         
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>  
        </div>
    </div>
</div>