<html>
    <head></head>
    <body>
         <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="ticket-logo">
                                            <img src="<?php echo base_url(!empty($appSetting->logo)?$appSetting->logo:null) ?>" class="img-responsive" alt="">
                                        </div>
                                    </td>
                                    <td style="vertical-align:middle;">
                                        <p class="text-right"><strong>Phone : </strong><?php echo (!empty($appSetting->phone)?$appSetting->phone:null) ?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
    </body>
</html>