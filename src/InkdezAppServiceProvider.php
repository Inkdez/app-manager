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
    //
  }

}
