<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {


            $user = new User();
            $user->setFirstName('Billy');
            $user->setLastName('Crosby');
            $user->setUserName('Billy66');
            $user->setPassword('password');
            $user->setEmail('email@gmail.com');
            $manager->persist($user);

        $manager->flush();
    }
}
