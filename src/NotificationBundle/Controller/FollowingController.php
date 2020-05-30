<?php

namespace NotificationBundle\Controller;

use NotificationBundle\Entity\campany;
use NotificationBundle\Entity\Follow;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FollowingController extends Controller
{

  /* public function follow(Candidat $CandidatToFollow)
    {
        /**
         * @var Candidat $currentUser
         */
        /*$currentUser = $this->geCandidat();
        if ($CandidatToFollow->getIdcandidat() != $currentUser->getIdcandidat()) {
            $currentUser->follow($CandidatToFollow);

            $this->getDoctrine()->getManager()->flush();
        }

        return $this->redirectToRoute('micro_post_user', ['username' => $userToFollow->getUsername()]);

    }*/

    public function showfollowAction()
    {
        $follows = $this->getDoctrine()
            ->getRepository('NotificationBundle:Follow')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($follows, 'json');

        $response = new Response($data);


        return $response;
    }

    public function getfollowByidAction(Follow $follow)
    {
        $data = $this->get('jms_serializer')->serialize($follow, 'json');
        $response = new Response($data);

        return $response;
    }

    public function getAllfollowsAction()
    {
        $follows = $this->getDoctrine()
            ->getRepository('NotificationBundle:Follow')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($follows, 'json');

        $response = new Response($data);

        return $response;
    }

    public function addfollowAction(Request $request)
    {

//get content of data sent by ARC(or postman) tools
        $data = $request->getContent();
        //deserialize the data
        dump($follow);
        // die;
        $follow = $this->get('jms_serializer')
            ->deserialize($data, 'NotificationBundle\Entity\Follow', 'json');

        $person =$this->getDoctrine()->getrepository('NotificationBundle:campany')->find(json_decode($data)->idcampany);
        $follow->setIdcampany($person);
        //dump($follow);
       // die;

        // // Get the Doctrine service and manager

        $em = $this->getDoctrine()->getManager();
        // Add our Article to Doctrine so that it can be saved
        $em->persist($follow);
        // Save our Article
        $em->flush();

        return new Response('follow added successfully', 201);


    }

    public function updatefollowAction(Request $request, $id)
    {

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $product = $doctrine
            ->getRepository('NotificationBundle:Follow')
            ->find($id);
        $data = $request->getContent();
        $follow = $this->get('jms_serializer')
            ->deserialize($data, 'NotificationBundle\Entity\Follow', 'json');

        $product->setIdcandidat($follow->getTitle());
        $product->setIdcampany($follow->getContent());
        $manager->persist($product);
        $manager->flush();

        return new JsonResponse(['msg' => 'succes!'], 200);
    }

    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $follow = $em->getRepository('NotificationBundle:Follow')
            ->find($id);
        $em->remove($follow);
        $em->flush();

        return new JsonResponse(['msg' => 'deleted with succes!'], 200);
    }


}
