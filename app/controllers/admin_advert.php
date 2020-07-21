<?php

/**



*/
class admin_advert extends controller
{

	public function __construct(){

	}

public function index(){
	$this->poolsadvert();
	}



	
	public function poolsadvert( $page=1 )
	{
		$week = date("W" ,strtotime("-27 week") );
		$year = date("Y");

		$directory = "public/files/editors/".$year."_".$week;
// echo "$directory";

		$files =  scandir($directory)   ;
		unset($files[0]);
		$files  = array_values($files);
		unset($files[0]);
		//sort accoeding to upload time
foreach ($files as $filename) {
		$file["$filename"] = filemtime($directory."/".$filename);
	}
arsort($file);
$files = array_keys($file);
array_unshift($files,'');
unset($files[0]);
// print_r($files);

		$per_page = 100 ;
		$total_no_of_pages = ceil(count($files)/$per_page);


		if($page > $total_no_of_pages){ $page = $total_no_of_pages;}
		if($page < 1){ $page = 1;}

		$from = ($page-1)*$per_page + 1;



for ($i=0; $i < $per_page ; $i++) { 		
if($files["$from"] == ''){continue;}
list($w, $h)= getimagesize("$directory"."/".$files["$from"]);
$files_per_page[]  =  array( 'image_name'=>$files["$from"] , 'width'=>$w , 'height'=>$h);
$from++;
}


/*
		echo "<pre>";
		print_r($files_per_page);
		echo "</pre>";
*/
		$size =  getimagesize($files[3]);

			$this->view('admin/advert' , [
										'page' => $page,
										'files_per_page' =>$files_per_page,
										'directory' => $directory,
										'total_no_of_pages' => $total_no_of_pages,
										'week'=>$week,
										'year'=> $year,
										'directory' =>$directory
														]); 

	}





}























?>