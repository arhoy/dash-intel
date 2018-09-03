<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email_pbi"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        
        if ($_POST['email_pbi'] && filter_var($_POST["email_pbi"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your submission:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "admin@dash-intel.com";
            $subject = "newletter_pbi signup";
            $headers = "From: ".$_POST['email_pbi'];
            
            if (mail($emailTo, $subject, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Thank you for signing up</div>';
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p>Your email couldn\'t be verified - please try again later</p></div>';
                   
            }
        }
    }

?>  
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
       
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
    </script>
