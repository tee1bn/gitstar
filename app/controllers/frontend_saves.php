<?php


/**



*/
class frontend_saves extends controller
{



	public function __construct(){

	}
	
	public function index()
	{
		
	}

	public function subscribe_to_newsletter()
		{
	 	$newsletter = $this->model('newsletter');
try {

	$email = $_POST['email']	;
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			throw new Exception("Invalid Email address");
	}

$newsletter->create([	'email' => $_POST['email']			]);

	$message= $_POST['email']." as been subscribed succesfully";
	$this->flash($message,'success');

} catch (Exception $e) {

if ($e->errorInfo[1] == 1062) {
	$message = $email.' is already subscribed. Thank you.';
}else{
	$message= $e->getMessage();
}
$this->flash($message,'info');

}

 	
		}







}























?>