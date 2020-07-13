<?php namespace Sunal\Games;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Sunal\Games\Components\RegisterForm' => 'registerform',
        ];
    }

    public function registerSettings()
    {
    }

    public function registerformWidgets()
    {

        return [
            'Sunal\Games\FormWidgets\Categorybox' => [
             'label' => 'Categorybox field',
             'code' => 'categorybox'
         ]

     ];
 }
}
