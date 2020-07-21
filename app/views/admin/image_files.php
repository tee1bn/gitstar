		<?php	


		$dir= 'public/img/upload/';  
		
		
		
		if(
		$open = @opendir( $dir)  ){
		
		}else{
		die("Sorry, the selected Week record/advert could not be fetched.");
		
		} 

		
		
		
		
		$file =  scandir($dir)   ;
$file_names = readdir($open);

$all =$dir."/".$file_names;

		$total_files = count($file) - 2;

		$per_page = ($total_files <= 20 ) ?  $total_files : 20;

		$pages = ceil($total_files / $per_page);
		
		@$actual_page = ($data['page'] &&  (($data['page'])  <=  $pages)) ? $data['page'] : 1;

		$incurred_excess = ($pages*$per_page)-$total_files;
		$remainder=$total_files% $per_page;
		//echo ' this is diff '. $incurred_excess ." ".$remainder;
		
		
		$from_file = ($actual_page -1) *  $per_page; 
		$to_file = $actual_page * $per_page;
		
		$num =1 ;
		
		
					if ($actual_page==1){
				$from_file = 2;
				}
$table_row= -1;
		
		$ii= 1;
		while( ($file_names = readdir($open)) != false){
		
			if( $file_names != "."  &&  $file_names !=".."   &&  $file_names !="Thumbs.db"  ){
		
		
		@$file_num= $file[$from_file] ;
		
		if($table_row>4){
		$table_row =0;
		
		}
		
		if($table_row ==4 ||  $num ==1){



		echo"
		<tr>
		";
		
		}
		
		
		
		echo"

<td>


 <div class='col-md-55'>
                        <div class='thumbnail'>
                          <div class='image view view-first'>
                            <img style='width: 100%; display: block;' src='$this->domain/$dir/$file_num' alt='$file_num'>
                            <div class='mask no-caption'>
                       <div class='tools tools-bottom'>
<a data-toggle='modal' data-target='#delete_media_modal$ii' ><i class=' fa fa-trash'></i></a>
                              </div>
                            </div>
                          </div>
                          <div class='caption'>
                            <p><strong>Name: $file_num</strong>
                            </p>
                            <small> &nbsp</small>
                          </div>
                        </div>
                      </div>



<div id='delete_media_modal$ii' class='modal fade bs-example-modal-sm' tabindex='-1' role='dialog' aria-hidden='true'>
  <div class='modal-dialog modal-sm'>
    <div class='modal-content'>

      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
        </button>
        <h4 class='modal-title' id='myModalLabel2'>Delete Comment</h4>
      </div>
      <div class='modal-body'>
        <h4>Are you sure?</h4>
        <p>This item will be permanenly deleted $file_num with no possibility of restoration.</p>

      </div>
      <div class='modal-footer'>
<form method='post' action='$domain delete/media'>
      <input type='hidden' value='$dir/$file_num' name= 'media_id'/>
        <button type='submit' class='btn btn-default'>Yes</button>
        </form>
        <button type='button' class='btn btn-default' data-dismiss='modal'>No</button>
      </div>

    </div>
  </div>
</div>
</td>
		";
		
		
		if($table_row == 3 ){
		echo"
		</tr>
		";
		
		}
		
		
		
		$ii++;
		
		
		$to_file++;
		$num++;
		$from_file++;
		$table_row++;
		if(($num == $per_page)  || ($num==($remainder+1) && $actual_page == $pages)){
		break;
		}
}
}


?>