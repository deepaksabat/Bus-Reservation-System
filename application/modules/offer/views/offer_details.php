<?php foreach ($detls as $row){} ?>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <?php if($this->permission->method('offer', 'read')->access()): ?>
                        <a href="<?php echo base_url('/offer/offer_controller/create_offer') ?>" class="btn btn-sm btn-success" title="Add"><i class="fa fa-list"></i> <?php echo display('offer_list') ?></a> 
                        <?php endif; ?>
 
                        <a href="#" class="btn btn-sm btn-danger" onclick="printContent('PrintMe')" title="Print"> <i class="fa fa-print"></i></a>
                    </h4>
                </div>
            </div>
            <div class="panel-body" id="PrintMe"> 
                <div class="card-content">
                    <div id="myDIV" class="card-content-member">
                        <p class="m-t-0">
                            <h1><i class='fa fa-gift' aria-hidden='true'></i></h1>
                            <?php echo strtoupper($row->offer_name)." ";?>OFFER</p>
                    </div>
                    <div class="card-content-languages">
                        <table class="table table-hover" width="100%">
                            <tr>
                                <th><?php echo display('offer_route_id') ?></th>
                                <td>
                                    <?php echo $row->name ;?>
                                </td>
                            </tr>
                            <tr> 
                                <th><?php echo display('offer_code') ?></th>
                                <td>
                                    <?php echo $row->offer_code ;?>
                                </td>
                            </tr>
                            <tr>  
                                <th><?php echo display('offer_number') ?></th>
                                <td>
                                    <?php echo $row->offer_number ;?>
                                </td>
                            </tr>
                            <tr> 
                                <th><?php echo display('offer_discount') ?></th>
                                <td><?php echo $currency; ?>
                                    <?php echo $row->offer_discount ;?>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo display('offer_start_date') ?></th>
                                <td>
                                    <?php echo $row->offer_start_date;?>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo display('offer_end_date') ?></th>
                                <td>
                                    <?php echo $row->offer_end_date ;?>
                                </td>

                            </tr> 
                            <tr>
                                <th><?php echo display('offer_terms') ?></th>
                                <td>
                                    <?php echo $row->offer_terms  ;?>
                                </td>
                            </tr>
                        </table> 
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div> 



 