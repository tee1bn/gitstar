<?php



class admin_delete extends controller{


public function __construct(){



	}
	


public function index(){



	}
	

public function media( $filename=''){

$file= $_POST['media_id']; 
// echo $_POST['media_id'];
 if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }

header("Location: $this->domain/admin_media");

	}
	





public function comment(){



 	$comment = $this->model('comment');

$comment->where('id', $_POST['comment_id'])->delete();


 echo $_POST['comment_id'];

 header("Location: $this->domain/admin_comment");


	}
	



public function newsletter(){

 	$newsletter = $this->model('newsletter');

$newsletter->where('id', $_POST['newsletter_id'])->delete();

echo $_POST['newsletter_id'];
 // header("Location: $this->domain/admin_newsletter");


	}
	




public function photography(){


 	$photography = $this->model( 'photography');

$photography->where('id', $_POST['photography_id'])->delete();


 echo $_POST['photography_id'];

header("Location: $this->domain/admin_posts");

	}
	



public function post(){


 	$post = $this->model('post');

$post->where('id', $_POST['post_id'])->delete();




 // echo $_POST['post_id'];
 header("Location: $this->domain/admin_posts");


	}
	



public function user(){



 	$user = $this->model('user');

$user->where('id', $_POST['user_id'])->delete();




header("Location: $this->domain/admin_users");

	}
	


public function category(){


 	$category = $this->model('site_identity' , 'categories');
 
$category->where('id', $_POST['category_id'])->delete();


header("Location: $this->domain/admin_posts");

	}
	



public function tags(){


 	$tags = $this->model('site_identity' , 'tags');
 
$tags->where('id', $_POST['tag_id'])->delete();

header("Location: $this->domain/admin_posts");

	}
	






}



