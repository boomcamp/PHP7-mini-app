<?php
declare(strict_types=1);

namespace Abstracts;

abstract class AExample
{
    abstract function setHelloAbstract($msg);
    abstract function getHelloAbstract() : String;
}