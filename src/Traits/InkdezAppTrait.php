<?php

namespace Inkdez\AppManager\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
    public function makeApp(String $companyName,String $appName): bool
    {
        $isDirectory = File::isDirectory(storage_path("Apps/${companyName}/${appName}"));
        if (!$isDirectory) { return Storage::makeDirectory("Apps/${companyName}/${appName}");}
        return $isDirectory;
    }

    /**
     * Create App table
     */
    public function createTable(String $companyName,String $appName,?String $tableName = null): bool
    {
        $fileContent =  file_get_contents(__DIR__ . '/../../resources/stubs/InkdezAppModel.stub');

        $fileContent =
        Str::replace("namespaceName", ("Core\\Apps\\" .Str::ucfirst($companyName) .
        "\\".Str::ucfirst($appName)) , $fileContent);
        $fileContent = Str::replace("appName", Str::lower($appName), $fileContent);
        $fileContent = Str::replace("companyName", Str::lower($companyName), $fileContent);
        $fileContent = Str::replace("TableName", Str::ucfirst($tableName), $fileContent);

        $file =  Str::replace("collectionName", Str::lower($tableName), $fileContent);

        if (!File::exists(storage_path("app/Apps/${companyName}/${appName}/${tableName}.php"))) fopen(storage_path("app/Apps/${companyName}/${appName}/${tableName}.php"), 'x+');

        

        return  Storage::put("Apps/${companyName}/${appName}/${tableName}.php", $file);
    }
}
