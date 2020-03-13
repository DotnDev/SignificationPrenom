<?php


namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{

    /**
     * @Route("/", name="test")
     */


    public function index()
    {

        $users = $this -> getDoctrine()-> getRepository(User::class) -> FindAll();


        return  $this -> render('index.html.twig', array ('users' => $users));

    }

}