<?php

namespace Inkdez\AppManager\Support\FieldTypes;

use Inkdez\AppManager\Support\Fields\Field;

class TextField extends Field{

    function __construct()
    {
       parent::__construct();
       $this->type = "text";
    }




}

