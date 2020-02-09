<?php 
namespace Classes;

use Abstracts\AExample;

class ExampleClassAbstract extends AExample 
{
	private $msg1;

	public function __construct()
    {
       //Empty Constructor
    }

    public function setHelloAbstract($msg1)
    {
    	$this->msg1 = $msg1;
    }

    public function getHelloAbstract() : String
    {
    	return $this->msg1;
    }
}
?>