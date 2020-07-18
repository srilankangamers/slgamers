<?php 
use Sunal\Games\Models\Rule;use Sunal\Games\Models\Register;class Cms5f11da5feea0b879527199_d3968eb70d38793ccf782d081ecb490bClass extends Cms\Classes\PageCode
{


public function onStart(){
  $this['regs'] = Register::get();

}
}
