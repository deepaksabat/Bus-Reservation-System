<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                       
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable2 table table-bordered ">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('date') ?></th>
                                <th><?php echo display('booking_id') ?></th>
                                <th><?php echo display('amount') ?></th>
                                <th><?php echo display('bank_name') ?></th>
                                <th><?php echo display('account_no') ?></th>
                                <th><?php echo display('transaction_no') ?></th>
                                 <th><?php echo display('status') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                                    <?php if (!empty($confirm)) ?>
                                    <?php $sl = 1; ?>
                                    <?php foreach ($confirm as $booking) {?>
                                    
                          

                            <tr class="<?php echo (!empty($booking->tkt_refund_id) ? "bg-danger" : null ) ?>">
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $booking->transaction_date; ?></td>
                                <td><?php echo $booking->booking_id; ?></td>
                                <td><?php echo $booking->amount; ?></td>
                                <td><?php 
                                $stus=$this->db->select('*')->from('bank_info')->where('id',$booking->bank_id)->get()->row();
                                echo  $stus->bank_name;
                                ?></td>
                                <td><?php echo $booking->b_account_no; ?></td>
                                <td><?php echo $booking->transaction_id; ?></td>
                                <td><?php if($booking->payment_status == 1){
                                    echo "Pending";
                                }else{
                                    echo "Paid";
                                } ?></td>
                                <td>
                                    <?php 
                                if($booking->payment_status == 1){
                                    echo '<a type="button" class="test btn btn-primary btn-xs" onclick="modal_load('."'".$booking->id_no."'".')" data-toggle="modal">Confirm</a>';
                                    }else{
                                    echo " ";
                                } ?>
                                <?php if($this->permission->method('ticket','read')->access()): ?>
                                    <a href="<?php echo base_url("ticket/booking/view/$booking->id_no") ?>" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <?php endif; ?>

                              
                                    <a href="<?php echo base_url('ticket/booking/delete_confirmation/'.$booking->ids) ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                               
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                 
                </div>
            </div> 
        </div>
    </div>
</div>

 <div id="add1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Payment info</strong></center>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">

                            <div class="panel-body">

                                <?= form_open('ticket/Booking/booking_paid') ?>
                                    <div class="form-group row">
                                        <label for="fitness_id" class="col-sm-3 col-form-label">
                                          </label>
                                        <div class="col-sm-9">
                                           <h1>Are you Sure to Confirm Now ??</h1>
                                           <input type="hidden" name="booking_id" value="" id="bookid">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-danger w-md m-b-5" data-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-success w-md m-b-5">
                                            Yes
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


</div>
<script type="text/javascript">
function modal_load(id_no){
    $('#bookid').val(id_no);
    $('#add1').modal('show');
}

</script>