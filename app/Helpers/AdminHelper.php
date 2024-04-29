<?php

namespace App\Helpers;

use App\Models\AdminConfig;
use App\Models\AdminConfiguration;
use App\Models\Configuration;
use App\Models\ServiceContent;
use Carbon\Carbon;
use Illuminate\Support\Str;


class AdminHelper
{

    public static function getValueByKey($key)
    {
        $theme_settings = AdminConfiguration::where('key', $key)->first();

        if (!$theme_settings) {
            return null;
        }

        switch ($theme_settings->type) {
            case 0:
                return $theme_settings->value;
            case 1:
                return $theme_settings->image;
            default:
                return null;
        }
    }

}
