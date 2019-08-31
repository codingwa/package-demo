<?php

namespace Xiaohai\Lara;

class Lara
{
    public function lara()
    {
        echo 'start';
    }

    public function getConfig()
    {
        var_dump(config('lara'));
    }
}
