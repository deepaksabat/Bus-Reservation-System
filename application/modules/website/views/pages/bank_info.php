<body>
<div class="row" style="width: 100%;">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title" style="text-align:center;">
                    <h4 style="color:green">
                        select Bank from here
                    </h4>
                </div>
            </div>
            <div class="panel-body">
             <?php echo form_open_multipart('website/setting/form','class="form-inner"') ?>
             <?php foreach ($bankinfo as $bank) {
              ?>
              <div class="form-group row">
               <div class="col-sm-4"></div>
                <div class="col-sm-6" >
                    <img src="<?php echo base_url(!empty($bank->bank_logo)?$bank->bank_logo: "./assets/img/icons/default.jpg") ?>" class="img-thumbnail" width="125" height="100"><br>
                   <label class="col-form-label" style="font-size: 18px"><input type="radio" name="optradio" value="<?php echo $bank->id ?>" style="height:15px;width:15px;"><?php echo $bank->bank_name ?></label>
                     <label for="bank_logo" class="col-form-label"><?php echo $bank->account_details ?></label>
                </div>
           
            </div> 

            <?php } ?>
            <div class="panel-title" style="text-align:center;">
            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
            </div>
             <?php echo form_close() ?>
        </div>
    </div>
</div>
</div>
</body>