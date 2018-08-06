<div class="form-group text-right">
    <?php if($this->permission->method('fitness','create')->access()): ?>
        <button type="button" class="btn btn-primary btn-md" data-target="#add1" data-toggle="modal">
            <?php echo display('add_fitness_period') ?>
        </button>
    <?php endif; ?>
</div>

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail">

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>
                                <?php echo display('serial') ?>
                            </th>
                            <th>
                                <?php echo display('fitness_id') ?>
                            </th>
                            <th>
                                <?php echo display('vehicle_id') ?>
                            </th>
                            <th>
                                <?php echo display('start_date') ?>
                            </th>
                            <th>
                                <?php echo display('end_date') ?>
                            </th>
                            <th>
                                <?php echo display('start_milage') ?>
                            </th>
                            <th>
                                <?php echo display('end_milage') ?>
                            </th>
                            <th>
                                <?php echo display('action') ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($period)) { ?>
                            <?php $sl = 1; ?>
                                <?php foreach ($period as $query) { ?>
                                    <?php  
                                $ab=$query->end_date;
                                $bc=date('Y-m-d');

                                $date1 = new DateTime("$bc");
                                $date2 = new DateTime("$ab");
                                $days = $date1->diff($date2);
                                // this will output 4 days                           
                                $d=$days->days; 

                                if ($bc>$ab) {
                                $tr ="#ffc8c8";

                                } 
                                elseif($d<30) 
                                {
                                $tr ="#ffffb5";
                                } else {
                                $tr ="#ffffff";
                                }
                            ?>
                        <tr style="background-color:<?php echo $tr ;?>">
                            <td>
                                <?php echo $sl; ?>
                            </td>
                            <td>
                                <?php echo $query->fitness_name; ?>
                            </td>
                            <td>
                                <?php echo $query->reg_no; ?>
                            </td>
                            <td>
                                <?php echo $query->start_date; ?>
                            </td>
                            <td>
                                <?php echo $query->end_date; ?>
                            </td>
                            <td>
                                <?php echo $query->start_milage; ?>
                            </td>
                            <td>
                                <?php echo $query->end_milage; ?>
                            </td>
                            <td class="center">
                                <?php if($this->permission->method('fitness','update')->access()): ?>
                                <a href="<?php echo base_url("fitness/Fitness_controller/update_fitness_period/$query->id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <?php endif; ?>

                                <?php if($this->permission->method('fitness','delete')->access()): ?>
                                <a href="<?php echo base_url("fitness/Fitness_controller/delete_fitperiod/$query->id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php $sl++; ?>
                        <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>

<div id="add1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Add Fitness Period</strong></center>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">

                            <div class="panel-body">

                                <?= form_open('fitness/Fitness_controller/create_fit_period') ?>
                                    <div class="form-group row">
                                        <label for="fitness_id" class="col-sm-3 col-form-label">
                                            <?php echo display('fitness_id') ?> *</label>
                                        <div class="col-sm-9">
                                            <?php echo form_dropdown('fitness_id',$dropdown,null,'class="form-control" style="width:100%"') ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="vehicle_id" class="col-sm-3 col-form-label">
                                            <?php echo display('vehicle_id') ?> *</label>
                                        <div class="col-sm-7">

                                            <?php echo form_dropdown('vehicle_id',$vehicle,null,'class="form-control" style="width:100%"') ?>

                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal">
                                                Add New!! <i class="fa fa-car" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="start_date" class="col-sm-3 col-form-label">
                                            <?php echo display('start_date') ?> *</label>
                                        <div class="col-sm-9">
                                            <input name="start_date" class="datepicker form-control" type="text" placeholder="<?php echo display('start_date') ?>" id="start_date">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="end_date" class="col-sm-3 col-form-label">
                                            <?php echo display('end_date') ?> *</label>
                                        <div class="col-sm-9">
                                            <input name="end_date" class="datepicker form-control" type="text" placeholder="<?php echo display('end_date') ?>" id="end_date">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="start_milage" class="col-sm-3 col-form-label">
                                            <?php echo display('start_milage') ?>
                                        </label>
                                        <div class="col-sm-9">
                                            <input name="start_milage" class="form-control" type="number" placeholder="<?php echo display('start_milage') ?>" id="start_milage">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="end_milage" class="col-sm-3 col-form-label">
                                            <?php echo display('end_milage') ?>
                                        </label>
                                        <div class="col-sm-9">
                                            <input name="end_milage" class="form-control" type="number" placeholder="<?php echo display('end_milage') ?>" id="end_milage">
                                        </div>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="reset" class="btn btn-primary w-md m-b-5">
                                            <?php echo display('reset') ?>
                                        </button>
                                        <button type="submit" class="btn btn-success w-md m-b-5">
                                            <?php echo display('add') ?>
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
    <div id="add0" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#0981eb; color: white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center><strong>Enter Your Vehicles Info</strong></center>
                </div>
                <div class="modal-body">

                    <?= form_open('fitness/Fitness_controller/create_n_vehicles') ?>
                        <div class="form-group row">
                            <label for="reg_no" class="col-sm-3 col-form-label">
                                <?php echo display('reg_no') ?> *</label>
                            <div class="col-sm-9">
                                <input name="reg_no" class="form-control" type="text" placeholder="<?php echo display('reg_no') ?>" id="reg_no">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="model_no" class="col-sm-3 col-form-label">
                                <?php echo display('model_no') ?> *</label>
                            <div class="col-sm-9">
                                <input name="model_no" class="form-control" type="text" placeholder="<?php echo display('model_no') ?>" id="model_no">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="engine_no" class="col-sm-3 col-form-label">
                                <?php echo display('engine_no') ?>
                            </label>
                            <div class="col-sm-9">
                                <input name="engine_no" class="form-control" type="text" placeholder="<?php echo display('engine_no') ?>" id="engine_no">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="owner" class="col-sm-3 col-form-label">
                                <?php echo display('owner_name') ?>
                            </label>
                            <div class="col-sm-9">
                                <input name="owner" class="form-control" type="text" placeholder="<?php echo display('owner_name') ?>" id="owner">
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5">
                                <?php echo display('reset') ?>
                            </button>
                            <button type="submit" class="btn btn-success w-md m-b-5">
                                <?php echo display('add') ?>
                            </button>
                        </div>
                        <?php echo form_close() ?>

                </div>

            </div>
        </div>

    </div>

</div>

<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        }).val()
    });
</script>