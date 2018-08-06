<style>.close{
color:white;}</style>
<?php $setting=$this->db->select('*')->from('ws_setting')->get()->result();
foreach ($setting as $transactiontype) {
   $transactiontype->payment_type;
}


$bank=$this->db->select('*')->from('bank_info')->get()->result();

 ?>
   <div><input type="hidden" name="sesval" id="pas_ses_id" value="<?php echo $this->session->userdata('id_no'); ?>"></div>
   <span class="container">
     <div id="passengerMsg" class="alert hide"></div> 
    <ul class="nav nav-pills">
         <?php if(empty($this->session->userdata('id_no'))){?>
    <li class="active"><button type="button" class="btn btn-primary btn-md ">Registration</button></li>
   
    <li><button type="button" class="btn btn-primary btn-md " data-target="#login_modal" data-toggle="modal"><?php echo display('login') ?></button></li>
    <?php }else{ ?>
    <?php } ?>
  </ul>
   <?php echo form_open('website/search/checkout', array('class'=>'row', 'id'=>'checkoutFrm')); ?>
    <div class="col-sm-5">

<div id="ps_inf">
  
  
  <div class="tab-content">
    
    <div id="home" class="tab-pane fade in active">
       <div class="passenger-form">
            <h4>Passenger Details </h4>
            <input type="hidden" name="booking_id_no" value="<?php echo (!empty($booking->id_no)?$booking->id_no:null) ?>">
            <input type="hidden" name="passenger_id_no" value="<?php echo (!empty($booking->tkt_passenger_id_no)?$booking->tkt_passenger_id_no:null) ?>" id="pid">
            <input type="hidden" name="hdn_passenger_id" id="psid" >
            <div class="form-group">
                <label>Name *</label>
                <div class="row">
                    <div class="col-sm-6">
                        <input name="firstname" class="form-control" type="text" placeholder="First Name" id="name" value="<?php echo $this->session->userdata('firstname'); ?>">
                    </div>
                    <div class="col-sm-6">
                        <input name="lastname" class="form-control" type="text" placeholder="Last Name" value="<?php echo $this->session->userdata('lastname'); ?>" id="lastname">
                    </div>
                </div>
            </div>
            <div class="form-group">
              
                <label>Phone *</label>
                <input type="text" name="phone" value="<?php echo $this->session->userdata('phone'); ?>" class="form-control" id="phone"  placeholder="Phone number"  >
            </div>
            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email address" required="required" value="<?php echo $this->session->userdata('email'); ?>">
            </div>
            <div class="form-group">
                <label>Password *</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Your Password" value="<?php echo $this->session->userdata('password'); ?>" required="required">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="address_line_1" id="address" class="form-control" rows="3" placeholder="Address"><?php echo $this->session->userdata('address'); ?></textarea>
            </div>
        </div>
    </div>
    
   
  </div>
 
    </div>

    </div>
    <div class="col-sm-7">
        <div class="journey-details">
            <h4>Journey Details</h4>  
            <dl class="dl-horizontal">
                <dt>Route</dt>
                <dd>&nbsp; 
                    <?php echo (!empty($booking->route_name)?$booking->route_name:null) ?> 
                </dd>
                <dt>Pickup location</dt>
                <dd>&nbsp; 
                    <?php echo (!empty($booking->pickup_trip_location)?$booking->pickup_trip_location:null) ?>  
                </dd>
                <dt>Drop location</dt>
                <dd>&nbsp;  
                    <?php echo (!empty($booking->drop_trip_location)?$booking->drop_trip_location:null) ?> 
                </dd> 
                <dt>Request facilities</dt>
                <dd>&nbsp;  
                    <?php echo (!empty($booking->request_facilities)?$booking->request_facilities:'None') ?> 
                </dd> 
                <dt>Booking date</dt>
                <dd>&nbsp;
                    <?php echo (!empty($booking->booking_date)?$booking->booking_date:null) ?>
                </dd>
            </dl>
        </div>
        <div class="pament-details">

            <table class="table table table-bordered table-striped">
                <tbody class="itemNumber">
                    <tr>
                        <td class="text-right" style="width: 60%;">Seat(s)</td>
                        <th class="text-right"><?php echo (!empty($booking->seat_numbers)?$booking->seat_numbers:0) ?></th>
                    </tr>
                    <tr>
                        <td class="text-right">Price</td>
                        <th class="text-right"><?php echo (!empty($booking->price)?($booking->price/$booking->total_seat):0) ?></th>
                    </tr>
                    <tr>
                        <td class="text-right">Total</td>
                        <th class="text-right"><?php echo (!empty($booking->price)?$booking->price:0) ?></th>
                    </tr>
                    <tr>
                        <td class="text-right">Discount</td>
                        <th class="text-right"><?php echo (!empty($booking->discount)?$booking->discount:0) ?></th>
                    </tr>
                    <tr>
                        <td class="text-right"><b>Grand total</b></td>
                        <th class="text-right"><?php echo (!empty($booking->price)?($booking->price-$booking->discount):0) ?></th>
                    </tr>
                </tbody>
            </table> 
            <div id="bnk">
                <?php foreach ($bank as $bank) {?><label class="col-form-label" style="font-size: 18px"><?php echo $bank->bank_name ?></label>
                     -<label for="bank_logo" class="col-form-label"><?php echo $bank->account_details ?></label><br>
                     <?php }?>
                 </div>
            <div style="margin-top:20px">
                <input type="hidden" name="typepame" id="paytype" value="<?php echo $transactiontype->payment_type;?>">
                <button class="btn btn-block btn-primary" id="paypal"><?php echo display('paypal_checkout') ?></button>
                <button class="btn btn-block btn-primary" id="local"><?php echo display('cash') ?></button>
                <button class="btn btn-block btn-primary" id="bank"><?php echo display('confirm_booking') ?></button>
            </div>

            <table style="margin-top:20px">
                <tbody>  
<!--                     <tr>
                        <td style="width:50%"><a href="https://www.paypal.com/uk/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/uk/webapps/mpp/paypal-popup', 'WIPaypal', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo" width="120"></a></td> 
                    </tr> -->
                </tbody>
            </table>
        </div>
       
    </div>   
<?php echo form_close(); ?>
 <div id="login_modal" class="modal fade" role="dialog" style="width: 95%">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #012B72;color: white">
                    <button type="button" class="close" onclick="hidemodal()" style="margin-right: 60px">&times;</button>
                    <center><strong>Enter Your Login Info</strong></center>
                </div>
                <div class="modal-body">
                   <div id="passengerErr" class="alert hide"></div> 
                         <?= form_open_multipart('website/user/newlog', array("id"=>"logform")) ?>
                      
                        <div class="form-group row">
                            <label for="owner" class="col-sm-2 col-form-label">
                                <?php echo display('email') ?>
                            </label>
                            <div class="col-sm-4">
                                <input name="emails" class="form-control" type="email" placeholder="<?php echo display('email') ?>" id="emails">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">
                                <?php echo display('password') ?>
                            </label>
                            <div class="col-sm-4">
                                <input name="passwords" class="form-control" type="password" placeholder="<?php echo display('password') ?>" id="passwords">
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success">
                                <?php echo display('login') ?>
                            </button>
                        </div>
                        <?php echo form_close() ?>

                </div>

            </div>
        </div>

    </div>
</span>

 <script type="text/javascript">
     var pyatype=document.getElementById("paytype").value;
      if ( pyatype == "disable" ) {
       document.getElementById('paypal').style.visibility = 'hidden';
       document.getElementById('bank').style.visibility = 'hidden';
        document.getElementById('local').style.visibility = 'visible';
         document.getElementById('bnk').style.visibility = 'hidden';
    } else if (pyatype == "enable" ) {
        document.getElementById('local').style.visibility = 'hidden';
        document.getElementById('bank').style.visibility = 'hidden';
        document.getElementById('paypal').style.visibility = 'visible';
        document.getElementById('bnk').style.visibility = 'hidden';
    } else{
      document.getElementById('local').style.visibility = 'hidden';
      document.getElementById('paypal').style.visibility = 'hidden';
      document.getElementById('bank').style.visibility = 'visible';
    }

   
 </script>

<script type="text/javascript">
$(document).ready(function(){ 

    var checkoutFrm   = $("#checkoutFrm");
    var outputPreview = $('#outputPreview');

    checkoutFrm.on('submit', function(e) {
        e.preventDefault(); 
       
        $.ajax({
            method: checkoutFrm.attr('method'),
            url   : checkoutFrm.attr('action'),
            data  : checkoutFrm.serialize(),
            dataType: 'json',
            success: function(data)
            {
              var pyatype=document.getElementById("paytype").value;
             if(pyatype=='enable'){ 
                if (data.status == true)
                {
                    outputPreview.removeClass("hide").removeClass("alert-danger").addClass('alert-success').html(data.success);
                    
                    setInterval(function(){
                           window.location.href = '<?= base_url() ?>'+'website/paypal/buy/'+data.booking_id_no;
                    }, 1000);
                }else{
                    outputPreview.removeClass("hide").removeClass("alert-success").addClass('alert-danger').html(data.exception);
                }
            }else if(pyatype=='disable'){
                if (data.status == true)
                {
                    outputPreview.removeClass("hide").removeClass("alert-danger").addClass('alert-success').html(data.success);
                    
                    setInterval(function(){
                        window.location.href = '<?= base_url() ?>'+'website/paypal/paymentlocal/'+data.booking_id_no;
                          
                    }, 1000);
                } else {
                    outputPreview.removeClass("hide").removeClass("alert-success").addClass('alert-danger').html(data.exception);
                }
                }else{
                if (data.status == true)
                {
                    outputPreview.removeClass("hide").removeClass("alert-danger").addClass('alert-success').html(data.success);
                    
                    setInterval(function(){
                        window.location.href = '<?= base_url() ?>'+'website/paypal/bank_info/'+data.booking_id_no;
                          
                    }, 1000);
                } else {
                    outputPreview.removeClass("hide").removeClass("alert-success").addClass('alert-danger').html(data.exception);
                }
                }
            },
            error: function()
            {
                alert('failed...');
            }
        }); 
    });

});
</script>
<script type="text/javascript">
   $("#logform").submit(function(e){
        e.preventDefault();
        var passengerMsg    = $("#passengerMsg");
        var passengerErr    = $("#passengerErr");
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function()
            {
                passengerMsg.removeClass('hide');
                passengerErr.removeClass('hide');

            },

            success: function(data)
            {  
                if (data.exception) {
                    passengerErr.addClass('alert-danger').removeClass('alert-success').html(data.exception);

                    //$('#login_modal').modal('hide');
                }else{
                    passengerMsg.addClass('alert-success').removeClass('alert-danger').html(data.message);
                     
                     var x = document.getElementById("login_modal");
                     x.style.display = "none";
                     console.log(data.firstname);
                     document.getElementById("name").value = data.firstname;
                     document.getElementById("lastname").value = data.lastname;
                     document.getElementById("email").value = data.email;
                     document.getElementById("password").value = data.password;
                     document.getElementById("phone").value = data.phone;
                     document.getElementById("address").value = data.address;
                     document.getElementById("psid").value = data.id_no;
                }
            },
            error: function(xhr)
            {
                alert('failed!');
            }

        });

    });

   function hidemodal() {
     var x = document.getElementById("login_modal");
                     x.style.display = "none";
}

</script>
