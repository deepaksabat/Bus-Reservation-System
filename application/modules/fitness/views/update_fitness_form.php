<div class="form-group text-right"> 
    <a href="<?php echo base_url();?>/fitness/fitness_controller/create_fitness" class="btn btn-primary"><?php echo display('fitness_list') ?></a>
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

                <?= form_open('fitness/Fitness_controller/update_fitness/'. $data->fitness_id) ?>
                <input type="hidden" name="fitness_id" value="<?php echo $data->fitness_id?>">
                    <div class="form-group row">
                        <label for="fitness_name" class="col-sm-3 col-form-label"><?php echo display('fitness_name') ?> *</label>
                        <div class="col-sm-9">
                            <input name="fitness_name" class="form-control" type="text" placeholder="<?php echo display('fitness_name') ?>" id="fitness_name" value="<?php echo $data->fitness_name?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fitness_description" class="col-sm-3 col-form-label"><?php echo display('fitness_description') ?> </label>
                        <div class="col-sm-9">
                            <textarea name="fitness_description" class="form-control" placeholder="<?php echo display('fitness_description') ?>" id="fitness_description"><?php echo $data->fitness_description?></textarea>
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