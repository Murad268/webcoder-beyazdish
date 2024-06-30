<?php namespace Beyazdish\Settings\Models;

use Model;

/**
 * Model
 */
class SettingsPage extends Model
{
    use \October\Rain\Database\Traits\Validation;
      public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['copyright_text'];

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_settings_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'logo' => \System\Models\File::class,
        'footer_logo' => \System\Models\File::class,
        'favicon' => \System\Models\File::class,
        'video' => \System\Models\File::class,
    ];

}
