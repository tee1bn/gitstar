<?php
session_start();

/**



*/
class admin_auth extends controller
{

	public function __construct(){

	}

	
	public function index( )
	{		
			$this->view('admin/dashboard'); 

	}


public function login(){

$user = $this->strip( $_POST['user']);
$password =$this->strip( $_POST['password']);

$users = $this->model('user');

//login with username 
$users = $users->where([
    ['username', '=', "$user"],
    ['password', '=', "$password"]
		])->whereIn('type_id' , [1,5])
				->get();






print_r($users);


if($users->isNotEmpty()){

	foreach ($users as $user) {

  	$_SESSION["$this->website.__admin__id"] = $user->id;
  	$_SESSION["$this->website.__admin__type_id"] = $user->type_id;
  	$_SESSION["$this->website.__admin__name"] = ($user->name);
  	$_SESSION["$this->website.__admin__surname"] =  ($user->surname);

  	header("Location: $this->domain/admin_dashboard");

}
}else{

  	header("Location: $this->domain/admin_login");


}


	}


	
public function logout(){

session_destroy();

  	header("Location: $this->domain/admin_login");

	}
	




}























?>