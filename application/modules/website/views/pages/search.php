<div class="clearfix"></div>

<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="tools-ber">
                    <div class="row form-block">
                        <form action="<?php echo base_url('website/search') ?>">
                            <div class="col-xs-12 col-sm-3 col-md-2">
                                <div class="form-group custom-select">
                                    <?php echo form_dropdown('start_point', $location_dropdown, $search->start_point, array('class'=>'select2 form-control', 'data-placeholder'=>display('start_point')) ) ?> 
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2">
                                <div class="form-group custom-select">
                                    <?php echo form_dropdown('end_point', $location_dropdown, $search->end_point, array('class'=>'select2 form-control', 'data-placeholder'=>display('end_point')) ) ?> 
                                     <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2">
                                <div class="form-group">
                                    <input type='text' name="date" class='form-control datepicker-here' data-language='en' placeholder="<?php echo display('date') ?>" value="<?php echo $search->date ?>">
                                <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2">
                                <div class="form-group custom-select">
                                    <?php echo form_dropdown('fleet_type', $fleet_dropdown, $search->fleet_type, array('class'=>'select2 form-control', 'data-placeholder'=>display('fleet_type')) ) ?> 
                                <i class="fa fa-car"></i>
                                </div>
                            </div> 
                            <div class="col-xs-12 col-sm-3 col-md-4">
                                <button type="submit" class="btn btn-block">Find now!</button>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="tour-inner">
    <div class="container">
        <div class="row m_l_r tour-content">
            <div class="col-sm-12 col-md-12 p_l_r"> 
                <div class="search-list-header">
                    <div class="row "> 
                        <div class="col-xs-12 col-sm-2 col-md-3">
                            <div class="header-title">Operator</div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2">
                            <div class="header-title">Departure</div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2">
                            <div class="header-title">Duration</div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2">
                            <div class="header-title">Arrival</div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-1">
                            <div class="header-title">Fare</div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2">
                            <div class="header-title">Operator</div>
                        </div>
                    </div>
                </div>

                <?php if (!empty($trip_list)) { ?>
                    <?php foreach ($trip_list as $trip) { ?>
                        <div class="search-list">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 col-md-3">
                                    <div class="operator-type">
                                        <h4 class="operator-name"><?php echo $trip->trip_route_name ?></h4>
                                        <div class="bus-type"><?php echo $trip->fleet_registration_no ?></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="dep-time-counter">
                                        <div class="dep-time"><?php echo $trip->start_time ?></div>
                                        <div class="dep-counter"><?php echo $trip->pickup_trip_location ?></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="duration-inner">
                                        <div class="duration"><?php echo $trip->duration ?></div> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="arr-time-counter">
                                        <div class="arr-time"><?php echo $trip->end_time ?></div>
                                        <div class="arr-counter"><?php echo $trip->drop_trip_location ?></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-1">
                                    <div class="starting-price"> 
                                        <div class="price"><?php echo $trip->price ?></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="seat-view"> 

                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"
                                            data-trip-route-id="<?php echo $trip->trip_route_id ?>" 
                                            data-trip-id-no="<?php echo $trip->trip_id_no ?>" 
                                            data-fleet-registration-id="<?php echo $trip->fleet_registration_id ?>" 
                                            data-fleet-type-id="<?php echo $trip->fleet_type_id ?>" 
                                            data-booking-date="<?php echo $trip->booking_date ?>" 
                                        ><?php echo display('book') ?> </button>

                                        <div class="reating">
                                        <?php 
                                            $ratings = $this->db->select("AVG(tf.rating) AS rating")
                                                ->from('tkt_booking AS tb')
                                                ->join('tkt_feedback AS tf','tf.tkt_booking_id_no = tb.id_no','left') 
                                                ->join('trip_assign AS ta','ta.id_no = tb.trip_id_no', 'left')
                                                ->where('ta.fleet_registration_id', $trip->fleet_registration_id)
                                                ->get()
                                                ->row();  
                                            echo str_repeat("<i class=\"fa fa-star\"></i>", (!empty($ratings->rating) ? (($ratings->rating)) : 1)); 
                                        ?> 
                                        </div>

                                        <div class="seat-number">
                                            <?php
                                            $bookingResult = 0;
                                            $bookingResult = $this->db->select("SUM(tb.total_seat) AS available")
                                                ->from("tkt_booking AS tb")
                                                ->join('trip_assign AS ta', "ta.id_no = tb.trip_id_no")
                                                ->where('tb.trip_id_no', $trip->trip_id_no)
                                                ->group_start()
                                                    ->where("tb.tkt_refund_id IS NULL", null, false)
                                                    ->or_where("tb.tkt_refund_id", 0)
                                                    ->or_where("tb.tkt_refund_id", null)
                                                ->group_end()
                                                ->get()
                                                ->row()
                                                ->available; 
                                             
                                            if (($trip->fleet_seats) > 0)
                                            echo ($trip->fleet_seats-$bookingResult).' '.display('seats_available');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="search-list">
                        <div class="row">
                            <?php echo display('no_trip_avaiable') ?>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>


<!-- ----------------------------------------------------------------
----------------------------------------------------------------------
---------------------------------------------------------------------- -->
 

<!--Start modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content"> 

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
                <div id="outputPreview" class="alert hide modal-title" role="alert" >
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5 col-xs-12">
                        <div class="price-details">
                            <div class="seatsList"></div>
                        </div> 

                        <div class="seat-details">
                            <div class="seat-details-content col-xs-4">
                                <div class="seat selected">
                                    <div class="seat-body">
                                        <span class="seat-handle-left"></span>
                                        <span class="seat-handle-right"></span>
                                        <span class="seat-bottom"></span>
                                    </div>
                                </div>
                                <span>Selected Seat</span>
                            </div>
                            <div class="seat-details-content col-xs-4">
                                <div class="seat occupied">
                                    <div class="seat-body">
                                        <span class="seat-handle-left"></span>
                                        <span class="seat-handle-right"></span>
                                        <span class="seat-bottom"></span>
                                    </div>
                                </div>
                                <span>Available Seat</span>
                            </div> 
                            <div class="seat-details-content col-xs-4">
                                <div class="seat ladies">
                                    <div class="seat-body">
                                        <span class="seat-handle-left"></span>
                                        <span class="seat-handle-right"></span>
                                        <span class="seat-bottom"></span>
                                    </div>
                                </div>
                                <span>Booked Seat</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-7 col-xs-12"> 
                        <?php echo form_open('website/search/booking/', array('class' => 'price-details', 'id'=>'bookingFrm')) ?>
                            <div class="form-group">
                                <label for="pickup_location"><?php echo display('pickup_location') ?></label>
                                <select name="pickup_location" id="pickup_location" class="select2 location" style="width:100%"></select>
                            </div>
                            <div class="form-group">
                                <label for="drop_location"><?php echo display('drop_location') ?></label>
                                <select name="drop_location" id="drop_location" class="select2 location" style="width:100%"></select>
                            </div> 
                            <div class="form-group">
                                <label for="offerCode"><?php echo display('offer_code') ?></label>
                                <input name="offer_code" id="offerCode" class="form-control" placeholder="<?php echo display('offer_code') ?>" autocomplete="off" />
                            </div> 
                            <div class="form-group">
                                <label for="facilities"><?php echo display('request_facilities') ?></label>
                                <div id="facilities"></div>
                            </div>
                            <div class="table-responsive ">
                                <table class="table table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-right" style="width: 30%;">Seat(s)</td>
                                            <th id="seatPreview">---</th>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Price</td>
                                            <th id="pricePreview">0</th>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Total</td>
                                            <th id="totalPreview">0</th>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Discount</td>
                                            <th id="discountPreview">0</th>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><b>Grand Total</b></td>
                                            <th id="grandTotalPreview">0</th>
                                        </tr>
                                    </tbody>
                                </table>

                                <input type="hidden" name="trip_route_id"/>
                                <input type="hidden" name="fleet_registration_id"/>
                                <input type="hidden" name="trip_id_no"/>
                                <input type="hidden" name="fleet_type_id"/>
                                <input type="hidden" name="total_seat"/>
                                <input type="hidden" name="seat_number"/>
                                <input type="hidden" name="price"/>
                                <input type="hidden" name="offer_code"/>
                                <input type="hidden" name="discount"/>
                                <input type="hidden" name="booking_date"/>

                            </div>
                            <button class="btn btn-block">Continue</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->

 

<script type="text/javascript">
$(document).ready(function() {

    /*
    *------------------------------------------------------
    * Modal on show event
    * @function: findBookingInformation()
    * @return  : location, facilities, seatsList
    *------------------------------------------------------
    */   

    var trip_id_no    = $('input[name=trip_id_no]');
    var trip_route_id = $('input[name=trip_route_id]');
    var fleet_registration_id = $('input[name=fleet_registration_id]');
    var fleet_type_id = $('input[name=fleet_type_id]');
    var total_seat    = $('input[name=total_seat]');
    var seat_number   = $('input[name=seat_number]');
    var price         = $('input[name=price]');
    var offer_code    = $('input[name=offer_code]');
    var discount      = $('input[name=discount]');
    var booking_date  = $('input[name=booking_date]');
    var seatPreview       = $('#seatPreview');
    var pricePreview      = $('#pricePreview');
    var totalPreview      = $('#totalPreview');
    var discountPreview   = $('#discountPreview');
    var grandTotalPreview = $('#grandTotalPreview');
    var outputPreview     = $('#outputPreview');
    //reset trip information with modal hidden
    $("#myModal").on('hidden.bs.modal', function(event){
        trip_id_no.val('');
        trip_route_id.val('');
        fleet_registration_id.val('');
        fleet_type_id.val('');
        total_seat.val(''); 
        seat_number.val(''); 
        price.val(''); 
        offer_code.val(''); 
        discount.val('');  
        booking_date.val('');  
        seatPreview.html('---');
        pricePreview.html('0');
        totalPreview.html('0');
        discountPreview.html('0');
        grandTotalPreview.html('0');
        outputPreview.addClass('hide').removeClass('alert-success').removeClass('alert-danger').html('');
        history.go(0);
    });




    /*
    *------------------------------------------------------
    * New Booking
    * @function: findOfferByCode
    * @return: discount 
    *------------------------------------------------------
    */

    var frm = $("#bookingFrm");
    frm.on('submit', function(e) {
        e.preventDefault(); 
        $.ajax({
            url : $(this).attr('action'),
            method : $(this).attr('method'),
            dataType : 'json',
            data : frm.serialize(),
            success: function(data) 
            {
                if (data.status == true) {
                    // outputPreview.empty().html(data.message).addClass('alert-success').removeClass('alert-danger').removeClass('hide');
                    $('.modal-body').html(data.payment);
                } else {
                    outputPreview.empty().html(data.exception).addClass('alert-danger').removeClass('alert-success').removeClass('hide');
                }
            },
            error: function(xhr)
            {
                alert('test!');
            }
        });
    });





    //show trip information with modal shown 
    $('#myModal').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this); 

        $.ajax({
            url: '<?php echo base_url('website/search/findBookingInformation') ?>',
            method  : 'post',
            dataType: 'json',
            data    : {
                '<?= $this->security->get_csrf_token_name() ?>' : '<?= $this->security->get_csrf_hash() ?>',
                'trip_route_id' : button.data('trip-route-id'),
                'trip_id_no'    : button.data('trip-id-no'),
                'fleet_registration_id' : button.data('fleet-registration-id'),
                'fleet_type_id' : button.data('fleet-type-id'),
                'booking_date'  : button.data('booking-date')
            },
            success : function (data)
            {  
                console.log(data);
                modal.find('.modal-body input[name=trip_id_no]').val(data.trip_id_no); 
                modal.find('.modal-body input[name=trip_route_id]').val(data.trip_route_id); 
                modal.find('.modal-body input[name=fleet_registration_id]').val(data.fleet_registration_id); 
                modal.find('.modal-body input[name=fleet_type_id]').val(data.fleet_type_id); 
                modal.find('.modal-body input[name=booking_date]').val(data.booking_date); 
                modal.find('.modal-body .location').html(data.location);
                modal.find('.modal-body #facilities').html(data.facilities);
                modal.find('.modal-body .seatsList').html(data.seats);   
            },
            error   : function (xhr)
            {
                alert('failed!');
            }
        });

    }); 


    /*
    *------------------------------------------------------
    * Choose seat(s)
    * @function: findPriceBySeat
    * @return : selected seat(s), price and group price
    *------------------------------------------------------
    */

    $('body').on('click', '.ChooseSeat', function(){
        var seat = $(this); 

        if (seat.attr('data-item') != "selected") {
            seat.removeClass('occupied').addClass('selected').attr('data-item','selected');   
        }  else if (seat.attr('data-item') == "selected")  {
            seat.removeClass('selected').addClass('occupied').attr('data-item','');  
        } 

        //reset seat serial for each click
        var seatSerial = "";
        var countSeats = 0;

        $("div[data-item=selected]").each(function(i, x) {
            countSeats = i+1;
            seatSerial += $(this).text().trim()+", "; 
        }); 


        total_seat.val(countSeats);
        seat_number.val(seatSerial);
        seatPreview.html(seatSerial); 

        //#---------price selection --------------  

        $.ajax({
            url : '<?php echo base_url('website/search/findPriceBySeat') ?>',
            method: 'post',
            dataType: 'json',
            data: 
            {
                '<?php echo $this->security->get_csrf_token_name() ?>':'<?php echo $this->security->get_csrf_hash() ?>',
                'trip_route_id': trip_route_id.val(),
                'fleet_type_id': fleet_type_id.val(),
                'total_seat'   : countSeats
            },
            success: function(data)
            {
                if (data.status == true) {
                    price.val(data.total);
                    pricePreview.html(data.price);
                    totalPreview.html(data.total);
                    grandTotalPreview.html(data.total-discount.val());
                    outputPreview.addClass("hide").html('');
                } else {
                    price.val('0');
                    totalPreview.html('0');
                    grandTotalPreview.html('0');
                    outputPreview.removeClass("hide").addClass('alert-danger').html(data.exception);
                } 
            }, 
            error: function(xhr)
            {
                alert('failed!');
            }
        });
    });


    /*
    *------------------------------------------------------
    * Offer
    * @function: findOfferByCode
    * @return: discount 
    *------------------------------------------------------
    */ 
    $("#offerCode").on('keyup', function(){

        if ($(this).val().length > 2) {
            
            $.ajax({
                url : '<?php echo base_url('website/search/findOfferByCode') ?>',
                method: 'post',  
                dataType: 'json',          
                data: {
                    '<?php echo $this->security->get_csrf_token_name() ?>':'<?php echo $this->security->get_csrf_hash() ?>',
                    'offer_code': $(this).val(), 
                    'trip_route_id': trip_route_id.val(), 
                    'booking_date': booking_date.val() 
                },
                success: function(data) {
                    if (data.status == true) {
                        offerDiscount = data.discount;
                        outputPreview.removeClass('hide').removeClass('alert-danger').addClass('alert-success').html(data.message);
                    } else {
                        offerDiscount = 0; 
                        outputPreview.removeClass('hide').removeClass('alert-success').addClass('alert-danger').html(data.message);
                    } 
                    discount.val(offerDiscount);
                    offer_code.val($("#offerCode").val());
                    discountPreview.html(offerDiscount); 
                    grandTotalPreview.html(price.val() - offerDiscount);
                },
                error: function(e)
                {
                    alert('failed!');
                }
            });
        }
    });
});
</script>
