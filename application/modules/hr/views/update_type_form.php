<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>                          
                        <a href="<?php echo base_url('/hr/hr_controller/typeView') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <a href="<?php echo base_url('/hr/hr_controller/create_emtype') ?>" class="btn btn-sm btn-info" title="List"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open_multipart('hr/hr_controller/type_update/'. $data->type_id) ?>
                
                <input type="hidden" name="type_id" value=" <?php echo $data->type_id;?>">

                <div class="form-group row">
                        <label for="type_name" class="col-sm-3 col-form-label"><?php echo display('position') ?> *</label>
                        <div class="col-sm-9">
                            <input name="type_name" class="form-control" type="text" placeholder="<?php echo display('type_name') ?>" id="type_name"   value=" <?php echo $data->type_name;?>">
                        </div>
                        
                    </div>
                     
                   
                    <div class="form-group row">
                     <label for="details" class="col-sm-3 col-form-label"><?php echo display('details') ?> </label>
                       
                     <div class="col-sm-9">
                            <textarea name="details" class="form-control" placeholder="<?php echo display('details') ?>" id="details">  <?php echo $data->details;?></textarea> 
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