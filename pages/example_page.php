<?php 

/**
* 1.) Example on how to use interface from classes folder
*/

use Classes\ExampleClassInterface;

$example = new ExampleClassInterface(" Jaymard !");
echo $example->getHelloInterface();



/**
* 2.) Example on how to use Abstract from classes folder
*/

use Classes\ExampleClassAbstract;

$example = new ExampleClassAbstract();
$example->setHelloAbstract("and nice to meet you all");
echo $example->getHelloAbstract();



/**
*  3.) Example insert query
*/ 

use Classes\Connection;
use Models\Contacts;

//Open a connection instance
$instance = Connection::getNewConnection();

$contacts = new Contacts($instance);
$contacts->add("Jino Lacson", "jino.lacson@boom.camp", "07909101234", "P5 Barriada Legazpi City, Albay");

//Stop connection after insert
Connection::closeConnection($instance);

?>
