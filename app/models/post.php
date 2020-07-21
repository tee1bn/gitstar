<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class post extends Eloquent 
{
	
	protected $fillable = ['title', 'category_id', 'image_path' , 'content'];
	

public function category(){

return $this->belongsTo('categories');
	}

public function comment(){

return $this->hasMany('comment')->orderBy('created_at' , DESC)->take(5);
	}
	
public function no_oF_comment(){

return $this->hasMany('comment')->get()->count();
	}
	



}

 




?>