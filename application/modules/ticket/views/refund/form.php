<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('ticket/refund/index') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open('ticket/refund/form') ?>
                    <?php echo form_hidden('id', $refund->id); ?>

                    <div class="form-group row">
                        <label for="tkt_booking_id_no" class="col-sm-3 col-form-label"><?php echo display('booking_id') ?> *</label>
                        <div class="col-sm-9">
                            <input name="tkt_booking_id_no" class="form-control" type="text" placeholder="<?php echo display('booking_id') ?>" id="tkt_booking_id_no" value="<?php echo $refund->tkt_booking_id_no ?>">
                        </div>
                    </div> 
 
                    <div class="form-group row">
                        <label for="tkt_passenger_id_no" class="col-sm-3 col-form-label"><?php echo display('passenger_id') ?> *</label>
                        <div class="col-sm-9">
                            <input name="tkt_passenger_id_no" class="form-control" type="text" placeholder="<?php echo display('passenger_id') ?>" id="tkt_passenger_id_no" value="<?php echo $refund->tkt_passenger_id_no ?>">
                        </div>
                    </div> 
 
                    <div class="form-group row">
                        <label for="cancelation_fees" class="col-sm-3 col-form-label"><?php echo display('cancelation_fees') ?> *</label>
                        <div class="col-sm-9">
                            <input name="cancelation_fees" class="form-control" type="text" placeholder="<?php echo display('cancelation_fees') ?>" id="cancelation_fees" value="<?php echo $refund->cancelation_fees ?>">
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="causes" class="col-sm-3 col-form-label"><?php echo display('causes') ?></label>
                        <div class="col-sm-9">
                            <textarea name="causes" placeholder="<?php echo display('causes') ?>" class="form-control" id="causes"><?php echo $refund->causes ?></textarea>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="comment" class="col-sm-3 col-form-label"><?php echo display('comment') ?></label>
                        <div class="col-sm-9">
                            <textarea name="comment" placeholder="<?php echo display('comment') ?>" class="form-control" id="comment"><?php echo $refund->comment ?></textarea>
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