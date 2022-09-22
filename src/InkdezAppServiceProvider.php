<?php

namespace Inkdez\AppManager;


use Illuminate\Support\ServiceProvider;

class InkdezAppServiceProvider extends ServiceProvider
{
  public function register()
  {
    // $this->app->bind('InkdezApp',function($app){
    //     return new InkdezApp();
    // });
  }

  public function boot()
  {
    if ($this->app->runningInConsole()) {
        $this->publishes([
            __DIR__ . '/../database/migrations/create_applications_table.stub' =>
             database_path('migrations/' . date('Y_m_d_His', time()) . '_create_applications_table.php'),

             __DIR__ . '/../database/migrations/create_collections_table.stub' =>
             database_path('migrations/' . date('Y_m_d_His', time()) . '_create_collections_table.php'),

          ], 'migrations');
      }
  }

}
