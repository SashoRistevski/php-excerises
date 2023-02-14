<?php

namespace chapter2;

class BaseClass
{
public string $publicProperty = 'public properties and methods scan be accessed from anywhere';
protected string $protectedProperty = 'protected properties and methods can be accessed from the declaring class or a subclass';

private $privateProperty = 'private properties and methods can be accessed within the declaring class, not visible anywhere else';

protected function getProtectedProperty() : string
{
   return $this->protectedProperty;
}
public function getPrivateProperty() : string
{
    return $this->privateProperty;
}

}



