<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo (!empty($appSetting->title)?$appSetting->title:null) ?> - <?php echo (!empty($title)?$title:null) ?></title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url((!empty($appSetting->favicon)?$appSetting->favicon:'application/modules/website/assets/images/favicon.jpg')) ?>" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <link href="<?php echo base_url('application/modules/website/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/css/bootsnav.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/css/flaticon.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/owl-carousel/owl.carousel.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/owl-carousel/owl.theme.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/owl-carousel/owl.transitions.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/css/ion.rangeSlider.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('application/modules/website/assets/css/ion.rangeSlider.skinFlat.css') ?>" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url('application/modules/website/assets/css/rating.min.css') ?>" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url('application/modules/website/assets/css/select2.min.css') ?>" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url('application/modules/website/assets/css/website.css') ?>" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url('application/modules/website/assets/css/style.css') ?>" rel="stylesheet" type="text/css"/> 

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        
        <script src="<?php echo base_url('application/modules/website/assets/js/jquery.min.js') ?>" type="text/javascript"></script>
    </head>
    <body>
        <div class="se-pre-con"></div>

        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav">
            <div class="container"> 
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('website') ?>"><img src="<?php echo base_url((!empty($appSetting->logo)?$appSetting->logo:'application/modules/website/assets/images/logo.png')) ?>" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="<?php echo base_url('userlog') ?>"><i class="fa fa-print"></i><?php echo display('print_ticket') ?></a></li>
                        <li><a href="<?php echo base_url('userlog') ?>"><i class="fal fa-times-hexagon"></i><?php echo display('cancel_ticket') ?></a></li>
                        <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php 
             if(empty($this->session->userdata('id_no'))){
                echo display('login');
             }else{
               echo  $username=$this->session->userdata('firstname');
             }

                 ?></a>
                <ul class="dropdown-menu">
                    <?php if(empty($this->session->userdata('id_no'))){ ?>
                    <li><a href="<?php echo base_url('userlog') ?>"><i class="pe-7s-users"></i> User Login</a></li>
                    <li><a href="<?php echo base_url('login') ?>"><i class="pe-7s-settings"></i> Admin Login</a></li>
                    <?php }else{ ?>
                    <li><a href="<?php echo base_url('pass_logout') ?>"><i class="pe-7s-key"></i>  <?php echo display('logout') ?></a></li>
                    <?php } ?>
                </ul>
            </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>   
        </nav>
        <!-- End Navigation -->


        
        <!-- Main content -->
        <div class="content"> 
            <!-- load custom page -->
            <?php echo $this->load->view($module.'/'.$page) ?>


            <!-- load messages -->
            <div id="output" class="hide col-sm-12 alert"></div>
        </div> <!-- /.content -->


        <footer>
            <div class="container">
                <div class="row"> 

                    <div class="col-sm-3">
                        <div class="footer_box">
                            <h4 class="footer_title">Contact</h4>
                            <div class="address-inner">
                                <address>
                                    <strong><?php echo (!empty($appSetting->title)?$appSetting->title:null) ?></strong>
                                    <br>
                                    <?php echo (!empty($appSetting->address)?$appSetting->address:null) ?>
                                    <br> 
                                    <abbr title="Phone"><?php echo display('phone') ?>:</abbr> <?php echo (!empty($appSetting->phone)?$appSetting->phone:null) ?>
                                    <br> 
                                    <?php echo display('email') ?>: <a href="mailto:<?php echo (!empty($appSetting->title)?$appSetting->email:null) ?>"><?php echo (!empty($appSetting->email)?$appSetting->email:null) ?></a>
                                </address>
                            </div>
                        </div>
                    </div>
 
                    <!-- ENQUIRY FORM  -->
                    <div class="col-sm-3">
                        <div class="footer_box"> 
                            <h4 class="footer_title"><?php echo display('enquiry') ?></h4>
                            <?php echo form_open('enquiry/home/create', array('id' => 'enquiryFrm')) ?>
                                <div class="form-group">
                                    <input name="name" class="form-control" type="text" placeholder="<?php echo display('name') ?>">
                                </div>

                                <div class="form-group">
                                    <input name="email" class="form-control" type="text" placeholder="<?php echo display('email') ?>">
                                </div> 

                                <div class="form-group">
                                <input type='text' name="phone" class='form-control'  placeholder="<?php echo display('phone') ?>" >
                                </div>

                                <div class="form-group">
                                    <textarea name="enquiry" placeholder="<?php echo display('enquiry') ?>" class="form-control"></textarea>
                                </div> 
             
                     
                                <div class="form-group form-block "> 
                                    <button type="submit" class="btn btn-block btn-info"><?php echo display('submit') ?></button>
                                </div> 
                            <?php echo form_close() ?>
                        </div>
                    </div> 

                    <!-- RATING FORM  -->
                    <div class="col-sm-3">
                        <div class="footer_box">
                            <h4 class="footer_title"><?php echo display('rating') ?></h4>
                           
                            <?= form_open('ticket/feedback/form', array('id'=>'ratingFrm')) ?>
                               

                                <div class="form-group">
                                    <input name="tkt_booking_id_no" class="form-control" type="text" placeholder="<?php echo display('booking_id') ?>"  value="">
                                </div> 
             
                                <div class="form-group">
                                    <input name="name" class="form-control" type="text" placeholder="<?php echo display('name') ?>" value="">
                                </div> 
               
                                <div class="form-group">
                                    <div id="rating"></div>
                                    <input type="hidden" name="rating" value="3">
                                </div> 

                                <div class="form-group">
                                    <textarea name="comment" placeholder="<?php echo display('comment') ?>" class="form-control"></textarea>
                                </div> 

                            
                                <div class="form-group form-block "> 
                                    <button type="submit" class="btn btn-block btn-info"><?php echo display('submit') ?></button>
                                </div> 
                            <?php echo form_close() ?>
                        </div>
                    </div> 


                    <div class="col-sm-3">
                        <div class="footer_box">
                            <h4 class="footer_title"><?php echo display('google_map') ?> </h4> 
                            <?php echo (!empty($appSetting->google_map)?$appSetting->google_map:null) ?>
                        </div>
                    </div> 
                </div>
            </div>
        </footer>

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p><?php echo (!empty($appSetting->footer_text)?$appSetting->footer_text:null) ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-right">
                        <div class="payments-method">
                            <img src="<?php echo base_url('application/modules/website/assets/images/payments-method.png') ?>" alt="Payments">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a name="customer_service"></a>

        <script src="<?php echo base_url('application/modules/website/assets/js/bootstrap.min.js') ?>" type="text/javascript"></script> 
        <script src="<?php echo base_url('application/modules/website/assets/js/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/modules/website/assets/js/datepicker.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/modules/website/assets/js/datepicker.en.js') ?>" type="text/javascript"></script> 
        <script src="<?php echo base_url('application/modules/website/assets/owl-carousel/owl.carousel.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/modules/website/assets/js/jquery.counterup.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/modules/website/assets/js/waypoints.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/modules/website/assets/js/ion.rangeSlider.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/modules/website/assets/js/jquery.easing.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/modules/website/assets/js/rating.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/modules/website/assets/js/select2.min.js') ?>" type="text/javascript"></script> 
        <script src="<?php echo base_url('application/modules/website/assets/js/website.js') ?>" type="text/javascript"></script> 
        <script src="<?php echo base_url('application/modules/website/assets/js/script.js') ?>" type="text/javascript"></script> 


        <script type="text/javascript">
        $(document).ready(function() {


            //RATING FORM
            var output    = $("#output");
            var ratingFrm = $("#ratingFrm");
            ratingFrm.submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url    : $(this).attr('action'),
                    method : $(this).attr('method'),
                    dataType : 'json',
                    data   : $(this).serialize(),
                    success: function(data)
                    {
                        if (data.status == true)
                        {
                            output.removeClass('hide alert-danger').addClass('alert-success').html(data.success); 
                        } else {
                            output.removeClass('hide alert-success').addClass('alert-danger').html(data.exception); 
                        }
                    },
                    error: function(xhr)
                    {
                        alert('failed!');
                    }
                });
            });



            //ENQUIRY FORM
            var enquiryFrm = $("#enquiryFrm");
            enquiryFrm.submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url    : $(this).attr('action'),
                    method : $(this).attr('method'),
                    dataType : 'json',
                    data   : $(this).serialize(),
                    success: function(data)
                    {
                        if (data.status == true)
                        {
                            output.removeClass('hide alert-danger').addClass('alert-success').html(data.success); 
                        } else {
                            output.removeClass('hide alert-success').addClass('alert-danger').html(data.exception); 
                        }
                    },
                    error: function(xhr)
                    {
                        alert('failed!');
                    }
                });
            });


            // select 2 dropdown 
            $("select.select2:not(.dont-select-me)").select2({
                placeholder: "Select option",
                allowClear: true
            });  

            //preloader
            $(window).load(function() {
                $(".se-pre-con").fadeOut("slow");
            });


        });



        //print a div
        function printContent(el){
            var restorepage  = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
            location.reload();
        }
         
        
        </script>
    </body> 
</html>
