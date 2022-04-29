<?php

namespace App\Controller;

use App\Entity\FlatAdvertisement;
use App\Form\AdType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

class AdController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        return $this->redirectToRoute('admin');
    }

    #[Route('/home', name: 'home')]
    public function index(PersistenceManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();

        return $this->render('ad/index.html.twig', [
            'ads' => $em->getRepository(FlatAdvertisement::class)->findAll()
        ]);
    }

    #[Route('/ad/watch/{ad}', name: 'single_ad')]
    public function single(FlatAdvertisement $ad): Response
    {
        return $this->render('ad/single.html.twig', [
            'ad' => $ad
        ]);
    }

    #[Route('/ad/create', name: 'create_ad')]
    public function create(Request $request, PersistenceManagerRegistry $doctrine)
    {
        $ad = new FlatAdvertisement();

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
