<?php


/**



*/
class home extends controller
{



	public function __construct(){

	}
	

	public function sendMessage()
	{

echo "<pre>";


if (Input::exists() ) {
    
    
    
print_r($_SESSION);
print_r($_POST);


	$this->validator()->check(Input::all() , array(

			'name' =>[

				'required'=> true,
				'min'=> 2,
				'max'=> 32,
					],
	'email' =>[

				'required'=> true,
				'email'=> true,
				'max'=> 20,
					],

	'subject' =>[

				'required'=> true,
				'min'=> 5,
					],


	'message' =>[

				'required'=> true,
				'min'=> 5,
					],




		));

 if($this->validator->passed()){



echo "string";

$name = $_POST['name'];
$email = $_POST['email'];

$to = "hello@gitstardigital.com";
$subject = $_POST['subject'];
$from = "$name, $email ";
$message = $from.''.$_POST['message'];


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";
//  $headers .= 'Cc: myboss@example.com' . "\r\n";

if(
mail($to,$subject,$message,$headers)
){
 	Session::putFlash('Info', '<div id="sendmessage" style="display: block;">Your message has been sent. Thank you!</div>');
}else{
    
    	Session::putFlash('Info', '<div id="errormessage" style="display: block;">Could not send message. Please try again </div> ');

}



 }else{

print_r($this->validator->errors());
 	Session::putFlash('Info', '<div id="errormessage" style="display: block;">Could not send message. Please try again </div> ');


 }

		
		


	}


	$this->redirect()->to($this->domain.'#contact')->go();
	
	}




	public function index()
	{

		$this->view('gitstar/index');  	
	}



public function litecash()
	{
		$this->view('softwork/litecash');  
	

	}







}























?>