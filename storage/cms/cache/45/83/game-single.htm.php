<?php 
use Sunal\Games\Models\Rule;class Cms5f09bb62e3767119453283_a88185fe39e04533091cdd33979bf02bClass extends Cms\Classes\PageCode
{
  
public function onStart(){
    $this['rules'] = Rule::get();

  }
}
