<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('fleet/fleet_registration/index') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <?php if($fleet_registration->id): ?>
                        <a href="<?php echo base_url('fleet/fleet_registration/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open('fleet/fleet_registration/form/') ?>
                    <?php echo form_hidden('id', $fleet_registration->id); ?>

                    <div class="form-group row">
                        <label for="reg_no" class="col-sm-3 col-form-label"><?php echo display('reg_no') ?> *</label>
                        <div class="col-sm-9">
                            <input name="reg_no" class="form-control" type="text" placeholder="<?php echo display('reg_no') ?>" id="reg_no" value="<?php echo $fleet_registration->reg_no ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fleet_type_id" class="col-sm-3 col-form-label"><?php echo display('fleet_type') ?> *</label>
                        <div class="col-sm-9">
                            <?php echo form_dropdown('fleet_type_id', $fleet_type_list, (!empty($fleet_registration->fleet_type_id)?$fleet_registration->fleet_type_id:null), ' class="form-control"') ?> 
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="engine_no" class="col-sm-3 col-form-label"><?php echo display('engine_no') ?></label>
                        <div class="col-sm-9">
                            <input name="engine_no" class="form-control" type="text" placeholder="<?php echo display('engine_no') ?>" id="engine_no" value="<?php echo $fleet_registration->engine_no ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="model_no" class="col-sm-3 col-form-label"><?php echo display('model_no') ?></label>
                        <div class="col-sm-9">
                            <input name="model_no" class="form-control" type="text" placeholder="<?php echo display('model_no') ?>" id="model_no" value="<?php echo $fleet_registration->model_no ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="chasis_no" class="col-sm-3 col-form-label"><?php echo display('chasis_no') ?></label>
                        <div class="col-sm-9">
                            <input name="chasis_no" class="form-control" type="text" placeholder="<?php echo display('chasis_no') ?>" id="chasis_no" value="<?php echo $fleet_registration->chasis_no ?>">
                        </div>
                    </div> 
                <div class="col-sm-12">
                    <div class="row">

                        <div class="col-sm-7"> 
                             <div class="form-group row">
                        <label for="type" class="col-sm-5 col-form-label"><?php echo display('layout')?></label>
                        <div class="col-sm-3">
                        <select id="layout" name="layout" required="required" class="form-control">
                        <option value="2-2"  <?php if ($fleet_registration->layout == "2-2") {echo "selected"; }?>>2-2</option>
                        <option value="1-1" <?php if ($fleet_registration->layout == "1-1") {echo "selected"; }?>>1-1
                        </option>
                        <option value="2-1" <?php if ($fleet_registration->layout == "2-1") {echo "selected"; }?>>2-1</option>
                        <option value="1-2" <?php if ($fleet_registration->layout == "1-2") {echo "selected"; }?>>1-2</option>
                        <option value="3-2" <?php if ($fleet_registration->layout == "3-2") {echo "selected"; }?>>3-2</option>
                        <option value="2-3" <?php if ($fleet_registration->layout == "2-3") {echo "selected"; }?>>2-3</option>
                       </select>        
                    </div>
                    <div class="col-sm-4"> 
                         <input type="checkbox" id="checkbox" name="lastseat" style="height: 15px;width: 15px" <?php if ($fleet_registration->lastseat == "last") {echo "checked"; }else{
                            echo "";
                        }?> value="<?php echo $chekval= $fleet_registration->lastseat;?>" >
                      <label class="col-form-label"><?php echo display('last_seat_availabe') ?></label>
                     </div>
                    </div> 
                        <div class="form-group row">
                        <label for="total_seat" class="col-sm-5 col-form-label"><?php echo display('total_seat') ?></label>
                        <div class="col-sm-7">
                            <input name="total_seat" class="form-control" type="number" placeholder="<?php echo display('total_seat') ?>" id="seat" value="<?php echo $fleet_registration->total_seat ?>" onkeyup="myFunction()">
                        </div>
                    </div> 
                             
                    <div class="form-group row">

                        <label for="seat_numbers" class="col-sm-5 col-form-label"><?php echo display('seat_numbers') ?></label>
                       
                        <div class="col-sm-7">
                             <textarea name="seat_numbers" class="form-control"  placeholder="NO of seat" id="demo" style="height: 200px" ><?php echo $fleet_registration->seat_numbers ?></textarea>
                          
                            <span class="text-danger help-text">Use comma to separate the input</span>
                        </div>
                    </div></div>
                         <?php
                         $this->load->view('include/include');
                        ?>
                   
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="fleet_facilities" class="col-sm-3 col-form-label"><?php echo display('fleet_facilities') ?></label>
                        <div class="col-sm-9">
                            <input name="fleet_facilities" class="form-control tokenfield" type="text" placeholder="<?php echo display('fleet_facilities') ?>" id="fleet_facilities" value="<?php echo $fleet_registration->fleet_facilities ?>">
                        </div>
                    </div> 


                    <div class="form-group row">
                        <label for="owner" class="col-sm-3 col-form-label"><?php echo display('owner') ?></label>
                        <div class="col-sm-9">
                            <input name="owner" class="form-control" type="text" placeholder="<?php echo display('owner') ?>" id="owner" value="<?php echo $fleet_registration->owner ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="company" class="col-sm-3 col-form-label"><?php echo display('company') ?></label>
                        <div class="col-sm-9">
                            <input name="company" class="form-control" type="text" placeholder="<?php echo display('company') ?>" id="company" value="<?php echo $fleet_registration->company ?>">
                        </div>
                    </div> 
 
                    <div class="form-group row">
                        <label for="ac_available" class="col-sm-3 col-form-label"><?php echo display('ac_available') ?> *</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <?php echo form_radio('ac_available', '1', (($fleet_registration->ac_available==1)?1:0), 'id="ac_available"'); ?>Yes
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('ac_available', '0', (($fleet_registration->ac_available=="0")?1:0) , 'id="ac_available"'); ?>No
                            </label> 
                        </div>
                    </div>
         
 
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label"><?php echo display('status') ?> *</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <?php echo form_radio('status', '1', (($fleet_registration->status==1)?1:0), 'id="status"'); ?><?php echo display('active') ?>
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('status', '0', (($fleet_registration->status=="0")?1:0) , 'id="status"'); ?><?php echo display('inactive') ?>
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

<script type="text/javascript">
    $(document).ready(function() {
  
    $('#fleet_facilities').tokenfield({
        autocomplete: {
            source: [<?php foreach ($fleet_facilities_list as $value) echo "'$value', ";?>],
            delay: 100
        },
        showAutocompleteOnFocus: true
    }); 
});
</script>