
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

</style>
<head>
<title>User Details</title>

    <?php $this->load->view('template/includes/head') ?> </head>
<div class="navbar-custom-menu" style=" float:right;">

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
    </div>
      
  
<div class="row" style="background-color: #012b72">
    <div class="col-sm-12 col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">

                    <h4>
                          <a href="<?php echo base_url('website/User/user_details') ?>" class="btn btn-success" title="user list"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i> Back</a>
                        <a href="#" class="btn btn-sm btn-danger" title="Print" onclick="printContent('PrintMe')"><i class="fa fa-print"></i></a>  
                    </h4>
                </div>
            </div>
  
            <div class="panel-body" id="PrintMe">

                <div class="ticket-content">
                    <div class="table-responsive">
                        <table style="width:100%;margin-bottom:10px">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="ticket-logo">
                                            <img src="<?php echo base_url(!empty($appSetting->logo)?$appSetting->logo:null) ?>" class="img-responsive" alt="">
                                        </div>
                                    </td>
                                    <td style="vertical-align:middle;">
                                        <p class="text-right"><strong><?php echo display('phone') ?> : </strong><?php echo (!empty($appSetting->phone)?$appSetting->phone:null) ?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
     

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong><?php echo display('pickup_location') ?>:</strong> <?php echo (!empty($ticket->pickup_trip_location)?$ticket->pickup_trip_location:null) ?></td>
                                    <td><strong><?php echo display('drop_location') ?>:</strong> <?php echo (!empty($ticket->drop_trip_location)?$ticket->drop_trip_location:null) ?></td>
                                    <td><strong><?php echo display('date') ?>:</strong> <?php echo (!empty($ticket->booking_date)?$ticket->booking_date:null) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="passanger-info table-responsive">
                        <div class="col-sm-12">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><strong><?php echo display('name') ?> :</strong>
                                            <?php echo (!empty($ticket->passenger_name)?$ticket->passenger_name:null) ?>
                                            </li>

                                            <li><strong><?php echo display('booking_id') ?> :</strong>
                                                <?php echo (!empty($ticket->booking_id_no)?$ticket->booking_id_no:null) ?></li>

                                            <li><strong><?php echo display('route_name') ?> :</strong>
                                            <?php echo (!empty($ticket->route_name)?$ticket->route_name:null) ?></li>
                                            
                                            <li><strong><?php echo display('request_facilities') ?> :</strong>
                                                <?php echo $ticket->request_facilities ?>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>  
                                        <dl class="list-unstyled text-right">
                                            <li>
                                            <strong><?php echo display('passenger_id') ?> :</strong> 
                                            <?php echo (!empty($ticket->tkt_passenger_id_no)?$ticket->tkt_passenger_id_no:null) ?></li>
                                            <li>
                                            <strong><?php echo display('trip_id') ?> :</strong> 
                                            <?php echo (!empty($ticket->trip_id_no)?$ticket->trip_id_no:null) ?></li>
                                            <li>
                                            <strong>Payment status:</strong> 
                                            <?php $payment=$ticket->payment_status;
                                            if($payment == 1){
                                            echo 'Pending';
                                            }else{
                                            echo 'Paid';}?></li>
                                        </dl>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Seat name</th>
                                            <th>Quantity</th>
                                            <th class="text-right">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo (!empty($ticket->seat_serial)?(str_replace(',', ', ', $ticket->seat_serial)):null) ?></td>
                                            <td><?php echo (!empty($ticket->quantity)?$ticket->quantity:0) ?></td>
                                            <th class="text-right"><?php echo $price = (!empty($ticket->price)?$ticket->price:0) ?> <?php echo $currency; ?></th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th>Discount</th>
                                            <th class="text-right"><?php echo $discount = (!empty($ticket->discount)?$ticket->discount:0) ?> <?php echo $currency; ?></th>
                                        </tr> 
                                        <tr>
                                            <td></td>
                                            <th>Grand Total</th>
                                            <th class="text-right"><?php echo $price-$discount ?> <?php echo $currency; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<head><?php $this->load->view('template/includes/js') ?> </head>