<div class="row"> 
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('fleet/fleet_facilities/index') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i>  <?php echo display('list') ?></a> 
                        <?php if($fleet_facilities->id): ?>
                        <a href="<?php echo base_url('fleet/fleet_facilities/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open('fleet/fleet_facilities/form/') ?>
                    <?php echo form_hidden('id', $fleet_facilities->id); ?>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label"><?php echo display('fleet_facilities') ?> *</label>
                        <div class="col-sm-9">
                            <input name="name" class="form-control" type="text" placeholder="<?php echo display('fleet_facilities') ?>" id="name" value="<?php echo $fleet_facilities->name ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label"><?php echo display('description') ?></label>
                        <div class="col-sm-9">
                            <textarea name="description" placeholder="<?php echo display('description') ?>" class="form-control" id="description"><?php echo $fleet_facilities->description ?></textarea>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status *</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <?php echo form_radio('status', '1', (($fleet_facilities->status==1)?1:0), 'id="status"'); ?>Active
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('status', '0', (($fleet_facilities->status=="0")?1:0) , 'id="status"'); ?>Inactive
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