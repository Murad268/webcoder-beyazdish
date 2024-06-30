<?php namespace Beyazdish\Tags\Models;

use Beyazdish\Gallery\Models\Gallery;
use Model;

/**
 * Model
 */
class Tags extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name'];
    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_tags_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    public $belongsTo = [

        'gallery' => [Gallery::class]
    ];
}
