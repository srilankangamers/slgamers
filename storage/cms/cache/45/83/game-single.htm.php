<?php 
use Sunal\Games\Models\Rule;class Cms5f1299e2cb125370090835_1a1678527f4cdaeb91836259b08a1912Class extends Cms\Classes\PageCode
{

public function onStart(){
  $this['rules'] = Rule::get();

}
}
