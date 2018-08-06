
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
        <div class="panel lobidrag">

            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                    <?php  $stus=$this->db->select('*')->from('bank_transaction')->where('booking_id',$booking->id_no)->get()->row();?>
                      <input type="hidden" name="inf" id="bkdate" value="<?php
                    date_default_timezone_set("Asia/Dhaka");
                    
                     
                      $downtime=$this->db->select('*')->from('booking_downtime')->get()->row();
                      foreach ($details as $booking) {}
 $bdate=$booking->date;
$dtime = ($downtime->downtime)*3600; 
$time = $booking->date;
$time = strtotime($time) + $dtime; // Add 1 hour
$time = date('F d, Y  H:i:s', $time); // Back to string
echo $time;

?> ">
                    </h4>
                </div>
                <?php  if($setting->payment_type =='bank'){ ?>
                  <center><p id="demo"></p></center>
                  <?php }?>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable2 table table-bordered ">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('booking_date') ?></th>
                                <th><?php echo display('booking_id') ?></th>
                                <th><?php echo display('name') ?></th>
                                <th><?php echo display('route_name') ?></th>
                                <th><?php echo display('total_seat') ?></th>
                                <th><?php echo display('price') ?></th>
                                <th><?php echo display('seat_numbers') ?></th>
                                <th><?php echo display('status') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($details)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($details as $booking) { 

                       
                                ?>

                            <tr class="<?php echo (!empty($booking->tkt_refund_id) ? "bg-danger" : null ) ?>">
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $booking->date; ?></td>
                                <td><?php echo $booking->id_no; ?></td>
                                <td><?php $result=$this->db->select('firstname,lastname')->from('tkt_passenger')->where('id_no',$booking->tkt_passenger_id_no)->get()->result();
                                 foreach ($result as $name) {
                                    echo $name->firstname.' '.$name->lastname;
                                 }
                                 ?></td>
                                <td><?php
                           $rd=$this->db->select('*')->from('trip_route')->where('id',$booking->trip_route_id)->get()->row();
                                 echo  $rd->name; ?></td>
                                <td><?php echo $booking->total_seat; ?></td>
                                <td><?php echo $booking->price; ?></td>
                                <td><?php echo $booking->seat_numbers; ?></td>
                                <td> <?php 
                                if($booking->payment_status == 1){
                                    echo 'Pending';
                                    }else{
                                    echo "Paid";
                                } ?></td>
                                <td>
                                    <?php 
                                   
                                      if($setting->payment_type =='bank'){ ?>
                              <?php   if($booking->payment_status == 1 AND $stus->booking_id == null){
                                    echo '<a type="button" class="test btn btn-primary btn-sm" onclick="modal_load('."'".$booking->id_no."'".')" data-toggle="modal">Confirmation</a>';
                                    }else{
                                    echo " ";
                                } ?>
                               <?php } ?>
                                    <a href="<?php echo base_url("website/User/view/$booking->id_no") ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                              
                                
                                
                             
                                    <a href="<?php echo base_url("website/User/delete_booking/$booking->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                
                </div>
            </div> 
        </div>
    </div>
</div>
<div id="add1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#012b72; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Payment info</strong></center>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">

                            <div class="panel-body">

                                <?= form_open('website/User/payment_confirm') ?>
                                    <div class="form-group row">
                                        <label for="id_no" class="col-sm-3 col-form-label"> <?php echo display('booking_id') ?>
                                          </label>
                                        <div class="col-sm-9">
                                           <input type="text" name="booking_id" value="" id="bookid" class="form-control" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id_no" class="col-sm-3 col-form-label"><?php echo display('transaction_no') ?>
                                          </label>
                                        <div class="col-sm-9">
                                           <input type="text" name="tran_num" value=""  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id_no" class="col-sm-3 col-form-label"> <?php echo display('payer_name') ?>
                                          </label>
                                        <div class="col-sm-9">
                                           <input type="text" name="payname" value=""  class="form-control">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="id_no" class="col-sm-3 col-form-label"><?php echo display('account_num') ?>
                                          </label>
                                        <div class="col-sm-9">
                                           <input type="text" name="bank_acc" value=""  class="form-control">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="id_no" class="col-sm-3 col-form-label"><?php echo display('bank_name') ?>
                                          </label>
                                        <div class="col-sm-9">
                                            <select name="bank_id" class="form-control">
                                            <?php $banks=$this->db->select('*')->from(' bank_info')->get()->result();
                                        foreach ($banks as $banks) { ?>
                                        <option value="<?php echo $banks->id; ?>"><?php echo $banks->bank_name; ?></option>
                                        <?php } ?>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id_no" class="col-sm-3 col-form-label"> <?php echo display('amount') ?>
                                          </label>
                                        <div class="col-sm-9">
                                           <input type="text" name="amount" value=""  class="form-control">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="id_no" class="col-sm-3 col-form-label"> <?php echo display('note') ?>
                                          </label>
                                        <div class="col-sm-9">
                                           <input type="text" name="note" value=""  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-danger w-md m-b-5" data-dismiss="modal"><?php echo display('deny') ?></button>
                                        <button type="submit" class="btn btn-success w-md m-b-5">
                                            <?php echo display('confirm') ?>
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="modal-footer">

        </div>

    </div>


</div>



 <script type="text/javascript">
function modal_load(id_no){
    $('#bookid').val(id_no);
    $('#add1').modal('show');
}

</script>
<script>
// Set the date we're counting down to
var bookingdate = $('#bkdate').val();
var countDownDate = new Date(bookingdate).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    var date = new Date(now);
   // alert(date.toString());
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = '<span id="d">'+days+'  </span>' + "Days | " + '<span id="h">'+hours +'  </span>'+ "Hours |"
    + '<span id="m">'+ minutes +'  </span>' + "M |" +'<span id="s">'+ seconds +'  </span>'+ "S ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<!-- jQuery -->

<head><?php $this->load->view('template/includes/js') ?> </head>