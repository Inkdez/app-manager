<?php

namespace Inkdez\AppManager\Console;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\File;


class InkdezAppCommand extends Command
{
    public $signature = 'make:inkdezapp {app}';

    public $description = 'Make a MongoDB collection that is a collection app on app.';

    public function handle(): int
    {

       $test =  File::exists(base_path('core/Apps/'. $this->argument('app') .'php' ));

        if($test){
            $this->comment('All done ' . base_path('core/Apps/'. $this->argument('app') .'php' ));
        }else
        $this->comment('Fail ' . base_path('core/Apps/'. $this->argument('app') .'.php' ));

        return self::SUCCESS;
    }
}
