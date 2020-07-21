<?php
@session_start();

// use Illuminate\Database\Eloquent\Model as Eloquent;

class admin extends controller
{
	

	public function __construct(){

	}
	
	


public function mustbe_loggedin(){

if(isset( $_SESSION["$this->website.__admin__id"] )){

	return true;
		}else{

	header("Location: $this->domain/admin_login");

		}

}





}


















?>