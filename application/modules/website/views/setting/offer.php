<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-footer">
                <?php echo form_open_multipart('website/setting/offer','class="form-inner"') ?>

                    <div class="form-group row">
                        <label for="title" class="col-xs-3 col-form-label"><?php echo display('title') ?> <i class="text-danger">*</i></label>
                        <div class="col-xs-6">
                            <input name="title" type="text" class="form-control" placeholder="<?php echo display('title') ?>" value="<?php echo $offer->title ?>">
                        </div>
                        <div class="col-xs-3">
                            <input name="position" type="number" class="form-control"  placeholder="<?php echo display('position') ?>" value="<?php echo $offer->position ?>">
                        </div>
                    </div>
 
                       

                    <div class="form-group row">
                        <label for="image" class="col-xs-3 col-form-label"><?php echo display('image') ?>  <i class="text-danger">*</i></label>
                        <div class="col-xs-6">

                            <?php if(!empty($offer->image)) {  ?>
                                <img src="<?php echo base_url($offer->image) ?>" alt="Picture" width="120" class="img-thumbnail" />
                            <?php } ?>

                            <input type="file" name="image" id="image">
                            <input type="hidden" name="old_image" value="<?php echo $offer->image ?>">
                        </div>
                        <div class="col-xs-3">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                        </div>

                    </div>
  

                <?php echo form_close() ?>
            </div>




            <div class="panel-body">
                <table class="datatable table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('sl_no') ?></th>
                            <th><?php echo display('image') ?></th>
                            <th><?php echo display('title') ?></th>
                            <th><?php echo display('position') ?></th> 
                            <th><?php echo display('action') ?></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($offers)) ?>
                        <?php $sl = 1; ?>
                        <?php foreach ($offers as $offer) { ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><img src="<?php echo base_url($offer->image) ?>" width="80"></td>
                            <td><?php echo $offer->title ?></td>
                            <td><?php echo $offer->position ?></td>
                            <td> 
                            <?php if($this->permission->method('website','delete')->access()): ?>
                                <a href="<?php echo base_url("website/setting/delete_offer/$offer->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            </td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


