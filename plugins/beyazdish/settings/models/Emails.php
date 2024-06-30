<?php namespace Beyazdish\Settings\Models;

use Model;

/**
 * Model
 */
class Emails extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\NestedTree;
   

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_settings_emails';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
