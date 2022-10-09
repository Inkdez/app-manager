<?php
namespace Inkdez\AppManager\Support\FieldTypes;

use DragonCode\Support\Facades\Helpers\Arr;
use Inkdez\AppManager\Support\Fields\Field;

class SingleSelectField extends Field {

    public array $options = [];

    function __construct()
    {
       parent::__construct();
       $this->type = "single_select";
    }


    public function addOption(array|String  $options)
    {
        if(is_string($options))$this->options = Arr::merge([$options]);
        else $this->options = Arr::merge($options);
        return $this;
    }

}
