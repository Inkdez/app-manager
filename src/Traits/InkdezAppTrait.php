<?php

namespace Inkdez\AppManager\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 *
 */
trait InkdezAppTrait
{

    /**
     *  Make folder of app
     *
     * @param String $appName
     * @return bool
     */
    public function makeApp(String $appName): bool
    {
        $isDirectory = File::isDirectory("core/Apps/${appName}");
        if (!$isDirectory) {
            return  File::makeDirectory(
                path: base_path("core/Apps/${appName}"),
                recursive: true
            );
        }
        return $isDirectory;
    }

    /**
     * Create App table
     */
    public function createTable(String $appName,String $tableName): bool
    {
        $fileContent =  file_get_contents(__DIR__ .'/../../resources/stubs/InkdezAppModel.stub');
        $fileContent =  Str::replace("className","${tableName}",$fileContent);
        $fileContent =  Str::replace("collectionName",(Str::lower($tableName) ."s"),$fileContent);
        $file =  Str::replace("namespaceName",("Core\\Apps\\". Str::ucfirst($appName)),$fileContent);


        if (!File::exists(base_path("core/Apps/${appName}/${tableName}.php"))){
            fopen(base_path("core/Apps/${appName}/${tableName}.php"),'x+');
        }
        File::put(base_path("core/Apps/${appName}/${tableName}.php"),$file);

        return true;
    }
}
