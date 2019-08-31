<?php

namespace Xiaohai\Lara\Facades;

use \Illuminate\Support\Facades\Facade as LaravelFacade;

class LaraFacades extends LaravelFacade
{
    protected static function getFacadeAccessor()
    {
        return 'lara';
    }
}
