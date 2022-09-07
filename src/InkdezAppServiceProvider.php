<?php

namespace Inkdez\AppManager;


use Illuminate\Support\ServiceProvider;
use Inkdez\AppManager\Console\InkdezAppCommand;

class InkdezAppServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind('InkdezApp',function($app){
        return new InkdezApp();
    });
  }

  public function boot()
  {
    // Register the command if we are using the application via the CLI
    if ($this->app->runningInConsole()) {
        $this->commands([
            InkdezAppCommand::class,
        ]);
    }
  }

}
