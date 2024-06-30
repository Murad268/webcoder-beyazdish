<?php namespace Beyazdish\Settings\Models;

use Model;

/**
 * Model
 */
class Socials extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;


    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_settings_socials';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
