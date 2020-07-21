<?php


/**



*/
class blog_listing extends controller
{




	public function __construct(){

	}
	
	public function index($category='', $category_id='' ,$page=1)
	{

	$this_url = "$this->domain/fashion-blog/$category/$category_id/";

	$category_model = $this->model('categories');
	$comment = $this->model('comment');

	$category = $this->decode_url($category);

$post_model = $this->model('post');

	$categories = $category_model->all();
	$posts = ($category_id=='')?  $post_model->orderBy('created_at', DESC)->get() : $post_model->where('category_id',$category_id)->get()->take(5);

		$this->view('blog/blog' , [
								'category'=>$category,
								'categories'=>$categories,
								'posts'=>$posts,
								'url'=>$this_url,
								'page' =>$page,
								]);  
	}







}























?>