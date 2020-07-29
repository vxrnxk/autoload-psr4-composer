<?php

namespace App\Autoload;

class User
{
    public $id;
    public $name;
    public $status;

    function __construct($id, $name, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
    }
}
