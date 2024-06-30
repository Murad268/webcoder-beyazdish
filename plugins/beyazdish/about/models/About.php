<?php namespace Beyazdish\About\Models;

use Model;

/**
 * Model
 */
class About extends Model
{
    use \October\Rain\Database\Traits\Validation;
         public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [ 'title', 'description', 'position'];

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_about_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
        
     public $attachOne = [
        'image' => \System\Models\File::class
    ];

}
