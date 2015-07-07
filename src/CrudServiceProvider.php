<?php

/*
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 */

namespace Adris\Crud;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{

    /**
     * Register the crud:generator
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.crud.generator', function(Application $app) {
            return $app['Adris\Crud\Commands\GeneratorCommand'];
        });

        $this->commands('command.crud.generator');
    }
}
