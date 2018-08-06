<div class="form-group text-right"> 
    <a href="<?php echo base_url();?>/account/account_controller/create_account" class="btn btn-primary"><?php echo display('account_list') ?></a>
</div>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
                <?= form_open('account/account_controller/account_update/'. $data->account_id) ?>
                <input type="hidden" name="account_id" value="<?php echo $data->account_id?>">

                    <div class="form-group row">
                        <label for="account_name" class="col-sm-3 col-form-label"><?php echo display('account_name') ?> *</label>
                        <div class="col-sm-9">
                           <input name="account_name" class="form-control" type="text" placeholder="<?php echo display('account_name') ?>" id="account_name" value="<?php echo $data->account_name?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="account_type" class="col-sm-3 col-form-label"><?php echo display('account_type') ?> *</label>
                        <div class="col-sm-9">
                            <?php echo form_dropdown('account_type', array('1'=>'Income', '0'=>'Expense'), $data->account_type, array('id'=>'account_type', 'class'=>'form-control')) ?>
                        </div> 
                    </div>
                    
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                    </div>
                    
                <?php echo form_close() ?>
            </div>  
        </div>
    </div>
</div>