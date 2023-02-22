<?php

namespace chapter2;

class SubClass extends BaseClass
{
    public function getParentProtectedProperty(): string
    {
        return $this->getParentProtectedProperty();
    }

    public function getParentPrivateProperty() : string
    {
        // return $this->privateProperty; /// you can"t grab the private property from the base class
        return $this->getPrivateProperty(); // but you can grab the private property via the public method in the base class
    }
}



