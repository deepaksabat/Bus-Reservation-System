
<style>
p {
  text-align: center;
  font-size: 30px;
  margin-top:0px;
 
   width: 600px;
   font-weight: bold;
}
#d{

 font-family: Open+Sans;
}
#h{
 font-family:Open+Sans;
}
#m{
 font-family:Open+Sans;
}
#s{
 font-family:Open+Sans;
}
#demo{
    color:black;
}

.setting_icon {
    padding: 12px 15px !important;
}

.setting_icon i{
    background-color: transparent !important;
    border: 0 !important;
    color: #fff !important;
    vertical-align: middle;
}

.setting_icon span{
    line-height: 36px;      
    vertical-align: middle;
    border-right: 1px solid #fff;
    display: inline-block;
    padding-right: 15px;
}

.profile_btn{
    line-height: 36px !important;
    color: #fff;
    padding: 0 15px !important;
    margin: 12px 0;
    border-right: 1px solid #fff !important;
}

.nav .open>a, .nav .open>a:focus, .nav .open>a:hover{
    background-color: transparent !important;
}
.body{
    margin-left: 250px;
}
</style>
<head>
<title>User Update</title>

    <?php $this->load->view('template/includes/head') ?> </head>
<div class="navbar-custom-menu" >
<span style=" float:left;"> <img src="<?php echo base_url((!empty($setting->logo)?$setting->logo:'assets/img/icons/mini-logo.png')) ?>" alt=""></span>
<span style=" float:right;">
        <ul class="nav navbar-nav">
            <!-- Messages -->
            <!-- settings -->
            <li> <?php
                  foreach ($details as $booking){}?>
                <a href="<?php echo base_url('website/User/upform_pasenger/').$booking->tkt_passenger_id_no ?>" class="btn btn-sm profile_btn" title="Edit"><?php echo display('profile') ?></a> </li>
            <li class="dropdown dropdown-user">

            <a href="#" class="dropdown-toggle setting_icon" data-toggle="dropdown" style="color: white;"><span><?php echo $this->session->userdata('firstname') ?></span> <i class="pe-7s-settings"></i></a>

                <ul class="dropdown-menu">
                                      <li><a href="<?php echo base_url('pass_logout'); ?>"><i class="pe-7s-key"></i>Logout</a></li>
                                    </ul>
            </li>
        </ul>
        </span>
    </div>
<div class="row" style="background-color: #012b72">
    <div class="col-sm-12 col-md-12">
        <div class="panel ">
            <div class="panel-heading">
                <div class="panel-title" style=" float:left; color: white;">
                    <a href="<?php echo base_url('website/User/user_details') ?>" class="btn btn-success" title="user list"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i> Back</a>
                </div>
                <?php if ($this->session->flashdata('message')) { ?>
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo $this->session->flashdata('message') ?>
</div>
<?php } ?>
<?php if ($this->session->flashdata('exception')) { ?>
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo $this->session->flashdata('exception') ?>
</div>
<?php } ?>
<?php if (validation_errors()) { ?>
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo validation_errors() ?>
</div>
<?php } ?>
            </div>
            <div class="panel-body text-center body">

                <?= form_open_multipart('website/User/passenger_form') ?>
                    <?php echo form_hidden('id', $passenger->id); ?>
                    <?php echo form_hidden('id_no', $passenger->id_no); ?>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label"><?php echo display('name') ?> *</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input name="firstname" class="form-control" type="text" placeholder="<?php echo display('firstname') ?>" id="name" value="<?php echo $passenger->firstname ?>">
                                </div>
                                <div class="col-sm-2">
                                    <input name="middle_name" class="form-control" type="text" placeholder="<?php echo display('middle_name') ?> (optional)" value="<?php echo $passenger->middle_name ?>">
                                </div>
                                <div class="col-sm-3">
                                    <input name="lastname" class="form-control" type="text" placeholder="<?php echo display('lastname') ?>" value="<?php echo $passenger->lastname ?>">
                                </div>
                            </div> 
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label"><?php echo display('phone') ?></label>
                        <div class="col-sm-6">
                            <input name="phone" class="form-control" type="text" placeholder="<?php echo display('phone') ?>" id="phone" value="<?php echo $passenger->phone ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label"><?php echo display('email') ?></label>
                        <div class="col-sm-6">
                            <input name="email" class="form-control" type="text" placeholder="<?php echo display('email') ?>" id="email" value="<?php echo $passenger->email ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label"><?php echo display('password') ?></label>
                        <div class="col-sm-6">
                            <input name="password" class="form-control" type="hidden" placeholder="<?php echo display('password') ?>" value="<?php echo $passenger->password; ?>" id="password" >
                            <input name="old_password" class="form-control" type="password" placeholder="<?php echo display('password') ?>" value="" id="old_password" >
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="date_of_birth" class="col-sm-2 col-form-label"><?php echo display('date_of_birth') ?> </label>
                        <div class="col-sm-6">
                            <input name="date_of_birth" class="form-control datepicker" type="text" placeholder="<?php echo display('date_of_birth') ?>" id="date_of_birth" value="<?php echo $passenger->date_of_birth ?>">
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label"><?php echo display('image') ?></label>
                        <div class="col-sm-6">
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
                        <label for="address_line_1" class="col-sm-2 col-form-label"><?php echo display('address_line_1') ?></label>
                        <div class="col-sm-6">
                            <input name="address_line_1" class="form-control" type="text" placeholder="<?php echo display('address_line_1') ?>" id="address_line_1" value="<?php echo $passenger->address_line_1 ?>">
                        </div>
                    </div> 
 
                    <div class="form-group row">
                        <label for="address_line_2" class="col-sm-2 col-form-label"><?php echo display('address_line_2') ?></label>
                        <div class="col-sm-6">
                            <input name="address_line_2" class="form-control" type="text" placeholder="<?php echo display('address_line_2') ?>" id="address_line_2" value="<?php echo $passenger->address_line_2 ?>">
                        </div>
                    </div> 
 
                    <div class="form-group row">
                        <label for="city" class="col-sm-2 col-form-label"><?php echo display('city') ?></label>
                        <div class="col-sm-6">
                            <input name="city" class="form-control" type="text" placeholder="<?php echo display('city') ?>" id="city" value="<?php echo $passenger->city ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="zip_code" class="col-sm-2 col-form-label"><?php echo display('zip_code') ?></label>
                        <div class="col-sm-6">
                            <input name="zip_code" class="form-control" type="text" placeholder="<?php echo display('zip_code') ?>" id="zip_code" value="<?php echo $passenger->zip_code ?>">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="country" class="col-sm-2 col-form-label"><?php echo display('country') ?></label>
                        <div class="col-sm-6">
                            <?php echo form_dropdown('country', $country_list, (!empty($passenger->country)?$passenger->country:"BD"), ' class="form-control"') ?> 
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status *</label>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <?php echo form_radio('status', '1', (($passenger->status==1)?1:0), 'id="status"'); ?>Active
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('status', '0', (($passenger->status=="0")?1:0) , 'id="status1"'); ?>Inactive
                            </label> 
                        </div>
                    </div>
         
         
                    <div class="form-group text-center">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>  
        </div>
    </div>
</div>
<head><?php $this->load->view('template/includes/js') ?> </head>