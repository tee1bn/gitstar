<?php



class admin_saves extends controller{


	protected $users ;
	protected $post ;
	protected $user ;
	protected $tag ;
	protected $social ;

	
public function __construct(){

// $this->middleware('login_check'); 

	}
	

public function index(){
 
 echo "index save";

	}


public function user(){
 

 	$user = $this->model('user');

 	try {


$user->create([

	'name' => $_POST['name'],
	'lastname' => $_POST['lastname'],
	'email' => $_POST['email'],
	'role' => $_POST['role'],
	'country' => $_POST['country'],
	'phone' => $_POST['phone'],
	'password' => $_POST['password']
	]);
 echo "index save user";

 		
 	} catch (Exception $e) {
 		echo "failure";
 	}
 
header("Location: $this->domain/admin_users");


	}



public function post(){


 	$post = $this->model('post');
 try {
 
$post->create([

	'title' => $_POST['title'],
	'category_id' => $_POST['category'],
	'image_path' => $_POST['image_path'],
	'content' => $_POST['content']
	]);

$last_post = $this->model('post')->all()->last();
echo "succ";
// mail_all_Subcribers($post_id, $_POST['title'], $_POST['category']) 

 } catch (Exception $e) {
 	 echo "Failure";
 }
// header("Location: $this->domain/admin_posts");

	}


public function mail_all_Subcribers($post_id='', $post_title='', $post_category=''){



$email = 'postfeeds@kemislookbookcom';
$header= "Kemislookbook post Feeds";
$subject = $post_title;
$post_link = $this->domain."/singlepage/$post_id" ;
$message = "Hello! here is another post under $post_category: $post_link";



foreach ($this->model('newsletter')->all() as $to ) {
	# code...


				if(mail($to->email , $subject , $message, $header)){

		 echo "save";

	}else{

		 echo "$email , $header, $subject, $txt  not save";

	}

}

	
	

}






public function category(){



 	$category = $this->model('site_identity' , 'categories');
 
$category->create([

	'category' => $_POST['category']
	]);

 
header("Location: $this->domain/admin_posts");

	}
public function tag(){
 

 	$tags = $this->model('site_identity' , 'tags');
 
$tags->create([

	'tags' => $_POST['tag']
	]);




header("Location: $this->domain/admin_posts");

	}
	

public function site_identify(){


 	$site_identity = $this->model('site_identity');
 
$site_identity->where('id',1)->update([

	'twitter' => $_POST['twitter'],
	'facebook' => $_POST['fb'],
	'pinterest' => $_POST['pinterest'],
	'linkedin' => $_POST['linkedin'],
	'instagram' => $_POST['instagram'],
	'googleplus' => $_POST['googleplus']

	]);



header("Location: $this->domain/admin_site_identity");

	}
	

public function footer(){


 	$site_identity = $this->model('site_identity');
 
$site_identity->where('id',1)->update([

	'address' => $_POST['address'],
	'email' => $_POST['email'],
	'phone' => $_POST['phone'],
	'url' => $_POST['url'],
	'editor_desk' => $_POST['editor_desk'],
'newsletter_info' => $_POST['newsletter_info']


	]);



header("Location: $this->domain/admin_site_identity");

	}
	



public function photograph(){


 $photo = $this->model('photography');
 	//print_r($photo);
 
$photo->create([


	'content' => $_POST['content'],

	'photo_path' => $_POST['photo_path'],


			]);



 echo "save pho";

	}
	




public function about(){


 	$about = $this->model('site_identity' , 'abouts');
 
$about->where('id',1)->update([

	'about_note' => $_POST['about_note'],
	'educational_bg' => $_POST['educational_bg'],
	'general_interest' => $_POST['general_interest'],
	'what_makes_me_tick' => $_POST['what_makes_me_tick'],
	'featured_image' => $_POST['featured_image']

	]);



header("Location: $this->domain/admin_site_identity");

	}
	
public function slider(){


 	$sliders = $this->model('site_identity' , 'slider');
 
 if(($sliders->where('category_id', $_POST['category'])->count()) >= 1){



$sliders->where('category_id', $_POST['category'])->update([

	'category_id' => $_POST['category'],

	'content' => $_POST['content'],

	'image_path' => $_POST['featured_image'],

	]);



 echo "save";

	}else{

$sliders->create([

			'category_id' => $_POST['category'],

	'content' => $_POST['content'],

	'image_path' => $_POST['featured_image'],


			]);
 echo "save";

	}
	
header("Location: $this->domain/admin_site_identity");

	}




public function other_pages(){


 	$other_page = $this->model('site_identity' , 'other_pages');
 
$other_page->where('id',1)->update([

	'photography_note' => $_POST['photography_note'],
	'contact_note' => $_POST['contact_note'],
	'skill_note' => $_POST['skill_note'],




	]);



 	$category = $this->model('site_identity' , 'categories');
$category = $category->all();
$i=0;
 	foreach ( $category as $category ){
 
$category->where('category', $category->category )->update([

	'note' => $_POST["$category->category"],
	
	]);
 echo "save $category->category";

}
header("Location: $this->domain/admin_site_identity");



	}






	
public function skill(){



 	$skillz= $this->model('site_identity' , 'skill');
 

// foreach ($skillz as $key) {

for ($i=1; $i <= 6 ; $i++) { 


if($skillz->where('id', $_POST["id_$i"])->get()->isNotEmpty()){


$skillz->where('id', $_POST["id_$i"])->update([

	'user_id' => $_POST['user_id'],

	'skills' => $_POST["skill_$i"],

	'level' => $_POST["level_$i"],


	]);


echo $_POST["id_$i"];
}else{

$skillz->create([

	'user_id' => $_POST['user_id'],

	'skills' => $_POST["skill_$i"],

	'level' => $_POST["level_$i"],


	]);

}




}


$about = $this->model('site_identity' , 'abouts');
 
$about->where('id',1)->update([

	'skill_image' => $_POST['skill_image'],


	]);

header("Location: $this->domain/admin_site_identity");
	

	}
	







public function message(){


$email = strtolower(strip_tags( $_POST['email']));
$header= strtolower(strip_tags( $_POST['name']));
$subject = strtolower(strip_tags( $_POST['subject']));
$message =strtolower(strip_tags( $_POST['message']));
	
	

foreach ($this->model('newsletter')->all() as $to ) {
	# code...


				if(mail($to->email , $subject , $message, $header)){

		 echo "save";

	}else{

		 echo "$email , $header, $subject, $txt  not save";

	}

}

	}
	












}























?>