<?php


it('is string removed diatricks' , function(){
    $str = new Inkdez\AppManager\Support\Helpers\Str();
    $this->assertEquals('Joao',$str->diactric('João'));
});
