<div class="form-group text-right">
    <?php if($this->permission->method('price', 'create')->access()): ?>
    <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal">
        <?php echo display('add_price') ?>
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
                                <?php echo display('route_id') ?>
                            </th>
                            <th>
                                <?php echo display('vehicle_type_id') ?>
                            </th>
                            <th>
                                <?php echo display('price') ?>
                            </th>
                            <th>
                                <?php echo display('group_price_per_person') ?>
                            </th>
                            <th>
                                <?php echo display('group_size') ?>
                            </th>
                            <th>
                                <?php echo display('action') ?>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($pri)) { ?>
                            <?php $sl = 1; ?>
                                <?php foreach ($pri as $query) { ?>
                                    <tr class="<?php echo ($sl & 1)?" odd gradeX ":"even gradeC " ?>">
                                        <td>
                                            <?php echo $sl; ?>
                                        </td>
                                        <td>
                                            <?php echo $query->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $query->type; ?>
                                        </td>
                                        <td><?php echo $currency; ?>
                                            <?php echo $query->price; ?>
                                        </td>
                                        <td><?php echo $currency; ?>
                                            <?php echo $query->group_price_per_person; ?>
                                        </td>
                                        <td>
                                            <?php echo $query->group_size; ?>
                                        </td>
                                       
                                        <td class="center">
                                            <?php if($this->permission->method('price', 'update')->access()): ?>
                                            <a href="<?php echo base_url("price/price_controller/price_update/$query->price_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                            <?php endif; ?>


                                            <?php if($this->permission->method('price', 'delete')->access()): ?>
                                            <a href="<?php echo base_url("price/price_controller/price_delete/$query->price_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i>
                                            </a> 
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
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong><?php echo display('add_price') ?></strong></center>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <?= form_open('price/price_controller/create_price',array('name'=>'myForm')) ?>
                                    <div class="form-group row">
                                        <div for="route_id" class="col-sm-4 col-form">
                                            <?php echo display('route_id') ?> *</div>
                                        <div class="col-sm-8">
                                            <?php echo form_dropdown('route_id',$rout,null,'class="form-control" style="width:100%"') ?>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div for="vehicle_type_id" class="col-sm-4 col-form">
                                            <?php echo display('vehicle_type_id') ?> *</div>
                                        <div class="col-sm-8">
                                            <?php echo form_dropdown('vehicle_type_id',$vehc,null,'class="form-control" style="width:100%"') ?>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div for="price" class="col-sm-4 col-form">
                                            <?php echo display('price') ?> *</div>
                                        <div class="col-sm-8">
                                            <input name="price" class="form-control" type="text" placeholder="<?php echo display('price') ?>" id="price">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div for="group_price_per_person" class="col-sm-4 col-form">
                                            <?php echo display('group_price_per_person') ?>
                                        </div>
                                        <div class="col-sm-8">
                                            <input name="group_price_per_person" class="form-control" type="text" placeholder="<?php echo display('group_price_per_person') ?>" id="group_price_per_person">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div for="group_size" class="col-sm-4 col-form-label">
                                            <?php echo display('group_size') ?>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="group_size" class="form-control" placeholder="<?php echo display('group_size') ?>" id="group_size">
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
    </div>
</div>