<?php 
use Sunal\Games\Models\Register;use Sunal\Games\Models\Tournament;use Sunal\Games\Models\Game;class Cms5f12a23013dba026851536_712c350bf31a1dbaff51941beb55c8dcClass extends Cms\Classes\PageCode
{



public function onStart(){
  $this['regist'] = Register::get();
  $this['games'] = Game::get();
  $this['tt'] = Tournament::get();
}
}
