<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;


    public function testHelloWorld()
    {
        $this->assertEquals('Hello World', 'Hello World');
    }

}

