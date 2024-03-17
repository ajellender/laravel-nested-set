<?php

namespace Ajellender\LaravelNestedSet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ajellender\LaravelNestedSet\LaravelNestedSet
 */
class LaravelNestedSet extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ajellender\LaravelNestedSet\LaravelNestedSet::class;
    }
}
