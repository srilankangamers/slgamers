<?php namespace Sunal\Games\Components; 

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use redirect;
use Sunal\Games\Models\Register;
use Sunal\Games\Models\Tournament;
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
                'tour_id' => 'numeric',
                //'bankslip' => 'required|mimes:jpeg,bmp,png',

            ]

        );
        if($validator->fails()){
            throw new ValidationException($validator);
        }
        $tournament = new Tournament();
        $register = new Register();
        $register->name = Input::get('name');
        $register->contact = Input::get('contact');
        $register->ign = Input::get('ign');
        $register->game_id = Input::get('game_id');
        $register->bankslip = Input::file('bankslip');
        $register->tournament_id = Input::get('tour_id');
        $register->save();
        $register->tourns()->attach([
            1 => [ 
                    'tournament_id' => Input::get('tour_id'),
                    'register_id' => $register->id
                ]
        ]);
        
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