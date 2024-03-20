<?php

namespace Mojahid\SlugGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mojahid\SlugGenerator\SlugGenerator
 */
class SlugGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mojahid\SlugGenerator\SlugGenerator::class;
    }
}
