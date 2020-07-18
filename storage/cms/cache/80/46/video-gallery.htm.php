<?php 
use Sunal\Games\Models\Category;class Cms5f12916bcfb95475242785_d86f3249ae723e99973fc71b6be52aeeClass extends Cms\Classes\PageCode
{

public function onStart(){
	$this['cc'] = Category::get();

}
}
