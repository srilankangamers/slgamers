<?php 
use Sunal\Games\Models\Category;class Cms5f0c48cb809a0717473280_9ffdcd5355457e97f82cdd7276add300Class extends Cms\Classes\PageCode
{

public function onStart(){
	$this['cc'] = Category::get();

}
}
