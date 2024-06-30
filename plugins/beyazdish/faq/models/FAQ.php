<?php namespace Beyazdish\Faq\Models;

use Model;

/**
 * Model
 */
class FAQ extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\NestedTree;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['question', 'answer'];

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'beyazdish_faq_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
