<?php

require __DIR__."/../app/User.php";

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    
    private $user;
    
    public function setup()
    {
        $this->user = new User();
    }
    
    /**
     * @test
     */
    public function mustVerifyIfIsSettingUserAge()
    {
        
        $this->user->setAge(17);
        $this->assertEquals(17, $this->user->getAge());
        
    }
    
    /**
     * @test
     */
    public function mustVerifyIfIsSettingUserName()
    {
        $this->user->setName("Alisson");
        $this->stringContains($this->user->getName());
        $this->assertEquals("Alisson", $this->user->getName());
    }
}