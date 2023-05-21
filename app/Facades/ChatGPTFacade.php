<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ChatGPTFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ChatGPT';
    }
}
