<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('reports/assign/report') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('assign') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <div class="col-sm-12" style="margin-bottom:20px">
                    <?php echo form_open('reports/booking/report', 'class="form-horizontal" method="get"')?>

                        <!-- Filter -->
                        <div class="form-group">
                            <?php 
                            $filterList = array(
                                'all'    => display('all'),
                                'trip'   => display('trip_id'),
                                'route'  => display('route_name'),
                                'driver' => display('driver_name'),
                            );
                            ?>
                            <label for="filter" class="col-sm-2 control-label"><?php echo display('filter') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('filter', $filterList,  $search->filter, "class='form-control' id='filter'") ?> 
                            </div>
                        </div>

                        <!-- Trip ID -->
                        <div class="form-group hide" id="trip">
                            <label for="trip_id" class="col-sm-2 control-label"><?php echo display('trip_id') ?></label>
                            <div class="col-sm-10">
                                <input name="trip" type="text" class="form-control" id="trip_id" placeholder="<?php echo display('trip_id') ?>" value="<?php echo $search->trip ?>">
                            </div>
                        </div>

                        <!-- Route Name -->
                        <div class="form-group hide" id="route">
                            <label for="route_id" class="col-sm-2 control-label"><?php echo display('route_name') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('route', $routeList,  $search->route, "class='form-control' id='route_id' style='width:100%'") ?>
                            </div>
                        </div>

                        <!-- Driver Name -->
                        <div class="form-group hide" id="driver">
                            <label for="driver_id" class="col-sm-2 control-label"><?php echo display('driver_name') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('driver', $driverList,  $search->driver, "class='form-control' id='driver_id' style='width:100%'") ?>
                            </div>
                        </div>

                        <!-- Date 2 Date -->
                        <div class="form-group">
                            <label for="driver_id" class="col-sm-2 control-label"><?php echo display('date') ?></label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input name="start_date" id="start_date" type="text" placeholder="<?php echo display('start_date') ?>" class="form-control datepicker" value="<?php echo $search->start_date ?>">
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <input name="end_date" id="end_date" type="text" placeholder="<?php echo display('end_date') ?>" class="form-control datepicker" value="<?php echo $search->end_date ?>">
                                    </div>

                                    <div class="col-sm-4">
                                        <button type="submit"  class="form-control btn btn-success"><?php echo display('search') ?></button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    <?php echo form_close() ?>
                </div> 

                <div class="col-sm-12">
                    <table class="bookingDataTable table table-bordered ">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('booking_date') ?></th>
                                <th><?php echo display('booking_id') ?></th>
                                <th><?php echo display('trip_id') ?></th>
                                <th><?php echo display('route_name') ?></th>
                                <th><?php echo display('driver_name') ?></th>
                                <th><?php echo display('total_seat') ?></th>
                                <th><?php echo display('price') ?></th>
                                <th><?php echo display('discount') ?></th>
                                <th><?php echo display('amount') ?></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan="6"></th> 
                                <th></th> 
                                <th></th> 
                                <th></th> 
                                <th></th> 
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php if (!empty($bookings)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($bookings as $booking) { ?>
                            <tr class="<?php echo (!empty($booking->tkt_refund_id) ? "bg-danger" : null ) ?>">
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $booking->booking_date; ?></td>
                                <td><a target="_blank" href="<?php echo base_url("ticket/booking/view/$booking->id_no") ?>"><?php echo $booking->id_no; ?></a></td>
                                <td><a target="_blank" href="<?php echo base_url("trip/assign/view/$booking->trip_id_no") ?>"><?php echo $booking->trip_id_no; ?></a></td>
                                <td><?php echo $booking->route_name; ?></td>
                                <td><a target="_blank" href="<?php echo base_url("/hr/hr_controller/emp_details/$booking->driver_id") ?>"><?php echo $booking->driver_name; ?></a></td>
                                <td><?php echo $booking->total_seat; ?></td>
                                <td><?php echo $booking->price; ?></td>
                                <td><?php echo $booking->discount; ?></td>
                                <td><?php echo ($booking->price-$booking->discount); ?></td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                    <?= $links ?>
                </div>
            </div> 
        </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {

    var q = '<?php echo $this->input->get("filter") ?>';
    var route  = $("#route");
    var trip   = $("#trip");
    var driver = $("#driver");

    if (q != null) {
        if (q == "route") {
            route.removeClass('hide');
        } else if (q == "trip") {
            trip.removeClass('hide');
        } else if (q == "driver") {
            driver.removeClass('hide');
        } 
    }  

    $('#filter').on('change', function(){
        var filter = $(this);
        route.addClass('hide');
        trip.addClass('hide');
        driver.addClass('hide');

        if (filter.length > 0) {
            if (filter.val() == "route") {
                route.removeClass('hide');
            } else if (filter.val() == "trip") {
                trip.removeClass('hide');
            } else if (filter.val() == "driver") {
                driver.removeClass('hide');
            } 
        }   
    });


    $('.bookingDataTable').DataTable( {
        searching: true, 
        responsive: false, 
        paging: false,
        pageLength: 10,
        dom: "<'row'<'col-sm-8'B><'col-sm-4'f>>tp", 
        buttons: [  
            {extend: 'copy', className: 'btn-sm', footer: true}, 
            {extend: 'csv', title: 'ExampleFile', className: 'btn-sm', footer: true}, 
            {extend: 'excel', title: 'ExampleFile', className: 'btn-sm', footer: true, title: 'exportTitle'}, 
            {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm', footer: true}, 
            {extend: 'print', className: 'btn-sm', footer: true} 
        ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            var intVal = function (i) {
                return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1:typeof i === 'number' ? i : 0;
            };  
            //#----------- Total over this page------------------#
            seats = api.column(6, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0);  
            price = api.column(7, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
            },0);  
            discount = api.column(8, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0);  
            grandTotal = api.column(9, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0); 
            //#-----------ends of Total over this page------------------#

            // Update footer
            $( api.column(6).footer()).html(seats);
            $( api.column(7).footer()).html(price.toFixed(2));
            $( api.column(8).footer()).html(discount.toFixed(2));
            $( api.column(9).footer()).html(grandTotal.toFixed(2));
        }
    });
});
</script>