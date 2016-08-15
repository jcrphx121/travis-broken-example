<?php

before_install:
  - sudo apt-get -qq update
  - sudo apt-get install -y libxml2-dev

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
}

?>
