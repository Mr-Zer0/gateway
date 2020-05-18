<?php

namespace App\Util;

use App\Application;
use App\User;

/**
 * This class part of the Gateway project
 * 
 * Utility class for application key generate
 */
class Keygen
{

    /**
     * Return random generated appliation api key based on current micro time, application id and user id
     *
     * @param App\Application $app 
     * @return String
     **/
    public static function generate(Application $app)
    {
        return sha1(md5($app->id . $app->user()->id) . time() . mt_rand());
    }
}
