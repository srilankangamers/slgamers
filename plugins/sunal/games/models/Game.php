<?php namespace Sunal\Games\Models;

use Model;

/**
 * Model
 */
class Game extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'sunal_games_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public  $belongsToMany = [

        'tournaments' => [

            'Sunal\Games\Models\Tournament',
            'table' => 'sunal_games_games_tournaments',
            'order' => 'tournament_title'
        ]
        
    ];

    public $attachOne = [
        'poster' => 'System\Models\File'

    ];
}
