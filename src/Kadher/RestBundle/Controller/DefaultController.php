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
        $myUser->setPassword(sha1($request->get('password')));

          // Create token
        $token = sha1(uniqid(mt_rand(), true)); // Or whatever you prefer to generate a token
        $myUser->setConfirmationToken($token);
        $userManager->updateUser($myUser);
        $mailer = $this->get('fos_user.mailer');                    
        $mailer->sendConfirmationEmailMessage($myUser);

        return true;
      
    }


    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"POST_CREATE"}
     * )
     */
    public function signInAction(Request $request){


      $user = $this->getDoctrine()->getManager()->getRepository('KadherCigogneBundle:User')->findMyUser1($request->get('email'));
      if($user == null){
        return false;
      }else{
        $encoded_pass = sha1($request->get('mot_de_passe'));
        if($encoded_pass != $user[0]["password"]) {
          return false;
        }else{
                return $user[0];
        }
      }
    }


    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"GET"}
     * )
     */
    public function resetPassDoneAction($email,$pass){
        $user = $this->getDoctrine()->getManager()->getRepository("KadherCigogneBundle:User")->findByEmail($email);
        if($user == null){
          return false;
        }else{
          $user[0]->setPassword(sha1($pass));
          $em = $this->getDoctrine()->getManager();
          $em->persist($user[0]);
          $em->flush();
          return true;
        }
    }
    
    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"GET"}
     * )
     */
    public function resetPassAction($email,$code){

      $user = null;
      $user = $this->getDoctrine()->getManager()->getRepository('KadherCigogneBundle:User')->isEmailExist1($email);
      
      if($user == null){
        return false;
      }else{
          
        
        $from = array('ehuis1@student.iugb.edu.ci' => 'La Cigogne');
        $message = (new \Swift_Message('Nouveau mot de passe'))
        ->setFrom($from)
        ->setTo('ehuis1@student.iugb.edu.ci')
        ->setBody(
            $this->renderView(
                // templates/emails/registration.html.twig
                'email/livraison.html.twig',
                ['code'=>$code]
            ),
            'text/html'
        )
        ;

          $this->get('mailer')->send($message);
        return true;
      }
    }


    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"GET"}
     * )
     */
    public function getAgenceAction($id){
        $agences = $this->getDoctrine()->getManager()->getRepository("KadherCigogneBundle:Agence")->findAgences($id);
        return $agences;
    }
}
