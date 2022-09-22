<?php

it('text field test',function(){
   $field = new Inkdez\AppManager\Support\FieldTypes\TextField;
   $this->assertEquals($field->getType(),'test');
});
