<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class comment extends Eloquent 
{
	
	protected $fillable = ['post_id','name', 'email' ,'status' , 'content'];



public function post(){

return $this->belongsTo('post' , 'post_id');
	}
	

}


 







?>