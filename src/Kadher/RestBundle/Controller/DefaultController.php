<?php

namespace Kadher\RestBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"POST_CREATE"}
     * )
     */
    public function testAction(){
      return true;
    }


    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"GET"}
     * )
     */
    public function verifyNumberAction($number){
      $exist = $this->getDoctrine()->getManager()->getRepository("KadherCigogneBundle:User")->isNumberExist($number);
      if($exist != null)
        return true;
      else 
        return false;
    }


    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"GET"}
     * )
     */
    public function verifyEmailAction($email){
      $exist = $this->getDoctrine()->getManager()->getRepository("KadherCigogneBundle:User")->isEmailExist($email);
      if($exist != null)
        return true;
      else 
        return false;
    }


    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"POST_CREATE"}
     * )
     */
    public function signUpAction(Request $request){
        $userManager = $this->container->get('fos_user.user_manager');
        $myUser = $userManager->createUser();
        $myUser->addRole("ROLE_AGENCE");
        $myUser->setNom($request->get('nom'));
        $myUser->setPrenom($request->get('nom'));
        $myUser->setNumero($request->get('numero'));
        $myUser->setEmail($request->get('email'));
        $myUser->setUsername($request->get('email'));
        $myUser->setEnabled(false);
        $myUser->setPassword($this->container->get('security.encoder_factory')->getEncoder($myUser)->encodePassword($request->get('password'), $myUser->getSalt()));

          // Create token
        $token = sha1(uniqid(mt_rand(), true)); // Or whatever you prefer to generate a token
        $myUser->setConfirmationToken($token);
        $userManager->updateUser($myUser);
        $mailer = $this->get('fos_user.mailer');                    
        $mailer->sendConfirmationEmailMessage($myUser);

        return true;
      
    }
}
