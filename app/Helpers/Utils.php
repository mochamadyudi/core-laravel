<?php

namespace App\Helpers;

class Utils
{
    public static function getPermalink($url = ''){
        return env('APP_URL').$url;
    }

}
