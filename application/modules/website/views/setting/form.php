<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart('website/setting/form','class="form-inner"') ?>
                    <?php echo form_hidden('id',$website->id) ?>

                    <div class="form-group row">
                        <label for="title" class="col-xs-3 col-form-label"><?php echo display('application_title') ?> <i class="text-danger">*</i></label>
                        <div class="col-xs-9">
                            <input name="title" type="text" class="form-control" id="title" placeholder="<?php echo display('application_title') ?>" value="<?php echo $website->title ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="slogan" class="col-xs-3 col-form-label"><?php echo display('slogan') ?> <i class="text-danger"></i></label>
                        <div class="col-xs-9">
                            <input name="slogan" type="text" class="form-control" id="slogan" placeholder="<?php echo display('slogan') ?>" value="<?php echo $website->slogan ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-xs-3 col-form-label"><?php echo display('address') ?></label>
                        <div class="col-xs-9">
                            <input name="address" type="text" class="form-control" id="address" placeholder="<?php echo display('address') ?>"  value="<?php echo $website->address ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-xs-3 col-form-label"><?php echo display('email')?></label>
                        <div class="col-xs-9">
                            <input name="email" type="text" class="form-control" id="email" placeholder="<?php echo display('email')?>"  value="<?php echo $website->email ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-xs-3 col-form-label"><?php echo display('phone') ?></label>
                        <div class="col-xs-9">
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="<?php echo display('phone') ?>"  value="<?php echo $website->phone ?>" >
                        </div>
                    </div>


                    <!-- if setting favicon is already uploaded -->
                    <?php if(!empty($website->favicon)) {  ?>
                    <div class="form-group row">
                        <label for="faviconPreview" class="col-xs-3 col-form-label"></label>
                        <div class="col-xs-9">
                            <img src="<?php echo base_url($website->favicon) ?>" alt="Favicon" class="img-thumbnail" />
                        </div>
                    </div>
                    <?php } ?>

                    <div class="form-group row">
                        <label for="favicon" class="col-xs-3 col-form-label"><?php echo display('favicon') ?> </label>
                        <div class="col-xs-9">
                            <input type="file" name="favicon" id="favicon">
                            <input type="hidden" name="old_favicon" value="<?php echo $website->favicon ?>">
                        </div>
                    </div>


                    <!-- if setting logo is already uploaded -->
                    <?php if(!empty($website->logo)) {  ?>
                    <div class="form-group row">
                        <label for="logoPreview" class="col-xs-3 col-form-label"></label>
                        <div class="col-xs-9">
                            <img src="<?php echo base_url($website->logo) ?>" alt="Picture" class="img-thumbnail" />
                        </div>
                    </div>
                    <?php } ?>

                    <div class="form-group row">
                        <label for="logo" class="col-xs-3 col-form-label"><?php echo display('logo') ?></label>
                        <div class="col-xs-9">
                            <input type="file" name="logo" id="logo">
                            <input type="hidden" name="old_logo" value="<?php echo $website->logo ?>">
                        </div>
                    </div>
 
 
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label"><?php echo display('website_status') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <?php echo form_radio('status', '1', (($website->status==1)?1:0), 'id="status"'); ?><?php echo display('active') ?>
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('status', '0', (($website->status=="0")?1:0) , 'id="status"'); ?><?php echo display('inactive') ?>
                            </label> 
                        </div>
                    </div>


                    <fieldset><legend><?php echo display('payment_information') ?></legend>
                         <div class="form-group row">
                        <label for="paytype" class="col-xs-3 col-form-label"><?php echo display('payment_gateway') ?> <i class="text-danger">*</i></label>
                        <div class="col-xs-9">
                          <select name="payment_type" class="form-control">
                              <option value="enable" <?php $type = $website->payment_type;
                              if($type == 'enable'){
                                echo 'selected';
                              }?>><?php echo display('paypal')?></option>
                              <option value="disable" <?php $type = $website->payment_type;
                              if($type == 'disable'){
                                echo 'selected';
                              }?>><?php echo display('cash')?></option>
                               <option value="bank" <?php $type = $website->payment_type;
                              if($type == 'bank'){
                                echo 'selected';
                              }?>><?php echo display('bank_trans')?></option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="paypal_email" class="col-xs-3 col-form-label"><?php echo display('paypal_email') ?> <i class="text-danger">*</i></label>
                        <div class="col-xs-9">
                            <input name="paypal_email" type="text" class="form-control" id="paypal_email" placeholder="<?php echo display('paypal_email') ?>" value="<?php echo $website->paypal_email ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="currency" class="col-xs-3 col-form-label"><?php echo display('currency') ?> <i class="text-danger">*</i></label>
                        <div class="col-xs-9"><?php echo form_dropdown('currency', $currency_list, $website->currency , array('class'=>'form-control')); ?>
                             
                        </div>
                    </div>
                    </fieldset>


                    
                    <fieldset><legend>About Section</legend>
                    <div class="form-group row">
                        <label for="about" class="col-xs-3 col-form-label"><?php echo display('about') ?> <i class="text-danger"></i></label>
                        <div class="col-xs-9">
                            <input name="about" type="text" class="form-control" id="about" placeholder="<?php echo display('about') ?>" value="<?php echo $website->about ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-xs-3 col-form-label"><?php echo display('description') ?></label>
                        <div class="col-xs-9">
                            <textarea name="description" class="tinymce form-control"  placeholder="<?php echo display('description') ?>" rows="7"><?php echo $website->description ?></textarea>
                        </div>
                    </div> 
                    </fieldset>  


                    <fieldset><legend>Footer Section</legend>
                    <div class="form-group row">
                        <label for="google_map" class="col-xs-3 col-form-label"><?php echo display('google_map') ?></label>
                        <div class="col-xs-9">
                            <textarea name="google_map" class="form-control"  placeholder="<?php echo display('google_map') ?>" rows="7"><?php echo $website->google_map ?></textarea>
                        </div>
                    </div>   
                    </fieldset>


                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
 

