<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open('ticket/feedback/form') ?>
                    <?php echo form_hidden('id', $feedback->id); ?>

                    <div class="form-group row">
                        <label for="tkt_booking_id_no" class="col-sm-3 col-form-label"><?php echo display('booking_id') ?> *</label>
                        <div class="col-sm-9">
                            <input name="tkt_booking_id_no" class="form-control" type="text" placeholder="<?php echo display('booking_id') ?>" id="tkt_booking_id_no" value="<?php echo $feedback->tkt_booking_id_no ?>">
                        </div>
                    </div> 
 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label"><?php echo display('name') ?> *</label>
                        <div class="col-sm-9">
                            <input name="name" class="form-control" type="text" placeholder="<?php echo display('name') ?>" id="name" value="<?php echo $feedback->name ?>">
                        </div>
                    </div> 
   
                    <div class="form-group row">
                        <label for="rating" class="col-sm-3 col-form-label"><?php echo display('rating') ?> *</label>
                        <div class="col-sm-9">
                            <input name="rating" class="form-control" type="number" placeholder="<?php echo display('rating') ?>" id="rating" value="<?php echo $feedback->rating ?>" >
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="comment" class="col-sm-3 col-form-label"><?php echo display('comment') ?></label>
                        <div class="col-sm-9">
                            <textarea name="comment" placeholder="<?php echo display('comment') ?>" class="form-control" id="comment"><?php echo $feedback->comment ?></textarea>
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
 