<div class="clearfix"></div>
<div class="main-search-container" style="background-image: url(<?php echo base_url('application/modules/website/assets/images/bg.jpg') ?>)">
    <div class="main-search-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="home-form form-block">
                        <h3 class="form-block_title">Search Tours</h3>
                        <div class="form-block_des">Find your dream tour today!</div>
                       
                        <form action="<?php echo base_url('website/search') ?>"  style="padding:29px 0">
                            <div class="form-group custom-select">
                                <?php echo form_dropdown('start_point', $location_dropdown, $search->start_point, array('class'=>'select2 form-control', 'data-placeholder'=>display('start_point')) ) ?> 
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="form-group custom-select">
                                <?php echo form_dropdown('end_point', $location_dropdown, $search->end_point, array('class'=>'select2 form-control', 'data-placeholder'=>display('end_point')) ) ?> 
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="form-group">
                                <input type='text' name="date" class='form-control datepicker-here' data-language='en' placeholder="<?php echo display('date') ?>" value="<?php echo $search->date ?>">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="form-group custom-select">
                                <?php echo form_dropdown('fleet_type', $fleet_dropdown, $search->fleet_type, array('class'=>'select2 form-control', 'data-placeholder'=>display('fleet_type')) ) ?> 
                                <i class="fa fa-car"></i>
                            </div>

                            <button type="submit" class="btn btn-block">Find now!</button>
                        </form>
                    </div>
                </div>  



                <div class="col-sm-8">
                    <div class="header-title-inner">
                        <h2>On the placess you'll go</h2>
                        <h4>It is not down in any map; true place naver are.</h4>
                    </div>
                    <div class="row counter-inner hidden-sm">
                        <div class="col-sm-4">
                            <div class="counter-content">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="fa fa-users" style="line-height:34px;"></i>
                                    </div>
                                </div>
                                <h6><?php echo display('total_passenger') ?></h6> 
                                <p class="count-number">
                                    <?php echo (!empty($notifications->passenger->total)?$notifications->passenger->total:0) ?>    
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter-content">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="flaticon-bus"></i>
                                    </div>
                                </div>
                                <h6><?php echo display('total_fleet') ?></h6> 
                                <p class="count-number">
                                    <?php echo (!empty($notifications->fleet->total)?$notifications->fleet->total:0) ?>    
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter-content">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="flaticon-road-perspective-of-curves"></i>
                                    </div>
                                </div>
                                <h6><?php echo display('todays_trip') ?></h6> 
                                <p class="count-number">
                                    <?php echo (!empty($notifications->trip->total)?$notifications->trip->total:0) ?>    
                                </p>
                            </div>
                        </div>
                    </div>



                    <div id="offer" class="owl-carousel owl-theme">
                        <?php 
                        if (!empty($offers)) { 
                            foreach ($offers as $offer) { 
                            echo "<div class=\"item\"><img src=".base_url($offer->image)." class=\"img-responsive\" alt=\"\"></div>";
                            } 
                        } 
                        ?>  
                    </div>
                </div>


            </div>
        </div>
    </div>
</div> 


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="payment-system">
                <h2 class="block-title"><?php echo (!empty($appSetting->about)?$appSetting->about:null) ?></h2>
                <p><?php echo (!empty($appSetting->description)?$appSetting->description:null) ?></p> 
            </div>
        </div>
    </div>
</div>
 

<section class="testimonial_inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="block-title"><?php echo display('our_customers_say') ?></h2>
                <?php 
                if (!empty($ratings)) 
                {
                    foreach ($ratings as $rate)
                    {
                        echo "<div class=\"feedback_iner\">
                            <div class=\"feedback_container\">
                                <div class=\"feedback_stars\">" .str_repeat("<i class=\"fa fa-star\"></i>", $rate->rating). "</div>
                                <p>$rate->comment</p>
                            </div>
                            <div class=\"feedback_user\">
                                <div class=\"feedback_useruser_title\">
                                    $rate->name
                                    <span>($rate->tkt_booking_id_no)</span>
                                </div>
                            </div>
                        </div>"; 
                    }
                }
                ?> 
            </div>
        </div>
    </div>
</section>
 