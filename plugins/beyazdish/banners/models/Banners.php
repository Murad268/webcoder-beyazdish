<?php namespace Beyazdish\Banners\Models;

use Model;

/**
 * Model
 */
class Banners extends Model
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
    public $table = 'beyazdish_banners_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    
     public $attachOne = [
        'home' => \System\Models\File::class,
        'services' => \System\Models\File::class,
        'team' => \System\Models\File::class,
        'blogs' => \System\Models\File::class,
        'faq' => \System\Models\File::class,
        'about' => \System\Models\File::class,
        'contact' => \System\Models\File::class,
        'news' => \System\Models\File::class,
        'teams' => \System\Models\File::class,
        'one_blog' => \System\Models\File::class,
    ];
}
