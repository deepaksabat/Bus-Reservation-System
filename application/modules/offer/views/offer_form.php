<div class="form-group text-right">
    <?php if($this->permission->method('offer', 'create')->access()): ?>
    <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"><i class='fa fa-gift' aria-hidden='true'></i> <?php echo display('add_offer') ?>
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
                                <?php echo display('sl') ?>
                            </th>
                            <th>
                                <?php echo display('offer_name') ?>
                            </th>
                            <th>
                                <?php echo display('offer_start_date') ?>
                            </th>

                            <th>
                                <?php echo display('offer_end_date') ?>
                            </th>
                            <th>
                                <?php echo display('offer_code') ?>
                            </th>
                            <th>
                                <?php echo display('offer_discount') ?>
                            </th>

                            <th>
                                <?php echo display('offer_route_id') ?>
                            </th>
                            <th>
                                <?php echo display('offer_number') ?>
                            </th>
                            <th>
                                <?php echo display('view_details') ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($ofer)) { ?>
                        <?php $sl = 1; ?>
                        <?php foreach ($ofer as $query) { ?>
                        <?php 
                            $cd=$query->offer_start_date;
                            $ab=$query->offer_end_date;
                            $bc=date('Y-m-d');
                            $date1 = new DateTime("$bc");
                            $date2 = new DateTime("$cd");
                            $days = $date1->diff($date2);
                            // this will output 4 days                           
                            $d=$days->days;

                            if ($bc>$ab) {
                                $tr ="#ffc8c8";
                            }else {
                                $tr ="#ffffff";
                            }
                        ?>
                        <tr style="background-color:<?php echo $tr ;?>">
                            <td>
                                <?php echo $sl; ?>
                            </td>
                            <td>
                                <?php echo $query->offer_name; ?>
                            </td>
                            <td>
                                <?php echo $query->offer_start_date; ?>
                            </td>

                            <td>
                                <?php echo $query->offer_end_date; ?>
                            </td>
                            <td>
                                <?php echo $query->offer_code; ?>
                            </td>
                            <td><?php echo $currency; ?>
                                <?php echo $query->offer_discount; ?>
                            </td> 
                            <td>
                                <?php echo $query->name; ?>
                            </td>
                            <td>
                                <?php echo $query->offer_number; ?>
                            </td>

                            <td> 

                                <?php if($this->permission->method('offer', 'create')->access()): ?>
                                <a href="<?php echo base_url("offer/offer_controller/view_details/$query->offer_id") ?>" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                <?php endif; ?>

                                <?php if($this->permission->method('offer', 'update')->access()): ?>
                                <a href="<?php echo base_url("offer/offer_controller/offer_update/$query->offer_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a><?php endif; ?>

                                <?php if($this->permission->method('offer', 'delete')->access()): ?>
                                <a href="<?php echo base_url("offer/offer_controller/offer_delete/$query->offer_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i></a> 
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

<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Add New Offers</strong></center>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">

                            <div class="panel-body">

                                <?= form_open('offer/offer_controller/create_offer') ?>

                                    <div class="form-group row">
                                        <div for="offer_name" class="col-sm-3 col-form-div">
                                            <?php echo display('offer_name') ?> *</div>
                                        <div class="col-sm-9">
                                            <input name="offer_name" class="form-control" type="text" placeholder="<?php echo display('offer_name') ?>" id="offer_name">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div for="offer_start_date" class="col-sm-3 col-form-div">
                                            <?php echo display('offer_start_date') ?> *</div>
                                        <div class="col-sm-9">
                                            <input name="offer_start_date" class="datepicker form-control" type="text" placeholder="<?php echo display('offer_start_date') ?>" id="offer_start_date">
                                        </div> 
                                    </div>

                                    <div class="form-group row">
                                        <div for="offer_end_date" class="col-sm-3 col-form-div">
                                            <?php echo display('offer_end_date') ?> *</div>
                                        <div class="col-sm-9">
                                            <input type="text" name="offer_end_date" class="datepicker form-control" placeholder="<?php echo display('offer_end_date') ?>" id="offer_end_date">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div for="offer_code" class="col-sm-3 col-form-div">
                                            <?php echo display('offer_code') ?> *
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="offer_code" class="form-control" placeholder="<?php echo display('offer_code') ?>" id="offer_code" > 
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div for="offer_discount" class="col-sm-3 col-form-div">
                                            <?php echo display('offer_discount') ?> *</div>
                                        <div class="col-sm-9">
                                            <input type="text" name="offer_discount" class="form-control" placeholder="<?php echo display('offer_discount') ?>" id="offer_discount">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div for="offer_terms" class="col-sm-3 col-form-div">
                                            <?php echo display('offer_terms') ?>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea name="offer_terms" class="form-control" placeholder="<?php echo display('offer_terms') ?>" id="offer_terms"></textarea>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div for="offer_route_id" class="col-sm-3 col-form-div">
                                            <?php echo display('offer_route_id') ?> *</div>
                                        <div class="col-sm-9">

                                            <?php echo form_dropdown('offer_route_id',$rout,null,'class="form-control" style="width:100%"') ?>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div for="offer_number" class="col-sm-3 col-form-div">
                                            <?php echo display('offer_number') ?> *</div>
                                        <div class="col-sm-9">
                                            <input name="offer_number" class="form-control" type="text" placeholder="<?php echo display('offer_number') ?>" id="offer_number">

                                        </div>

                                    </div>

                                    <div class="form-group text-right">
                                        <button type="reset" class="btn btn-primary w-md m-b-5">
                                            <?php echo display('reset') ?>
                                        </button>
                                        <button type="submit" class="btn btn-success w-md m-b-5" id="check_username_availability">
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
    </div>

</div>

<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        }).val()
    });
</script>
 