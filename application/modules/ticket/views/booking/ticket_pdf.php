
<style type="text/css">

/*ticket*/
.row {
    margin-right: -15px;
    margin-left: -15px;
}

 {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

div {
    display: block;
}
.passanger-info {
    background-color: #f6f8fa;
    padding: 15px 5px;
    margin-bottom: 20px;
    margin-right: -20px;
    margin-left: -20px;
    border-top: 1px solid #e1e6ef;
    border-bottom: 1px solid #e1e6ef;
}

.well {
    margin-bottom: 0;
    background-color: #f1f5f8;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin-top: 15px;
}
.ticket-inner {
    float:left;
    width:100%;
    border: 1px solid #e3e3e3;
    height: auto;
    padding: 10px;
}
    
.seat {
    margin: 5px 0;
    color:#fff;
}

.price-details tr:last-child th:first-child{
    text-align: left;
} 
.table-striped > tbody > tr:nth-of-type(2n+1) {
    background-color: #fff;
}
.table-striped > tbody > tr:nth-of-type(2n+2) {
    background-color: #f9f9f9;
}
.price-details p {
    margin: 0 0 15px;
    font-size: 14px;
}

.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid #ddd;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
td, th {
    padding: 0;
}
.table{
    width: 100%;
}
.ticket-content .table > thead > tr > th {
    border-bottom: 1px solid #ddd;
    color: #000;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}
user agent stylesheet
ul, menu, dir {
    display: block;
    list-style-type: none;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
}
{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
/*user agent stylesheet*/
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}
.text-right {
    text-align: right;
}
table {
    border-spacing: 0;
    border-collapse: collapse;
}
user agent stylesheet
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
body {
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    color: #828282;
    overflow-x: hidden;
    overflow-y: auto;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}

.ticket-content {
    border: 1px solid #e1e6ef;
    padding: 20px;
}

.ticket-logo img {
    background: #e1e6ef !important;
    height: 40px !important;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}
.ticket-content strong {
    color: #000;
    font-weight: 600;
}
</style>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="#" class="btn btn-sm btn-danger" title="Print" onclick="printContent('PrintMe')"><i class="fa fa-print"></i></a>  
                    </h4>
                </div>
            </div>
  
            <div class="panel-body" id="PrintMe">

                <div class="ticket-content">
                    <div class="table-responsive">
                        <table style="width:100%;margin-bottom:10px">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="ticket-logo">
                                            <img src="<?php echo $appSetting->logo; ?>" class="img-responsive" alt="">
                                        </div>
                                    </td>
                                    <td style="vertical-align:middle;">
                                        <p class="text-right"><strong><?php echo display('phone') ?> : </strong><?php echo (!empty($appSetting->phone)?$appSetting->phone:null) ?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
     

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong><?php echo display('pickup_location') ?>:</strong> <span><?php echo (!empty($ticket->pickup_trip_location)?$ticket->pickup_trip_location:null) ?></span></td>
                                    <td><strong><?php echo display('drop_location') ?>:</strong> <span><?php echo (!empty($ticket->drop_trip_location)?$ticket->drop_trip_location:null) ?></span></td>
                                    <td><strong><?php echo display('date') ?>:</strong> <span><?php echo (!empty($ticket->booking_date)?$ticket->booking_date:null) ?></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="passanger-info table-responsive">
                        <div class="col-sm-12">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><strong><?php echo display('name') ?> :</strong>
                                            <?php echo (!empty($ticket->passenger_name)?$ticket->passenger_name:null) ?>
                                            </li>

                                            <li><strong><?php echo display('booking_id') ?> :</strong>
                                                <?php echo (!empty($ticket->booking_id_no)?$ticket->booking_id_no:null) ?></li>

                                            <li><strong><?php echo display('route_name') ?> :</strong>
                                            <?php echo (!empty($ticket->route_name)?$ticket->route_name:null) ?></li>
                                            
                                            <li><strong><?php echo display('request_facilities') ?> :</strong>
                                                <?php echo $ticket->request_facilities ?>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>  
                                        <ul class="list-unstyled text-right"      style="text-align:right">
                                            <li>
                                            <strong><?php echo display('passenger_id') ?> :</strong> 
                                            <?php echo (!empty($ticket->tkt_passenger_id_no)?$ticket->tkt_passenger_id_no:null) ?></li>
                                            <li>
                                            <strong><?php echo display('trip_id') ?> :</strong> 
                                            <?php echo (!empty($ticket->trip_id_no)?$ticket->trip_id_no:null) ?></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Seat name</th>
                                            <th>Quantity</th>
                                            <th class="text-right">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo (!empty($ticket->seat_serial)?(str_replace(',', ', ', $ticket->seat_serial)):null) ?></td>
                                            <td><?php echo (!empty($ticket->quantity)?$ticket->quantity:0) ?></td>
                                            <th class="text-right"><?php echo $price = (!empty($ticket->price)?$ticket->price:0) ?> <?php echo $appSetting->currency; ?></th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th>Discount</th>
                                            <th class="text-right"><?php echo $discount = (!empty($ticket->discount)?$ticket->discount:0) ?> <?php echo $appSetting->currency; ?></th>
                                        </tr> 
                                        <tr>
                                            <td></td>
                                            <th>Grand Total</th>
                                            <th class="text-right"><?php echo $price-$discount ?> <?php echo $appSetting->currency; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div>
                 <div class="ticket-content" style="margin-top:20px">
                    <h4><?php echo display('payment_status');?></h4>
                    <span>Amount : 
                        <strong>Paid</strong>
                    </span>
            </div>
            </div> 
        </div>
    </div>
</div>
