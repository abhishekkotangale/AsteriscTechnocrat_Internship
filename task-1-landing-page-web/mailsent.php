<?php
    if(isset($_POST['submit'])){
        $to = $_POST['email'];
        echo $to;
        $name = $_POST['name'];
        echo $name;

        $subject = "Webinar Registration Successfull";

        $message = "
        
        Dear $name
            your Registration for Webinar has been successful.

            We Will Share you the update of webinar.

            So,Please Regularly check your mail.

            Regards,
            team Webinar
        ";

        $retval = mail ($to,$subject,$message);
         
         if( $retval == true ) {
            header('location:confirm.html');
         }else {
            echo "Message could not be sent...";
         }
    }
?>