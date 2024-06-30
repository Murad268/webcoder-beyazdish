<?php namespace Beyazdish\Blogs\Models;

use Model;

/**
 * Model
 */
class Blogs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\NestedTree;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title','text'];

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_blogs_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
     public $attachOne = [
        'image' => \System\Models\File::class
    ];

}
