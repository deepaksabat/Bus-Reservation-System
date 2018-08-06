<div class="form-group text-right">
    <a href="<?php echo base_url();?>/offer/offer_controller/create_offer" class="btn btn-primary"><i class='fa fa-gift' aria-hidden='true'></i> <?php echo display('offer_list') ?></a>
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

                <?= form_open('offer/Offer_controller/offer_update/'. $data->offer_id) ?>
                <input type="hidden" name="offer_id" value="<?php echo $data->offer_id?>">

                    <div class="form-group row">
                        <label for="offer_name" class="col-sm-3 col-form-label"><?php echo display('offer_name') ?> *</label>
                        <div class="col-sm-9">
                            <input name="offer_name" class="form-control" type="text" placeholder="<?php echo display('offer_name') ?>" id="offer_name" value="<?php echo $data->offer_name?>">
                        </div>
                         
                    </div>
                    <div class="form-group row">
                        <label for="offer_start_date" class="col-sm-3 col-form-label"><?php echo display('offer_start_date') ?> *</label>
                        <div class="col-sm-9">
                            <input name="offer_start_date" class="datepicker form-control" type="text" placeholder="<?php echo display('offer_start_date') ?>" id="offer_start_date" value="<?php echo $data->offer_start_date?>">
                        </div>
                         
                    </div>
                    <div class="form-group row">
                        <label for="offer_end_date" class="col-sm-3 col-form-label"><?php echo display('offer_end_date') ?> *</label>
                        <div class="col-sm-9">
                            <input type="text" name="offer_end_date" class="datepicker form-control" placeholder="<?php echo display('offer_end_date') ?>" id="offer_end_date" value="<?php echo $data->offer_end_date?>">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for="offer_code" class="col-sm-3 col-form-label"><?php echo display('offer_code') ?> *</label>
                        <div class="col-sm-9">
                            <input type="text" name="offer_code" class="form-control" placeholder="<?php echo display('offer_code') ?>" id="offer_code" value="<?php echo $data->offer_code?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="offer_discount" class="col-sm-3 col-form-label"><?php echo display('offer_discount') ?> *</label>
                        <div class="col-sm-9">
                            <input type="text" name="offer_discount" class="form-control" placeholder="<?php echo display('offer_discount') ?>" id="offer_discount" value="<?php echo $data->offer_discount?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="offer_terms" class="col-sm-3 col-form-label"><?php echo display('offer_terms') ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="offer_terms" class="form-control" placeholder="<?php echo display('offer_terms') ?>" id="offer_terms" value="<?php echo $data->offer_terms?>">
                        </div>
                        
                    </div>
                     <div class="form-group row">
                        <label for="offer_route_id" class="col-sm-3 col-form-label"><?php echo display('offer_route_id') ?> *</label>
                        <div class="col-sm-9"> 
                          <?php echo form_dropdown('offer_route_id', $rout, $bb['offer_route_id'], 'class="form-control"'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="offer_number" class="col-sm-3 col-form-label"><?php echo display('offer_number') ?> *</label>
                        <div class="col-sm-9">
                            <input name="offer_number" class="form-control" type="text" placeholder="<?php echo display('offer_number') ?>" id="offer_number" value="<?php echo $data->offer_number?>">
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
<script type="text/javascript">
   $(function() {
           $(".datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
   });
</script>