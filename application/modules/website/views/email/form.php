<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4></h4>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart('website/emails/form','class="form-inner"') ?>
                    <?php echo form_hidden('id',$email->id) ?>

                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label"><?php echo display('protocol') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input name="protocol" type="text" class="form-control" id="protocol" placeholder="<?php echo display('protocol') ?>" value="<?php echo $email->protocol; ?>">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label"><?php echo display('smtp_host') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input name="smtp_host" type="text" class="form-control" id="smtp_host" placeholder="<?php echo display('smtp_host') ?>" value="<?php echo $email->smtp_host; ?>">
                        </div>
                    </div>

                   <div class="form-group row">
                        <label for="smtp_port" class="col-sm-3 col-form-label"><?php echo display('smtp_port') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input name="smtp_port" type="text" class="form-control" id="smtp_port" placeholder="<?php echo display('smtp_port') ?>" value="<?php echo $email->smtp_port; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="smtp_user" class="col-sm-3 col-form-label"><?php echo display('smtp_user') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input name="smtp_user" type="text" class="form-control" id="smtp_user" placeholder="<?php echo display('smtp_user') ?>" value="<?php echo $email->smtp_user; ?>">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="smtp_pass" class="col-sm-3 col-form-label"><?php echo display('smtp_pass') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input name="smtp_pass" type="password" class="form-control" id="smtp_pass" placeholder="<?php echo display('smtp_pass') ?>" value="<?php echo $email->smtp_pass; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mailtype" class="col-sm-3 col-form-label"><?php echo display('mailtype') ?> <i class="text-danger">*</i></label>
                    <div class="col-sm-6">
                        <select name="mailtype" id="mailtype" class="form-control">
                            <option value="html" <?php  if($email->mailtype == 'html'){
                                echo 'selected';
                            }else{
                                echo ' ';
                            } ?>><?php echo display('html') ?></option>
                            <option value="text" <?php  if($email->mailtype == 'text'){
                                echo 'selected';
                            }else{
                                echo ' ';
                            } ?>><?php echo display('text') ?></option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
 

