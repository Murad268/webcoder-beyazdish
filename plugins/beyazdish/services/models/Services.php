<?php

namespace Beyazdish\Services\Models;

use Model;

/**
 * Model
 */
class Services extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'subtitle', "description"];


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_services_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [];

    public $attachOne = [
        'icon' => \System\Models\File::class,
        'main_image' => \System\Models\File::class,
        'banner' => \System\Models\File::class,
    ];

    public $attachMany = [
        'images' => \System\Models\File::class,
        'videos' => \System\Models\File::class
    ];

    public $belongsTo = [
        'service_parent' => [Services::class]
    ];

    public function child(int $id) {
        return Services::where('service_parent_id', $id)->get();
    }

}
