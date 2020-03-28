<?php

namespace Appstract\LaravelPakketpartner;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Appstract\Skeleton\SkeletonClass
 */
class PakketpartnerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pakketpartner';
    }
}
