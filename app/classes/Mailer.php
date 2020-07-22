<?php

use PHPMailer\PHPMailer\PHPMailer;
/**
* 
*/
class Mailer extends PHPMailer
{
    
    function __construct()
    {
                //PHPMailer Object
                // $mail = new PHPMailer;
                // //itsnewsalesmailbox

                $this->IsSMTP();
                $this->Host = "tauruscapital.biz";  // specify main and backup server
                $this->SMTPAuth = true;     // turn on SMTP authentication
                $this->Username = "noreply@tauruscapital.biz";  // SMTP username
                $this->Password = "itstauruscapital.biz"; // SMTP password


                $this->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead

                //From email address and name
                $this->From = "noreply@tauruscapital.biz";

                $from_name = Config::project_name();

                if(isset($from_name) && !empty($from_name)) {
                    $this->FromName = $from_name;

                    //Address to which recipient will reply
                    $this->addReplyTo("mailbox@tauruscapital.biz", $from_name);
                } else {
                    $this->FromName = $from_name;

                    //Address to which recipient will reply
                    $this->addReplyTo("mailbox@tauruscapital.biz", "$from_name");
                }

                //Send HTML or Plain Text email
                $this->isHTML(true);

                //To address and name
                $this->clearAddresses();
                // $this->addAddress("$sendto_email", "$sendto_name");

                //Set BCC address
            

    }


/*For live production
public  function sendMail($to, $subject, $body){

     
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if (
        this($to, $subject, $body, $headers)
) {

        return true;
    }else{

        return false;
    }

}


*/

public function include_attachments(array $attachments)
{
    foreach ($attachments as $key => $value) {

        $this->addAttachment($value['attachment']);
    }

    return $this;
}

public function include_message($subject, $body)
{
    $this->Subject = $subject;
    $this->Body    = $body;
    return $this;

}

public function sendMail($to, $subject, $body, $recipient_name=''){
/*    Session::putFlash("danger","Mailer not enabled");
    return;
*/    //To address and name
    $this->clearAddresses();
    $this->addAddress("$to", $recipient_name);

        $this->Subject = $subject;
        $this->Body    = $body;

    // $this->AltBody = 'This is the body in plain text for non-HTML this clients';


    if ( $this->send()) {

        return true;
    }else{

        return false;
    }

}





}







