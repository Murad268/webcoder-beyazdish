<?php namespace Beyazdish\Settings\Models;

use Model;

/**
 * Model
 */
class Addresses extends Model
{
    use \October\Rain\Database\Traits\Validation;
     public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title'];

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_settings_addresses';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
