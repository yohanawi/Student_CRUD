<?php

namespace domain\Facades;

use Illuminate\Support\Facades\Facade;

class ImagesFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return ImagesService::class;
    }
}
