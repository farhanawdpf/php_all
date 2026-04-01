<?php
class A
{
   public function Info()
   {
      echo "Hello!";
   }
}


class B extends A
{
   public function infoDetails()
   {
      echo "Show All";
   }
}

final class C extends B
{
   public function StudentResult()
   {
      echo "Result is published";
   }
}
class D extends A
{
   public function StudentResult2()
   {
      echo "Result is published";
   }
}

$r = new B();
$r->infoDetails();
$r->Info();
