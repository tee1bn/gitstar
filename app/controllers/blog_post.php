<?php


/**



*/
class blog_post extends controller
{



	public function __construct(){

	}
	
	public function index($post_id='')
	{
		
	// ->orderBy('created_at' , DESC)
	$post = $this->model('post')->where('id',$post_id)->first();

	$comment = $this->model('comment');
	$comment = $post->comment()->get();
	$number_of_comments = $comment->count();

		$category = $this->model('categories')->where('id', $post->category_id)->first()->category;

		$this->view('blog/blog-post' , [
								'category'=>$category,
								'no_of_comments'=>$number_of_comments,
								'comments'=>$comment,

							'post' => $post
			]);  
	}







}























?>