<?php 
use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author yourname
*/
class YourClassTest extends TestCase
{
	
  /**
  * Just check if the YourClass has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError()
  {
	$var = Velocity\Connection::instance();
	$baseurl= \Velocity\Config::$baseurl_live;
	$this->assertTrue(is_object($var));

	$this->assertTrue ($baseurl==="https://api.nabcommerce.com/REST/2.0.18/");
	unset($var);
  }
  
  /**
  * Just check if the YourClass has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testMethod1()
  {
	$var = new Velocity\YourClass;
	$this->assertTrue($var->method1("hey") == 'Hello World');
	unset($var);
  } 
}
