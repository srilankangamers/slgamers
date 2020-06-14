<?php namespace Sunal\Games\Components; 

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use redirect;
use Sunal\Games\Models\Register;
use Flash;
use ValidationException;
use System\Models\File;

class RegisterForm extends ComponentBase
{


    public function componentDetails()
    {
        return [

            'name' => 'Register Form',
            'description' => 'Registration for tournaments'

        ];

    }
    public function onSave()
    {
        $validator = Validator::make(
            $form = Input::all(),[
                'name' => 'required',
                'contact' => 'required',
                'ign' => 'required',
                'game_id' => 'required',
                'bankslip' => 'required|mimes:jpeg,bmp,png',

            ]

        );
        if($validator->fails()){
            throw new ValidationException($validator);
        }



        $register = new Register();
        $register->name = Input::get('name');
        $register->contact = Input::get('contact');
        $register->ign = Input::get('ign');
        $register->game_id = Input::get('game_id');
        $register->bankslip = Input::file('bankslip');
        $register->save();
        Flash::success('Registration Complete');
  

    }
    
    public function onUpload(){
        $image = Input::all();

        $file = (new File())->fromPost($image['bankslip']);

        return[

            '#imageresult' => '<img class="img-thumbnail rounded" src="' . $file->getThumb(150,150,['mode' => 'crop']) . '">'

        ];

    }
}

?>