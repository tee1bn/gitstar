<?php


use Illuminate\Database\Eloquent\Model as Eloquent;


class categories extends Eloquent 
{
	
	protected $fillable = ['category' , 'note'];
	protected $table = 'categories';


public function slider(){

return $this->hasOne('categories');
	}
}




?>