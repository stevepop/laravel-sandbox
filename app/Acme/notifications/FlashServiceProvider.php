<?php
/**
 * User: steve
 * Date: 03/06/2014
 * Time: 12:55
 */

namespace Acme\notifications;


use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bindShared('flash', function()
        {
             return $this->app->make('Acme\Notifications\FlashNotifier');
        });
    }

} 