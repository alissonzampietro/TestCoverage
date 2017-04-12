<?php
use PHPUnit\Framework\TestCase;

class JsonSchemaTest extends TestCase
{

    private $json;

    public function setup()
    {
        $this->json = new Json();
    }

    /**
     * @test
     */
    public function mustEncodeArray()
    {
        $this->assertEquals(json_encode(array(
            "name" => "Alisson",
            "age" => 22
        )), $this->json->encode(array(
            "name" => "Alisson",
            "age" => 22
        )));
    }
    
    /**
     * @test
     */
    public function mustDecodeJson()
    {
    $this->assertEquals(array(
        "name" => "Alisson",
        "age" => 22
    ), $this->json->decode('{"name":"Alisson","age":22}'));
    }
    
    /**
     * @test
     */
    public function mustVerifyIfBothIsWorking()
    {
        
    }
}