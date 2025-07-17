
<?php
class S {
  public static $value=34;


  public function staticValue() {
    return self::$value;
  }

   static function show(){ 
    return "This is static method";
  }

  function applyStatic(){ 
    return self::show();
  }

}

class B extends S{ 
    public function xStatic() {
    return parent::$value;
  }
}

$p = new B();
// echo S::staticValue();
echo $p->xStatic();
echo B::show();

