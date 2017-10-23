<?php

namespace Application\Model\User;

class UserModel
{
    protected $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name): UserModel
    {
        $this->name = $name;
        return $this;
    }
}