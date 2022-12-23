<?php

namespace Yamobile\Blog\Models;

use Model;

class Settings extends Model
{
    /**
     * @var array implement these behaviors
     */
    public $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    /**
     * @var string settingsCode unique to this model
     */
    public $settingsCode = 'yamobile_blog_settings';

    /**
     * @var string settingsFields configuration
     */
    public $settingsFields = 'fields.yaml';
}