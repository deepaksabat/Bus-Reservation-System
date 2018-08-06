<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
                <div id="output" class="alert hide"></div>
 
                <div class="">
                    <table class="datatable2 table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('booking_id') ?></th>
                                <th><?php echo display('name') ?></th>
                                <th><?php echo display('comment') ?></th> 
                                <th><?php echo display('rating') ?></th> 
                                <th><?php echo display('add_to_website') ?></th> 
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($feedbacks)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($feedbacks as $feedback) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $feedback->tkt_booking_id_no ?></td>
                                <td><?php echo $feedback->name ?></td>
                                <td><?php echo $feedback->comment ?></td>
                                <td title="<?php echo (($feedback->rating>0)?$feedback->rating:1) ?> ratings">
                                    <?php 
                                        if (!empty($feedback->rating)) { 
                                            for($i=0;$i<$feedback->rating;$i++)
                                            echo "<i class='glyphicon glyphicon-star text-success'></i>";   
                                        } else {
                                            echo "<i class='glyphicon glyphicon-star text-success'></i>";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php if($this->permission->method('ticket','update')->access()): ?>
                                        <input type="checkbox" name="add_to_website" data-id="<?php echo $feedback->id ?>" value="<?php echo (($feedback->add_to_website == 1)?'0':'1') ?>" <?php echo (!empty($feedback->add_to_website)?'checked':null) ?>>
                                    <?php endif; ?>
                                </td>
                                <td> 

                                <?php if($this->permission->method('ticket','delete')->access()): ?>
                                    <a href="<?php echo base_url("ticket/feedback/delete/$feedback->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                </td>
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
$(document).ready(function(){
    var output   = $("#output");
    var addToWeb = $("input[name=add_to_website]");

    addToWeb.change(function(){
        $.ajax({
            url : '<?php echo base_url('ticket/feedback/update') ?>',
            method: 'post',
            dataType: 'json',
            data: 
            {
                data: $(this).val(),
                id:   $(this).attr('data-id'),
                '<?php echo $this->security->get_csrf_token_name() ?>':'<?php echo $this->security->get_csrf_hash() ?>'

            },
            success: function(data){
                if (data.status == true)
                {
                    output.removeClass('hide alert-danger').addClass('alert-success').html(data.success);
                } else {
                    output.removeClass('hide alert-success').addClass('alert-danger').html(data.success);
                }

                setInterval(function(){
                    location.reload();
                },1000);

            },
            error: function(xhr)
            {
                alert('failed!');
            }
        });
    });
});
</script>