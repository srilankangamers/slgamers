<?php namespace Sunal\Games\Models;

use Model;

/**
 * Model
 */
class Tournament extends Model
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
    public $table = 'sunal_games_tournaments';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'poster' => 'System\Models\File'

    ];
    
    protected $jsonable = ['platform','winners'];

    public $belongsToMany = [

     'maps' => [
      'Sunal\Games\Models\Map',
       'table' => 'sunal_games_map_tournaments',
       'order' => 'name'
     ],
     'games' => [

            'Sunal\Games\Models\Game',
            'table' => 'sunal_games_games_tournaments',
            'order' => 'title'
        ]
   ];

}
