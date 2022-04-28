<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AdType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

class AdController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(PersistenceManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();

        return $this->render('ad/index.html.twig', [
            'ads' => $em->getRepository(Ad::class)->findAll()
        ]);
    }

    #[Route('/ad/watch/{ad}', name: 'single_ad')] 
    public function single(Ad $ad): Response
    {
        return $this->render('ad/single.html.twig', [
            'ad' => $ad
        ]);
    }

    #[Route('/ad/create', name: 'create_ad')]
    public function create(Request $request, PersistenceManagerRegistry $doctrine)
    {
        $ad = new Ad();

        $form = $this->createForm(AdType::class, $ad);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ad = $form->getData();
            $ad->setCreatedAt(new \DateTime('now'));

            $em = $doctrine->getManager();

            $em->persist($ad);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('ad/form.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
