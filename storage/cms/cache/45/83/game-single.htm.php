<?php 
use Sunal\Games\Models\Rule;class Cms5ee71ddfe41c1696074421_7a91fb831fbc95ca6fab1a0490510b0eClass extends Cms\Classes\PageCode
{
  
public function onStart(){
    $this['rules'] = Rule::get();

  }
}
