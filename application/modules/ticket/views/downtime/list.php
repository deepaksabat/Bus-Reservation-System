<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4></h4>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart('ticket/downtime/form','class="form-inner"') ?>
                    <?php echo form_hidden('id',$downtime->id) ?>

                    <div class="form-group row">
                        <label for="title" class="col-xs-3 col-form-label"><?php echo display('downtime') ?> <i class="text-danger">*</i></label>
                        <div class="col-xs-4">
                            <input name="downtime" type="text" class="form-control" id="downtime" placeholder="<?php echo display('downtime') ?>" value="<?php echo $downtime->downtime; ?>">
                        </div>
                        <div class="col-xs-2" style="padding-left:0px">
                         <h4>hour</h4>
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
 

