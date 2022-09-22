<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TextFieldTest extends TestCase{
   public function test_true()
   {
      $this->assertTrue(true);
   }

   public function test_vinc()
   {
      $this->assertJson('{}');
   }
}
// it('text field test',function(){
// //    $field = new Inkdez\AppManager\Support\FieldTypes\TextField;
//    $this->assertEquals('test','test');
// });
