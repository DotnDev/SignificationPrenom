<?php


namespace App\Tests\Entity;



use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{


    /* These tests (testWeCanGet...) are potentially redundant as we are already testing the getters and setters with next tests? (notEmpty) */
    /* For email and passwords, how to test their validity? */

    public function testWeCanGetUserName()
    {
        $user = new User();
        $user->setUserName('Billy66');
        $this->assertEquals($user->getUserName(),'Billy66');
    }

    public function testWeCanGetFirstName()
    {
        $user = new User();
        $user->setFirstName('Bill');
        $this->assertEquals($user->getFirstName(),'Bill');
    }

    public function testWeCanGetLastName()
    {
        $user = new User();
        $user->setLastName('Crosby');
        $this->assertEquals($user->getLastName(),'Crosby');
    }


    public function testWeCanGetFirstPassword()
    {
        $user = new User();
        $user->setFirstPassword('password');
        $this->assertEquals($user->getFirstPassword(),'password');
    }

    public function testWeCanGetSecondPassword()
    {
        $user = new User();
        $user->setSecondPassword('password');
        $this->assertEquals($user->getSecondPassword(),'password');
    }

    public function testWeCanGetEmail()
    {
        $user = new User();
        $user->setEmail('email@gmail.com');
        $this->assertEquals($user->getEmail(),'email@gmail.com');
    }

    public function testIdIsGenerated()
    {
        $user = new User();
        $user->setId('azerty');
        $this->assertNotEmpty($user->getId());
    }


    public function testUserNameIsNotEmpty()
    {
        $user = new User();
        $user->setUserName('Billy66');
        $this->assertNotEmpty($user->getUserName(),'username is empty');
    }


    public function testFirstNameIsNotEmpty()
    {
        $user = new User();
        $user->setFirstName('Billy');
        $this->assertNotEmpty($user->getFirstName(),'firstname is empty');
    }

    public function testLastNameIsNotEmpty()
    {
        $user = new User();
        $user->setLastName('Billy');
        $this->assertNotEmpty($user->getLastName(),'lastname is empty');
    }

    public function testFirstPasswordIsNotEmpty()
    {
        $user = new User();
        $user->setFirstPassword('password');
        $this->assertNotEmpty($user->getFirstPassword(),'first password is empty');
    }

    public function testSecondPasswordIsNotEmpty()
    {
        $user = new User();
        $user->setSecondPassword('password');
        $this->assertNotEmpty($user->getSecondPassword(),'second password is empty');
    }

    public function testEmailIsNotEmpty()
    {
        $user = new User();
        $user->setEmail('email@gmail.com');
        $this->assertNotEmpty($user->getEmail(),'email is empty');
    }

    public function testBothPasswordsMatch()
    {
        $user = new User();
        $user->setFirstPassword('password');
        $user->setSecondPassword('password');
        $this->assertSame($user->getFirstPassword(),$user->getSecondPassword(),'passwords do not match');
    }







}