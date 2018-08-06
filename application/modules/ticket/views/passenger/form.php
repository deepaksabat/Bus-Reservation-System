<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('ticket/passenger/index') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <?php if($passenger->id): ?>
                        <a href="<?php echo base_url('ticket/passenger/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open_multipart('ticket/passenger/form') ?>
                    <?php echo form_hidden('id', $passenger->id); ?>
                    <?php echo form_hidden('id_no', $passenger->id_no); ?>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label"><?php echo display('name') ?> *</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input name="firstname" class="form-control" type="text" placeholder="<?php echo display('firstname') ?>" id="name" value="<?php echo $passenger->firstname ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input name="middle_name" class="form-control" type="text" placeholder="<?php echo display('middle_name') ?> (optional)" value="<?php echo $passenger->middle_name ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input name="lastname" class="form-control" type="text" placeholder="<?php echo display('lastname') ?>" value="<?php echo $passenger->lastname ?>">
                                </div>
                            </div> 
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 col-form-label"><?php echo display('phone') ?></label>
                        <div class="col-sm-9">
                            <input name="phone" class="form-control" type="text" placeholder="<?php echo display('phone') ?>" id="phone" value="<?php echo $passenger->phone ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label"><?php echo display('email') ?></label>
                        <div class="col-sm-9">
                            <input name="email" class="form-control" type="text" placeholder="<?php echo display('email') ?>" id="email" value="<?php echo $passenger->email ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label"><?php echo display('password') ?></label>
                        <div class="col-sm-9">
                            <input name="password" class="form-control" type="password" placeholder="<?php echo display('password') ?>" id="password" >
                             <input name="old_password" class="form-control" type="hidden" placeholder="<?php echo display('password') ?>" id="old_password" value="<?php echo $passenger->password ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="date_of_birth" class="col-sm-3 col-form-label"><?php echo display('date_of_birth') ?> </label>
                        <div class="col-sm-9">
                            <input name="date_of_birth" class="form-control datepicker" type="text" placeholder="<?php echo display('date_of_birth') ?>" id="date_of_birth" value="<?php echo $passenger->date_of_birth ?>">
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label"><?php echo display('image') ?></label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="<?php echo base_url(!empty($passenger->image)?$passenger->image: "./assets/img/icons/default.jpg") ?>" class="img-thumbnail" width="125" height="100">
                                </div>
                                <div class="col-sm-10">
                                    <input type="file" name="image" id="image" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="old_image" value="<?php echo $passenger->image ?>">
                    </div> 

 
                    <div class="form-group row">
                        <label for="address_line_1" class="col-sm-3 col-form-label"><?php echo display('address_line_1') ?></label>
                        <div class="col-sm-9">
                            <input name="address_line_1" class="form-control" type="text" placeholder="<?php echo display('address_line_1') ?>" id="address_line_1" value="<?php echo $passenger->address_line_1 ?>">
                        </div>
                    </div> 
 
                    <div class="form-group row">
                        <label for="address_line_2" class="col-sm-3 col-form-label"><?php echo display('address_line_2') ?></label>
                        <div class="col-sm-9">
                            <input name="address_line_2" class="form-control" type="text" placeholder="<?php echo display('address_line_2') ?>" id="address_line_2" value="<?php echo $passenger->address_line_2 ?>">
                        </div>
                    </div> 
 
                    <div class="form-group row">
                        <label for="city" class="col-sm-3 col-form-label"><?php echo display('city') ?></label>
                        <div class="col-sm-9">
                            <input name="city" class="form-control" type="text" placeholder="<?php echo display('city') ?>" id="city" value="<?php echo $passenger->city ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="zip_code" class="col-sm-3 col-form-label"><?php echo display('zip_code') ?></label>
                        <div class="col-sm-9">
                            <input name="zip_code" class="form-control" type="text" placeholder="<?php echo display('zip_code') ?>" id="zip_code" value="<?php echo $passenger->zip_code ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="country" class="col-sm-3 col-form-label"><?php echo display('country') ?></label>
                        <div class="col-sm-9">
                            <?php echo form_dropdown('country', $country_list, (!empty($passenger->country)?$passenger->country:"BD"), ' class="form-control"') ?> 
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status *</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <?php echo form_radio('status', '1', (($passenger->status==1)?1:0), 'id="status"'); ?>Active
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('status', '0', (($passenger->status=="0")?1:0) , 'id="status"'); ?>Inactive
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