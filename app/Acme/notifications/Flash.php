<?php
/**
 * User: steve
 * Date: 03/06/2014
 * Time: 12:45
 */

namespace Acme\notifications;


use Illuminate\Support\Facades\Facade;

class Flash extends Facade {

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static  function getFacadeAccessor()
    {
        return 'flash';
    }

} 