<div class="form-group text-right">
    <?php if($this->permission->method('fitness', 'create')->access()): ?>
    <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"><?php echo display('add_fitness') ?></button>
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
                            <th><?php echo display('serial') ?></th>
                            <th><?php echo display('fitness_name') ?></th>
                            <th><?php echo display('fitness_description') ?></th>
                            <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($result)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($result as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row->fitness_name; ?></td>
                                    <td><?php echo $row->fitness_description; ?></td>
                                    <td class="center">
                                        <?php if($this->permission->method('fitness', 'update')->access()): ?>
                                        <a href="<?php echo base_url("fitness/Fitness_controller/update_fitness/$row->fitness_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>   
                                        
                                        <?php if($this->permission->method('fitness', 'delete')->access()): ?>
                                        <a href="<?php echo base_url("fitness/Fitness_controller/fit_delete/$row->fitness_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times"></i></a> 
                                        <?php endif; ?>   
                                    </td>

                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>
 
 

<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Add New Fitness</strong></center>
            </div>
            <div class="modal-body">
               <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">
                            
                            <div class="panel-body">

                                <?= form_open('fitness/Fitness_controller/create_fitness') ?>
                                    <div class="form-group row">
                                        <div for="fitness_name" class="col-sm-3 col-form-div"><?php echo display('fitness_name') ?> *</div>
                                        <div class="col-sm-9">
                                            <input name="fitness_name" class="form-control" type="text" placeholder="<?php echo display('fitness_name') ?>" id="fitness_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div for="fitness_description" class="col-sm-3 col-form-div"><?php echo display('fitness_description') ?></div>
                                        <div class="col-sm-9">
                                            <textarea name="fitness_description" class="form-control" placeholder="<?php echo display('fitness_description') ?>" id="fitness_description"></textarea>
                                        </div>
                                    </div> 

                         
                                    <div class="form-group text-right">
                                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('add') ?></button>
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
$(document).ready(function(){
        $('button[type=reset]').click(function(){
            parent.history.back();
            return false;
        });
    });
</script>