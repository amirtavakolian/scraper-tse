<?php
namespace App\Services;

class payment{


    public $b;

    public function __construct($a)
    {
        $this->b = $a;
    }


    public function index()
    {
        echo $this->b. "<h1>Hello from payment</h1>";
    }
}
