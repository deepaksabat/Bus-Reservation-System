<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>  
                        <a href="<?php echo base_url('/hr/hr_controller/typeView') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                    </h4>
                </div>
            </div>
            <div class="panel-body"> 
                <?= form_open('hr/Hr_controller/create_emtype') ?>
                    <div class="form-group row">
                        <div for="type_name" class="col-sm-4 col-form-div"><?php echo display('position') ?> *</div>
                        <div class="col-sm-8">
                           <input name="type_name" class="form-control" type="text" placeholder="<?php echo display('type_name') ?>" id="type_name"> 
                           
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div for="details" class="col-sm-4 col-form-div"><?php echo display('details') ?></div>
                        <div class="col-sm-8">
                             <textarea name="details" class="form-control" placeholder="<?php echo display('details') ?>" id="details"></textarea> 
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

    
 