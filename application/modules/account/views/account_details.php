<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url("/account/account_controller/create_transaction");?>" class="btn btn-sm btn-primary"><i class="fa fa-list"></i><?php echo display('list') ?></a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="printContent('PrintMe')" title="Print"> <i class="fa fa-print"></i></a>
                    </h4>
                </div>
            </div>
            <div class="panel-body" id="PrintMe">
        <div class="card-content">
            <div class="card-content-languages">

                <table class="table table-hover" width="100%">
                    <tr>
                        <th><?php echo display('account_name') ?></th>
                        <td><?php echo $detail->account_name; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('account_type') ?></th>
                        <td><?php echo (($detail->account_type==0)?"Expense":"Income"); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('amount') ?></th>
                        <td><?php echo $currency; ?><?php echo $detail->amount; ?></td>
                    </tr> 
                    <tr>
                        <th><?php echo display('passenger_id') ?></th>
                        <td><?php echo $detail->pass_book_id; ?></td>
                    </tr>  
                    <tr>
                        <th><?php echo display('trip_id') ?></th>
                        <td><?php echo $detail->trip_id; ?></td>
                    </tr> 
                    <tr>
                        <th><?php echo display('payment_id') ?></th>
                        <td><?php echo $detail->payment_id; ?></td>
                    </tr>  
                    <tr>
                        <th><?php echo display('description') ?></th>
                        <td><?php echo $detail->transaction_description; ?></td>
                    </tr>    
                    <tr>
                        <th><?php echo display('create_by_id') ?></th>
                        <td><?php echo $detail->created_by; ?></td>
                    </tr>     

                </table>

            </div>
        </div>
            </div> 
        </div>
    </div>
</div>

 


 