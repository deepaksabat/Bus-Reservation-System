<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('trip/location/index') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <?php if($location->id): ?>
                        <a href="<?php echo base_url('trip/location/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open_multipart('trip/location/form/'.$location->id) ?>
                    <?php echo form_hidden('id', $location->id); ?>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label"><?php echo display('location_name') ?> *</label>
                        <div class="col-sm-9">
                            <input name="name" class="form-control" type="text" placeholder="<?php echo display('location_name') ?>" id="name" value="<?php echo $location->name ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label"><?php echo display('description') ?></label>
                        <div class="col-sm-9">
                            <textarea name="description" placeholder="<?php echo display('description') ?>" class="form-control" id="description"><?php echo $location->description ?></textarea>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="google_map" class="col-sm-3 col-form-label"><?php echo display('google_map') ?></label>
                        <div class="col-sm-9">
                            <textarea name="google_map" placeholder="<?php echo display('google_map') ?>" class="form-control" id="google_map"><?php echo $location->google_map ?></textarea>
                        </div>
                    </div> 


                    <div class="form-group row">
                        <label for="preview" class="col-sm-3 col-form-label"><?php echo display('preview') ?></label>
                        <div class="col-sm-9">
                            <img src="<?php echo base_url(!empty($location->image)?$location->image: "./assets/img/icons/default.jpg") ?>" class="img-thumbnail" width="125" height="100">
                        </div>
                        <input type="hidden" name="old_image" value="<?php echo $location->image ?>">
                    </div> 

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label"><?php echo display('image') ?></label>
                        <div class="col-sm-9">
                            <input type="file" name="image" id="image" aria-describedby="fileHelp">
                            <small id="fileHelp" class="text-muted"></small>
                        </div>
                    </div> 



                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status *</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <?php echo form_radio('status', '1', (($location->status==1)?1:0), 'id="status"'); ?>Active
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('status', '0', (($location->status=="0")?1:0) , 'id="status"'); ?>Inactive
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