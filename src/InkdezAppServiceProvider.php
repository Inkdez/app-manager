<?php

namespace Inkdez\AppManager;


use Illuminate\Support\ServiceProvider;
use Inkdez\AppManager\Console\InkdezAppCommand;

class InkdezAppServiceprovider extends ServiceProvider
{
  public function register()
  {
    //
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
