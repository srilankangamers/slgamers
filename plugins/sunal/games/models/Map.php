<?php namespace Sunal\Games\Models;

use Model;

/**
 * Model
 */
class Map extends Model
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
    public $table = 'sunal_games_map';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'map_img' => 'System\Models\File'

    ];

    
}
