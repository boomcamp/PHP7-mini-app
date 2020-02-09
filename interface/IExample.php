<?php 
declare(strict_types=1);

namespace Interfaces;

interface IExample
{
    const MSG  = "Hello Boom Camp";

    public function getHelloInterface() : String;
}