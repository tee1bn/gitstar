<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class newsletter extends Eloquent 
{
	
	public $name ;
	protected $fillable = ['email'];
	protected $table = 'newsletters';

}


















?>