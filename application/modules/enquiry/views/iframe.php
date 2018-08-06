<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Enquery</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  </head>
  <body>
 
        <div id="output" class="hide col-sm-12 alert"></div>
        <div class="col-sm-12" style="padding:20px 10px">
            <?php echo form_open('enquiry/home/create', array('id' => 'enquiryFrm')) ?>
                <div class="form-group">
                    <input name="name" class="form-control" type="text" placeholder="<?php echo display('username') ?>">
                </div>

                <div class="form-group">
                    <input name="email" class="form-control" type="text" placeholder="<?php echo display('email') ?>">
                </div> 

                <div class="form-group">
                <input type='text' name="phone" class='form-control'  placeholder="<?php echo display('phone') ?>" >
                </div>

                <div class="form-group">
                    <textarea name="enquiry" placeholder="<?php echo display('enquiry') ?>" class="form-control"></textarea>
                </div> 

     
                <div class="form-group form-block "> 
                    <button type="submit" class="btn btn-block btn-info"><?php echo display('submit') ?></button>
                </div> 
            <?php echo form_close() ?>
        </div>
        <script type="text/javascript">
        $(document).ready(function() {

            var output    = $("#output"); 

            //ENQUIRY FORM
            var enquiryFrm = $("#enquiryFrm");
            enquiryFrm.submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url    : $(this).attr('action'),
                    method : $(this).attr('method'),
                    dataType : 'json',
                    data   : $(this).serialize(),
                    success: function(data)
                    {
                        if (data.status == true)
                        {
                            output.removeClass('hide alert-danger').addClass('alert-success').html(data.success); 
                        } else {
                            output.removeClass('hide alert-success').addClass('alert-danger').html(data.exception); 
                        }
                    },
                    error: function(xhr)
                    {
                        alert('failed!');
                    }
                });
            });
        });
        </script>
  </body>
</html>


