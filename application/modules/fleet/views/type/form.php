<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('fleet/fleet_type/index') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <?php if($fleet_type->id): ?>
                        <a href="<?php echo base_url('fleet/fleet_type/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open('fleet/fleet_type/form/') ?>
                    <?php echo form_hidden('id', $fleet_type->id); ?>

                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label"><?php echo display('fleet_type') ?> *</label>
                        <div class="col-sm-9">
                            <input name="type" class="form-control" type="text" placeholder="<?php echo display('fleet_type') ?>" id="type" value="<?php echo $fleet_type->type ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status *</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <?php echo form_radio('status', '1', (($fleet_type->status==1)?1:0), 'id="status"'); ?>Active
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('status', '0', (($fleet_type->status=="0")?1:0) , 'id="status"'); ?>Inactive
                            </label> 
                        </div>
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