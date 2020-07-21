<?php

/**



*/
class admin_upload extends controller
{

	public function __construct(){
	// $this->middleware('editor')->mustbe_loggedin();

	}



	
	public function upload_pictures()
	{

$ds = DIRECTORY_SEPARATOR;
		$storeFolder = '../../public/img/upload';

		if(!empty($_FILES)){
$tempFile = $_FILES['file']['tmp_name'];
$targetPath = dirname(__FILE__).$ds.$storeFolder.$ds;
$targetFile = $targetPath.$_FILES['file']['name'];
move_uploaded_file($tempFile, $targetFile);


		}
		
		// echo $targetFile;
	}





}























?>