<?php 
namespace Classes;

use Interfaces\IExample;

class ExampleClassInterface implements IExample
{
	private $msg1;

	public function __construct($msg)
    {
        $this->msg1 = $msg;
    }

    public function getHelloInterface() : String
    {
    	return IExample::MSG.$this->msg1;
    }
}
?>