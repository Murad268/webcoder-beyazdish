<?php

namespace Beyazdish\Gallery\Models;

use Beyazdish\Tags\Models\Tags;

use Model;

/**
 * Model
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\NestedTree;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];


    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_gallery_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [];
    public $attachOne = [
        'image' => \System\Models\File::class
    ];
    public $belongsTo = [
        'tags' => [Tags::class]
    ];

 
}
