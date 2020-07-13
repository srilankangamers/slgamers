<?php namespace Sunal\Games\Models;

use Model;

/**
 * Model
 */
class Category extends Model
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
    public $table = 'sunal_games_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

     public $belongsToMany = [

     'youtubes' => [
      'Sunal\Games\Models\Youtube',
       'table' => 'sunal_games_categories_youtube',
       'order' => 'title'
     ]
   ];
}
