<?php 
use Sunal\Games\Models\Category;class Cms5f0c5a3115d89668627261_4edaabec5553224d7de01cde76809ffbClass extends Cms\Classes\PageCode
{

public function onStart(){
	$this['cc'] = Category::get();

}
}
