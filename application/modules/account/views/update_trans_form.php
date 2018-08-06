<div class="form-group text-right"> 
    <a href="<?php echo base_url();?>account/account_controller/create_transaction" class="btn btn-primary"><?php echo display('account_transaction') ?></a>
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
                    <?= form_open('account/account_controller/transaction_update/'. $data->account_tran_id) ?>
                    <input type="hidden" name="account_tran_id" value="<?php echo $data->account_tran_id ?>">
                    
                         <div class="form-group row">
                            <label for="account_id" class="col-sm-3 col-form-label"><?php echo display('account_id') ?> *</label>
                            <div class="col-sm-9">
                               <?php echo form_dropdown('account_id', $accountlist, $data->account_id, 'class="form-control"'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-sm-3 col-form-label"><?php echo display('amount') ?> *</label>
                            <div class="col-sm-9">
                               <input name="amount" class="form-control" type="text" placeholder="<?php echo display('amount') ?>" id="amount" value="<?php echo $data->amount?>"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="transaction_description" class="col-sm-3 col-form-label"><?php echo display('transaction_description') ?></label>
                            <div class="col-sm-9">
                                <textarea name="transaction_description" class="form-control" placeholder="<?php echo display('transaction_description') ?>" id="transaction_description"><?php echo $data->transaction_description; ?></textarea>
                            </div>
                        </div>
                         
                        <div class="form-group row">
                            <label for="pass_book_id" class="col-sm-3 col-form-label"><?php echo display('pass_book_id') ?></label>
                            <div class="col-sm-9">
                               <input name="pass_book_id" class="form-control" type="text" placeholder="<?php echo display('pass_book_idpass_book_id') ?>" id="pass_book_id" value="<?php echo $data->pass_book_id?>">  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="trip_id" class="col-sm-3 col-form-label"><?php echo display('trip_id') ?></label>
                            <div class="col-sm-9">
                               <input name="trip_id" class="form-control" type="text" placeholder="<?php echo display('trip_id') ?>" id="trip_id" value="<?php echo $data->trip_id?>">  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payment_id" class="col-sm-3 col-form-label"><?php echo display('payment_id') ?></label>
                            <div class="col-sm-9">
                               <input name="payment_id" class="form-control" type="text" placeholder="<?php echo display('payment_id') ?>" id="payment_id" value="<?php echo $data->payment_id?>"> 
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