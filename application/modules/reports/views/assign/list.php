<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('reports/booking/report') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('booking') ?></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="col-sm-12" style="margin-bottom:20px">
                    <?php echo form_open('reports/assign/report', 'class="form-horizontal" method="get"')?>

                        <!-- Filter -->
                        <div class="form-group">
                            <?php 
                                $filterList = array(
                                    'all'    => display('all'),
                                    'trip'   => display('trip_id'),
                                    'fleet' => display('reg_no'),
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

                        <!-- Fleet Name -->
                        <div class="form-group hide" id="fleet">
                            <label for="fleet" class="col-sm-2 control-label"><?php echo display('reg_no') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('fleet', $fleetList,  $search->fleet, "class='form-control' id='fleet' style='width:100%'") ?>
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



                <div class="col-sm-12 table-responsive">
                    <table class="tripAsignDataTable table table-bordered ">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('trip_id') ?></th>
                                <th><?php echo display('reg_no') ?></th>
                                <th><?php echo display('route_name') ?></th>
                                <th><?php echo display('start_date') ?></th>
                                <th><?php echo display('end_date') ?></th>
                                <th><?php echo display('driver_name') ?></th>
                                <th><?php echo display('sold_ticket') ?></th>
                                <th><?php echo display('total_income') ?></th>
                                <th><?php echo display('total_expense') ?></th>
                                <th><?php echo display('total_fuel') ?></th>
                            </tr> 
                        </thead>
                        <tfoot>
                            <tr> 
                                <th colspan="7"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr> 
                        </tfoot>
                        <tbody>
                            <?php if (!empty($assigns)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($assigns as $assign) { ?>
                            <tr class="<?php echo (!empty($assign->isClosed)?$assign->isClosed:null) ?>">
                                <td><?php echo $sl++; ?></td>
                                <td>
                                    <?php if(!$assign->isClosed): ?>
                                    <a target="_blank" href="<?php echo base_url("trip/assign/view/$assign->id_no") ?>"><?php echo $assign->id_no; ?></a>
                                    <?php else: ?>
                                        <a target="_blank" href="<?php echo base_url("trip/close/view/$assign->id_no") ?>"><?php echo $assign->id_no; ?></a>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $assign->fleet_registration_name; ?></td>
                                <td><?php echo $assign->trip_route_name; ?></td>
                                <td><?php echo $assign->start_date; ?></td>
                                <td><?php echo $assign->end_date; ?></td>
                                <td><a target="_blank" href="<?php echo base_url("/hr/hr_controller/emp_details/$assign->driver_id") ?>"><?php echo $assign->driver_name; ?></a></td>
                                <td><?php echo $assign->sold_ticket; ?></td>
                                <td><?php echo $assign->total_income; ?></td>
                                <td><?php echo $assign->total_fuel; ?></td>
                                <td><?php echo $assign->total_expense; ?></td>
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
    var fleet  = $("#fleet");
    var trip   = $("#trip");
    var driver = $("#driver");

    if (q != null) {
        if (q == "route") {
            route.removeClass('hide');
        } else if (q == "trip") {
            trip.removeClass('hide');
        }  else if (q == "fleet") {
            fleet.removeClass('hide');
        } else if (q == "driver") {
            driver.removeClass('hide');
        } 
    }  

    $('#filter').on('change', function(){
        var filter = $(this);
        route.addClass('hide');
        fleet.addClass('hide');
        trip.addClass('hide');
        driver.addClass('hide');

        if (filter.length > 0) {
            if (filter.val() == "route") {
                route.removeClass('hide');
            } else if (filter.val() == "trip") {
                trip.removeClass('hide');
            }  else if (filter.val() == "fleet") {
                fleet.removeClass('hide');
            } else if (filter.val() == "driver") {
                driver.removeClass('hide');
            } 
        }   
    });


    $('.tripAsignDataTable').DataTable( {
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
            sold_ticket = api.column(7, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0);   
            total_income = api.column(8, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0);  
            total_expense = api.column(9, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0); 
            total_fuel = api.column(10, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0); 
            //#-----------ends of Total over this page------------------#

            // Update footer
            $( api.column(7).footer()).html(sold_ticket.toFixed(2));
            $( api.column(8).footer()).html(total_income.toFixed(2));
            $( api.column(9).footer()).html(total_expense.toFixed(2));
            $( api.column(10).footer()).html(total_fuel.toFixed(2));
        }
    });
}); 
</script>