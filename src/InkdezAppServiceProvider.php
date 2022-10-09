<?php

namespace Inkdez\AppManager;

use Illuminate\Support\ServiceProvider;
use Inkdez\AppManager\Support\FieldTypes\MultipleSelectField;
use Inkdez\AppManager\Support\FieldTypes\SingleSelectField;
use Inkdez\AppManager\Support\FieldTypes\TextField;


class InkdezAppServiceProvider extends ServiceProvider
{
  public function register()
  {
    $loader = \Illuminate\Foundation\AliasLoader::getInstance();

    $this->app->bind('TextField',function(){return new TextField();});
    $this->app->bind('SingleSelectField',function(){return new SingleSelectField();});
    $this->app->bind('MultipleSelectField',function(){return new MultipleSelectField();});


    $loader->alias("InkdezTextField","Inkdez\\AppManager\\Support\\Facades\\TextFieldFacade");
    $loader->alias("InkdezSingleSelectField","Inkdez\\AppManager\\Support\\Facades\\SingleSelectFieldFacade");
    $loader->alias("InkdezMultipleSelectField","Inkdez\\AppManager\\Support\\Facades\\MultipleSelectFieldFacade");
}
  public function boot()
  {
    if ($this->app->runningInConsole()) {
        $this->publishes([
            __DIR__ . '/../database/migrations/create_applications_table.stub' =>
             database_path('migrations/' . '2022_10_5_1449' . '_create_applications_table.php'),

             __DIR__ . '/../database/migrations/create_collections_table.stub' =>
             database_path('migrations/' . '2022_10_5_1449' . '_create_collections_table.php'),

             __DIR__ . '/../database/migrations/create_entries_table.stub' =>
             database_path('migrations/' . '2022_10_5_1449' . '_create_entries_table.php'),

          ], 'migrations');
      }
  }
}
