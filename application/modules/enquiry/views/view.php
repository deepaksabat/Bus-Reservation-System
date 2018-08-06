<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('enquiry/home/index') ?>" class="btn btn-sm btn-success" title="List"><i class="fa fa-list"></i> <?php echo display('list') ?></a>  
                        <a href="<?php echo base_url('enquiry/home/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a>  
                    </h4>
                </div>
            </div>

            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><?php echo display('username') ?></dt><dd><?= $enquiry->name ?></dd>
                    <dt><?php echo display('email') ?></dt><dd><?= $enquiry->email ?></dd>
                    <dt><?php echo display('phone') ?></dt><dd><?= $enquiry->phone ?></dd>
                    <dt><?php echo display('read_unread') ?></dt><dd><?php echo (!empty($enquiry->checked)?"<span class='label label-success'>Yes</label>":"<span class='label label-danger'>No</label>"); ?></dd>
                    <dt><?php echo display('ip_address') ?></dt><dd><?= $enquiry->ip_address ?></dd>
                    <dt><?php echo display('user_agent') ?></dt><dd><?= $enquiry->user_agent ?></dd>
                    <dt><?php echo display('checked_by') ?></dt><dd><?= $enquiry->username ?></dd>
                    <dt><?php echo display('date') ?></dt><dd><?= $enquiry->created_date ?></dd>

                    <dt><?php echo display('enquiry') ?></dt><dd><?= $enquiry->enquiry ?></dd>
                </dl> 
            </div> 
        </div>
    </div> 

</div>
 
 







