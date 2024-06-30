<?php namespace Beyazdish\Statistics\Models;

use Model;

/**
 * Model
 */
class Statistics extends Model
{
    use \October\Rain\Database\Traits\Validation;
       use \October\Rain\Database\Traits\NestedTree;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title','text'];

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_statistics_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
       public $attachOne = [
        'image' => \System\Models\File::class
    ];
}
