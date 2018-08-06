<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('dashboard/message/new_message') ?>" class="btn btn-sm btn-info" title="New"> <i class="fa fa-plus"></i> <?php echo display('new_message') ?></a>  
                        <a href="<?php echo base_url('dashboard/message/index') ?>" class="btn btn-sm btn-success" title="Inbox"> <i class="fa fa-list"></i> <?php echo display('inbox') ?></a>  
                        <a href="<?php echo base_url('dashboard/message/sent') ?>" class="btn btn-sm btn-warning" title="Sent"> <i class="fa fa-list"></i> <?php echo display('sent') ?></a> 
                        <a href="#" class="btn btn-sm btn-danger" onclick="printContent('PrintMe')" title="Print"> <i class="fa fa-print"></i></a>  
                    </h4>
                </div>
            </div>
            <div class="panel-body" id="PrintMe"> 
                <dl class="dl-horizontal">
                    <dt><?php echo display('sender_name') ?></dt>
                    <dd>&nbsp;<?php echo $message->sender_name ?></dd>
                    <dt><?php echo display('receiver_name') ?></dt>
                    <dd>&nbsp;<?php echo $this->session->userdata('fullname') ?></dd>
                    <dt><?php echo display('date') ?></dt>
                    <dd>&nbsp;<?php echo date('d M Y h:i:s a', strtotime($message->datetime)) ?></dd>
                    <dt><?php echo display('subject') ?></dt>
                    <dd>&nbsp;<?php echo $message->subject ?></dd>
                    <dt><?php echo display('message') ?></dt> 
                    <dd>&nbsp;<?php echo $message->message ?></dd>
                </dl>
            </div> 
        </div>
    </div>
</div>

 

  


