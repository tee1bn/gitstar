<?php



class admin_posts extends controller{
protected $posts;
protected $photography;

public function __construct(){


	}
public function index(){
$post = $this->model('post')->all();
$categories = $this->model('categories');


$this->view('admin/posts', ['posts'=>$post]);  //note this is a path to the view


}	







}



