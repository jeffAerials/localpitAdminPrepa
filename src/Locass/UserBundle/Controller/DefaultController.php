<?php

namespace Locass\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locass\BandsBundle\Entity\Bands;
use Locass\BandsBundle\Form\bandsType;
use Locass\OrgaBundle\Entity\Orga;
use Locass\SallesBundle\Entity\Salles;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // 1 - Redéfinir le role en ROLE_USER ds RegistrationListener.php ok
        // 2 - Présenter la suite du formulaire d'inscription en fonction de getApplication UserBundle
        // 3 - Affecter le ROLE_.. correspondant après event formulaire success (avant enregistrement update)
        // 4 - Enregistrer les data dans les entity correspondantes (Salle, Bands, Orga) + mongoDB
        //          (penser a enregistrer l'id mongoDB dans entity pour les modifs
        // 5 - Rediriger vers la route correspondante à la variable application
        $user = $this->getUser();
        $application = $user->getApplication();
        $idUser = $user->getId();

        if ($application == 'AdminAssault'){ // SuperAdministrateur ou administrateur connexion autorisée
            return $this->render('LocassUserBundle:Default:index.html.twig');
        }
        elseif ($application == 'Salles'){ // Gestionnaire de Salles
            $salles = new Salles();
            $form = $this->createForm('Locass\SallesBundle\Form\SallesType', $salles);
            $form->handleRequest($request);

            /**$nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $adresse = $request->request->get('adresse');
            $email = $request->request->get('email');
            $phone = $request->request->get('phone');
            $pays = $request->request->get('pays');
            $band = $request->request->get('band');
            $notes = $request->request->get('notes');
            $style = $request->request->get('style');
            $nbmembers = $request->request->get('nbmembers');
            $origine = $request->request->get('origine');
            $codepost = $request->request->get('codepost');
            $ville = $request->request->get('ville');
            $lattitude = $request->request->get('lattitude');
            $longitude = $request->request->get('longitude');
             **/

            return $this->render('LocassUserBundle:Default:index.html.twig');
        }
        elseif ($application == 'Bands'){ // Groupe, Musicien...
            $bands = new Bands();
            $form = $this->createForm('Locass\BandsBundle\Form\bandsType', $bands);
            $form->handleRequest($request);

            $prenom = $request->request->get('prenom');
            $adresse = $request->request->get('adresse');
            $email = $request->request->get('email');
            $phone = $request->request->get('phone');
            $pays = $request->request->get('pays');
            $band = $request->request->get('band');
            $notes = $request->request->get('notes');
            $style = $request->request->get('style');
            $nbmembers = $request->request->get('nbmembers');
            $origine = $request->request->get('origine');



            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $bands->setIdfosuser($idUser);
                $bands->setPrenom($prenom);
                $bands->setAdresse($adresse);
                $bands->setEmail($email);
                $bands->setPhone($phone);


                $em->persist($bands);
                $em->flush($bands);

                return $this->redirectToRoute('homepage', array('id' => $bands->getId()));
            }
            return $this->render('LocassUserBundle:Default:newband.html.twig', array(
                'bands' => $bands,
                'form' => $form->createView(),
            ));
        }
        elseif($application == 'Orga'){ // Organisateur de concerts Assos, Orga, Tourneur, Manager...
            $orga = new Orga();

            return $this->render('LocassUserBundle:Default:index.html.twig');
        }
        else {
            return $this->redirectToRoute('fos_user_security_login');
        }


    }
}
