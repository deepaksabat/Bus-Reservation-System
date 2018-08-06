<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('trip/close/index') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <?php if($close->id): ?>
                        <a href="<?php echo base_url('trip/assign/index') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?> 
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open('trip/close/form/'.$close->id) ?>

                    <?php echo form_hidden('id', $close->id); ?>
                    <?php echo form_hidden('closed_by_id', $close->closed_by_id); ?>
 
                    <div class="form-group row">
                        <label for="sold_ticket" class="col-sm-3 col-form-label"><?php echo display('sold_ticket') ?></label>
                        <div class="col-sm-9">
                            <input name="sold_ticket" class="form-control" type="number" placeholder="<?php echo display('sold_ticket') ?>" id="sold_ticket" value="<?php echo $close->sold_ticket ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="total_income" class="col-sm-3 col-form-label"><?php echo display('total_income') ?> </label>
                        <div class="col-sm-9">
                            <input name="total_income" class="form-control" type="number" placeholder="<?php echo display('total_income') ?>" id="total_income" value="<?php echo $close->total_income ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="total_expense" class="col-sm-3 col-form-label"><?php echo display('total_expense') ?> *</label>
                        <div class="col-sm-9">
                            <input name="total_expense" class="form-control" type="number" placeholder="<?php echo display('total_expense') ?>" id="total_expense" value="<?php echo $close->total_expense ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="total_fuel" class="col-sm-3 col-form-label"><?php echo display('total_fuel') ?> *</label>
                        <div class="col-sm-9">
                            <input name="total_fuel" class="form-control" type="number" placeholder="<?php echo display('total_fuel') ?>" id="total_fuel" value="<?php echo $close->total_fuel ?>">
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="trip_comment" class="col-sm-3 col-form-label"><?php echo display('trip_comment') ?></label>
                        <div class="col-sm-9">
                            <textarea name="trip_comment" class="form-control" type="text" placeholder="<?php echo display('trip_comment') ?>" id="trip_comment"><?php echo $close->trip_comment ?></textarea>
                        </div>
                    </div> 
 
 
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status *</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <?php echo form_radio('status', '1', (($close->status==1)?1:0), 'id="status"'); ?>Active
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('status', '0', (($close->status=="0")?1:0) , 'id="status"'); ?>Inactive
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
 