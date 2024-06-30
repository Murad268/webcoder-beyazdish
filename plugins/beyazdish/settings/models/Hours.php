<?php namespace Beyazdish\Settings\Models;

use Model;

/**
 * Model
 */
class Hours extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_settings_hours';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
