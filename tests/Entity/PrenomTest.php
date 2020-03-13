<?php


namespace App\Tests\Entity;

use App\Entity\Prenom;
use PHPUnit\Framework\TestCase;


class PrenomTest extends TestCase
{

    public function testSettingLength()
    {
        $prenom = new Prenom('Pierre',6);

        $this->assertSame(6,$prenom->getLength());
    }

    public function testThatPrenomExists()
    {
        $this->assertTrue(true);
    }

    public function testReturnDescriptionOfPrenom()
    {
        $prenom = new Prenom('Pierre',6,' est un prénom');
        $this->assertSame(' est un prénom',$prenom->getDescription());


    }

    public function testReturnFullSpecOfPrenom()
    {
        $prenom = new Prenom('Pierre',6,'est un prénom');
        $this->assertSame('Pierre est un prénom à 6 caractères',$prenom->getSpecification());

    }


   /* public function testReturnLengthOfPrenom()
    {
        $prenom = new Prenom();

    }

  */

}