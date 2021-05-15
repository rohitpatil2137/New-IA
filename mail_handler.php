<?php
    if(isset($_POST['submit']))
    {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $msg=$_POST['msg'];
          $subcatg=$_POST['subcatg'];
          $project=$_POST['project'];
          $org=$_POST['org'];

          $to_email = "rohitpatil2137@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From:  rohitpatil8600300910@gmail.com";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

          if (!preg_match ("/^[0-9]*$/", $phone) ){  
            $ErrMsg = "Only numeric value is allowed.";  
            echo $ErrMsg;  
        } 

        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        if (!preg_match ($pattern, $email) ){  
         $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
        } 




    }
?>