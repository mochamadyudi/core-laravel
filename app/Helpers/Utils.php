<?php

namespace App\Helpers;

class Utils
{
    /**
     * @param string $url
     * @return string
     */
    public static function getPermalink($url = '',$sluggify = ''){
        return env('APP_URL').$url.Utils::sluggify($sluggify);
    }

    /**
     * @param string $txt
     * @return string
     */
    public static function sluggify($txt = ''){
        return Utils::toLowerCase(str_replace(" ","-",$txt));
    }

    /**
     * @param string $txt
     * @return string
     */
    public static function toLowerCase($txt = ''){
        return strtolower($txt);
    }

}
