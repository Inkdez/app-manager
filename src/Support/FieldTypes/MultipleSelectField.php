<?php
namespace Inkdez\AppManager\Support\FieldTypes;


class MultipleSelectField extends SingleSelectField {

    public int $limit = 150;

    function __construct()
    {
       parent::__construct();
       $this->type = "multiple_select";
    }

    public function setLimit(int $limit):self
    {
        $this->limit = $limit;
        return $this;
    }
}
