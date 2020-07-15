<?php 
use Sunal\Games\Models\Category;class Cms5f0f12d200b61608115343_43031dfaf8a3fbecce4780de90baa955Class extends Cms\Classes\PageCode
{

public function onStart(){
	$this['cc'] = Category::get();

}
}
