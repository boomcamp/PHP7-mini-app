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
 *  3.) Inserting to database example
 *  
 *  use Classes\Contacts;
 *  $contacts = new Contacts();
 *  $contacts->add($name, $email, $phone, $contact);
 * 
 */
?>
