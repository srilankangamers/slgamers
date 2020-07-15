<?php 
use Sunal\Games\Models\Rule;use Sunal\Games\Models\Tournament;class Cms5f0ee54716b85806565096_e1eed51c2ad0fd4c208ed6fe1bdadbf1Class extends Cms\Classes\PageCode
{


public function onStart(){
  $this['rules'] = Rule::get();
  $this['tournaments'] = Tournament::get();

}
}
