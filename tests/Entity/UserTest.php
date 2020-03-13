<?php


namespace App\Tests\Entity;



use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testWeCanGetUserName()
    {
        $user = new User();
        $user->setUserName('Billy66');
        $this->assertEquals($user->getUserName(),'Billy66');
    }

    public function testWeCanGetFirstName()
    {
        $user = new User();
        $user->setFirstName('Billy');
        $this->assertEquals($user->getFirstName(),'Billy');
    }

    public function testWeCanGetLastName()
    {
        $user = new User();
        $user->setLastName('Crosby');
        $this->assertEquals($user->getLastName(),'Crosby');
    }


    public function testWeCanGetPassword()
    {
        $user = new User();
        $user->setPassword('password');
        $this->assertEquals($user->getPassword(),'password');
    }

    public function testWeCanGetEmail()
    {
        $user = new User();
        $user->setEmail('email@gmail.com');
        $this->assertEquals($user->getEmail(),'email@gmail.com');
    }


    public function testUserNameIsNotEmpty()
    {
        $user = new User();
        $user->setUserName('Billy66');
        $this->assertNotEmpty($user->getUserName(),'Billy');
    }


    public function testFirstNameIsNotEmpty()
    {
        $user = new User();
        $user->setFirstName('Billy');
        $this->assertNotEmpty($user->getFirstName(),'Billy');
    }

    public function testLastNameIsNotEmpty()
    {
        $user = new User();
        $user->setLastName('Billy');
        $this->assertNotEmpty($user->getLastName(),'Crosby');
    }

    public function testPasswordIsNotEmpty()
    {
        $user = new User();
        $user->setPassword('password');
        $this->assertNotEmpty($user->getPassword(),'password');
    }

    public function testEmailIsNotEmpty()
    {
        $user = new User();
        $user->setEmail('email@gmail.com');
        $this->assertNotEmpty($user->getEmail(),'email@gmail.com');
    }





}