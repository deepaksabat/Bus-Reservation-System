<script type="text/javascript">
  $(function() {
    $(".datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
  });
</script>
<div class="form-group text-right"> 
    <a href="<?php echo base_url();?>/fitness/fitness_controller/create_fit_period" class="btn btn-primary"><?php echo display('fitness_period') ?></a>
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
                <?= form_open('fitness/Fitness_controller/update_fitness_period/'. $data->id) ?>
                <input type="hidden" name="id" value="<?php echo $data->id?>">
                   <div class="form-group row">
                        <label for="fitness_id" class="col-sm-3 col-form-label"><?php echo display('fitness_id') ?> *</label>
                        <div class="col-sm-9">
                         <?php
                          echo form_dropdown('fitness_id', $dropdown, $bb['fitness_id'], 'class="form-control"');
                          ?>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="vehicle_id" class="col-sm-3 col-form-label"><?php echo display('vehicle_id') ?> *</label>
                        <div class="col-sm-9">
                            <?php
                            echo form_dropdown('vehicle_id', $vehicle, $bb['vehicle_id'], 'class="form-control"');
                            ?>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="start_date" class="col-sm-3 col-form-label"><?php echo display('start_date') ?> *</label>
                        <div class="col-sm-9">
                            <input name="start_date" class="datepicker form-control" type="text" placeholder="<?php echo display('start_date') ?>" id="start_date" value="<?php echo $data->start_date?>">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="end_date" class="col-sm-3 col-form-label"><?php echo display('end_date') ?> *</label>
                        <div class="col-sm-9">
                            <input name="end_date" class="datepicker form-control" type="text" placeholder="<?php echo display('end_date') ?>" id="end_date" value="<?php echo $data->end_date?>">
                        </div>
                    </div>
         
                    <div class="form-group row">
                        <label for="start_milage" class="col-sm-3 col-form-label"><?php echo display('start_milage') ?></label>
                        <div class="col-sm-9">
                            <input name="start_milage" class="form-control" type="number" placeholder="<?php echo display('start_milage') ?>" id="start_milage" value="<?php echo $data->start_milage?>">
                        </div>
                    </div>
         
                      <div class="form-group row">
                        <label for="end_milage" class="col-sm-3 col-form-label"><?php echo display('end_milage') ?></label>
                        <div class="col-sm-9">
                            <input name="end_milage" class="form-control" type="number" placeholder="<?php echo display('end_milage') ?>" id="end_milage" value="<?php echo $data->end_milage?>">
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