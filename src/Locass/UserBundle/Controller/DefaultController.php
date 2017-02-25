<?php

namespace Locass\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locass\BandsBundle\Entity\Bands;
use Locass\OrgaBundle\Entity\Orga;
use Locass\SallesBundle\Entity\Salles;
use Locass\UserBundle\Document\Contacts;
use Locass\OrgaBundle\Document\OrgaDocument;
use Locass\BandsBundle\Document\BandDocument;
use Locass\SallesBundle\Document\SalleDocument;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        // 1 - Redéfinir le role en ROLE_USER ds RegistrationListener.php ok
        // 2 - Présenter la suite du formulaire d'inscription en fonction de getApplication UserBundle
        // 3 - Affecter le ROLE_.. correspondant après event formulaire success (avant enregistrement update)
        // 4 - Enregistrer les data dans les entity correspondantes (Salle, Bands, Orga) + mongoDB
        //          (penser a enregistrer l'id mongoDB dans entity pour les modifs
        // 5 - Rediriger vers la route correspondante à la variable application
        $user = $this->getUser();
        if ($user == null){
            return $this->redirectToRoute('fos_user_security_login');
        }
        else {
            $application = $user->getApplication();
        }



        if ($application == 'AdminAssault'){ // SuperAdministrateur ou administrateur connexion autorisée
            return $this->render('LocassUserBundle:Default:index.html.twig');
        }
        elseif ($application == 'Salles'){ // Gestionnaire de Salles
            if ($user->hasRole('ROLE_SALLE')) {
                return $this->redirectToRoute('locass_salles_homepage');
            };
            $salles = new Salles();
            $form   = $this->createForm('Locass\SallesBundle\Form\SallesType', $salles);

            return $this->render('LocassUserBundle:Default:newsalle.html.twig', array(
                'salles' => $salles,
                'form'   => $form->createView(),
            ));

        }
        elseif ($application == 'Bands'){ // Groupe, Musicien...
            if ($user->hasRole('ROLE_BANDS')) {
                return $this->redirectToRoute('locass_bands_homepage');
            };
            $bands = new Bands();
            $form   = $this->createForm('Locass\BandsBundle\Form\bandsType', $bands);

            return $this->render('LocassUserBundle:Default:newband.html.twig', array(
                'bands' => $bands,
                'form'   => $form->createView(),
            ));
        }
        elseif($application == 'Orga'){ // Organisateur de concerts Assos, Orga, Tourneur, Manager...
            if ($user->hasRole('ROLE_ORGA')) {
                return $this->redirectToRoute('locass_orga_homepage');
            };

            $orga = new Orga();
            $form = $this->createForm('Locass\OrgaBundle\Form\OrgaType', $orga);

            return $this->render('LocassUserBundle:Default:neworga.html.twig', array(
                'orga' => $orga,
                'form' => $form->createView(),
            ));


        }
        else {
            return $this->redirectToRoute('fos_user_security_login');
        }


    }
    public function createsalleAction(Request $request)
    {
        $user = $this->getUser();

        $idUser = $user->getId();

        $emailUser = $user->getEmail();

        $salles = new Salles();
        $contact = new Contacts();
        $salledoc = new SalleDocument();

        $form = $this->createForm('Locass\SallesBundle\Form\SallesType', $salles);
        $form->handleRequest($request);

        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $adresse = $request->request->get('adresse');
        $codepost = $request->request->get('codepost');
        $ville = $request->request->get('ville');
        $phone = $request->request->get('phone');
        $pays = $request->request->get('pays');
        $payscode = $request->request->get('payscode');
        $sallename = $request->request->get('sallename');
        $salleemail = $request->request->get('salleemail');
        $notes = $request->request->get('notes');
        $nbmembers = $request->request->get('nbmembers');
        $lat = $request->request->get('lat');
        $lng = $request->request->get('lng');
        $origine = true;
        $dateinscr = new \DateTime('now');



        if (!empty($prenom)) {
            $em = $this->getDoctrine()->getManager();

            $salles->setIdfosuser($idUser);
            $salles->setNom($nom);
            $salles->setPrenom($prenom);
            $salles->setAdresse($adresse);
            $salles->setCodepost($codepost);
            $salles->setVille($ville);
            $salles->setEmail($emailUser);
            $salles->setPhone($phone);
            $salles->setPays($pays);
            $salles->setPayscode($payscode);
            $salles->setSalle($sallename);
            $salles->setEmailsalle($salleemail);
            $salles->setNotes($notes);
            $salles->setNbmembers($nbmembers);
            $salles->setLattitude($lat);
            $salles->setLongitude($lng);
            $salles->setOrigine($origine);
            $salles->setDateinscr($dateinscr);


            $em->persist($salles);
            $em->flush($salles);

            $contactId = $salles->getId();

            $user->setSalle($salles);
            $em->persist($user);
            $em->flush($user);

            $contact->setIds($idUser);
            $contact->setIdf($contactId);
            $contact->setType("salle");
            $contact->setNom($nom);
            $contact->setPrenom($prenom);
            $contact->setAdresse($adresse);
            $contact->setCodpost($codepost);
            $contact->setVille($ville);
            $contact->setPhone($phone);
            $contact->setEmail($emailUser);
            $contact->setPays($pays);
            $contact->setPayscode($payscode);
            $contact->setSociety($sallename);
            $contact->setEmailsociety($salleemail);
            $contact->setNotes($notes);
            $contact->setNbmembers($nbmembers);
            $contact->setLatitude($lat);
            $contact->setLongitude($lng);
            $contact->setOrigine($origine);

            $salledoc->setIds($idUser);
            $salledoc->setIdf($contactId);
            $salledoc->setNom($nom);
            $salledoc->setPrenom($prenom);
            $salledoc->setAdresse($adresse);
            $salledoc->setCodpost($codepost);
            $salledoc->setVille($ville);
            $salledoc->setPhone($phone);
            $salledoc->setEmail($emailUser);
            $salledoc->setPays($pays);
            $salledoc->setPayscode($payscode);
            $salledoc->setSociety($sallename);
            $salledoc->setEmailsociety($salleemail);
            $salledoc->setNotes($notes);
            $salledoc->setNbmembers($nbmembers);
            $salledoc->setLatitude($lat);
            $salledoc->setLongitude($lng);
            $salledoc->setOrigine($origine);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($contact);
            $dm->persist($salledoc);
            $dm->flush();

            $mongoId = $contact->getId();

            $user->setIdmongo($mongoId);
            $em->persist($user);
            $em->flush($user);

            $userManager = $this->get('fos_user.user_manager');
            $userol = $userManager->findUserBy(['id' => $idUser]);
            $userol->addRole("ROLE_SALLE");
            $userManager->updateUser($userol);

            return $this->redirectToRoute('fos_user_security_logout');
        }
        return $this->render('fos_user_security_logout');
    }
    public function createbandAction(Request $request)
    {
        $user = $this->getUser();

        $idUser = $user->getId();

        $emailUser = $user->getEmail();

        $bands = new Bands();
        $contact = new Contacts();
        $bandDoc = new BandDocument();

        $form = $this->createForm('Locass\BandsBundle\Form\bandsType', $bands);
        $form->handleRequest($request);

        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $adresse = $request->request->get('adresse');
        $codepost = $request->request->get('codepost');
        $ville = $request->request->get('ville');
        $phone = $request->request->get('phone');
        $pays = $request->request->get('pays');
        $payscode = $request->request->get('payscode');
        $bandname = $request->request->get('bandname');
        $bandemail = $request->request->get('bandemail');
        $notes = $request->request->get('notes');
        $nbmembers = $request->request->get('nbmembers');
        $style = $request->request->get('style');
        $lat = $request->request->get('lat');
        $lng = $request->request->get('lng');
        $origine = true;
        $dateinscr = new \DateTime('now');



        if (!empty($prenom)) {
            $em = $this->getDoctrine()->getManager();

            $bands->setIdfosuser($idUser);
            $bands->setNom($nom);
            $bands->setPrenom($prenom);
            $bands->setAdresse($adresse);
            $bands->setCodepost($codepost);
            $bands->setVille($ville);
            $bands->setPhone($phone);
            $bands->setEmail($emailUser);
            $bands->setPays($pays);
            $bands->setPayscode($payscode);
            $bands->setBand($bandname);
            $bands->setEmailband($bandemail);
            $bands->setStyle($style);
            $bands->setNotes($notes);
            $bands->setNbmembers($nbmembers);
            $bands->setLattitude($lat);
            $bands->setLongitude($lng);
            $bands->setOrigine($origine);
            $bands->setDateinscr($dateinscr);


            $em->persist($bands);
            $em->flush($bands);

            $contactId = $bands->getId();

            $user->setBand($bands);
            $em->persist($user);
            $em->flush($user);

            $contact->setIds($idUser);
            $contact->setIdf($contactId);
            $contact->setType("band");
            $contact->setNom($nom);
            $contact->setPrenom($prenom);
            $contact->setAdresse($adresse);
            $contact->setCodpost($codepost);
            $contact->setVille($ville);
            $contact->setPhone($phone);
            $contact->setEmail($emailUser);
            $contact->setPays($pays);
            $contact->setPayscode($payscode);
            $contact->setSociety($bandname);
            $contact->setEmailsociety($bandemail);
            $contact->setStyle($style);
            $contact->setNotes($notes);
            $contact->setNbmembers($nbmembers);
            $contact->setLatitude($lat);
            $contact->setLongitude($lng);
            $contact->setOrigine($origine);

            $bandDoc->setIds($idUser);
            $bandDoc->setIdf($contactId);
            $bandDoc->setNom($nom);
            $bandDoc->setPrenom($prenom);
            $bandDoc->setAdresse($adresse);
            $bandDoc->setCodpost($codepost);
            $bandDoc->setVille($ville);
            $bandDoc->setPhone($phone);
            $bandDoc->setEmail($emailUser);
            $bandDoc->setPays($pays);
            $bandDoc->setPayscode($payscode);
            $bandDoc->setSociety($bandname);
            $bandDoc->setEmailsociety($bandemail);
            $bandDoc->setStyle($style);
            $bandDoc->setNotes($notes);
            $bandDoc->setNbmembers($nbmembers);
            $bandDoc->setLatitude($lat);
            $bandDoc->setLongitude($lng);
            $bandDoc->setOrigine($origine);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($bandDoc);
            $dm->persist($contact);
            $dm->flush();

            $mongoId = $contact->getId();

            $user->setIdmongo($mongoId);
            $em->persist($user);
            $em->flush($user);





            $userManager = $this->get('fos_user.user_manager');
            $userol = $userManager->findUserBy(['id' => $idUser]);
            $userol->addRole("ROLE_BANDS");
            $userManager->updateUser($userol);

            return $this->redirectToRoute('fos_user_security_logout');
        }
        return $this->render('fos_user_security_logout');
    }

    public function createorgaAction(Request $request)
    {
        $user = $this->getUser();

        $idUser = $user->getId();

        $emailUser = $user->getEmail();

        $orga = new Orga();
        $contact = new Contacts();
        $orgaDoc = new OrgaDocument();

        $form = $this->createForm('Locass\OrgaBundle\Form\OrgaType', $orga);
        $form->handleRequest($request);

        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom'); // ok
        $adresse = $request->request->get('adresse'); //ok
        $codepost = $request->request->get('codepost');
        $ville = $request->request->get('ville');
        $phone = $request->request->get('phone');
        $pays = $request->request->get('pays');
        $payscode = $request->request->get('payscode');
        $organame = $request->request->get('organame');
        $orgaemail = $request->request->get('orgaemail');
        $notes = $request->request->get('notes');
        $nbmembers = $request->request->get('nbmembers');
        $lat = $request->request->get('lat');
        $lng = $request->request->get('lng');
        $origine = true;
        $dateinscr = new \DateTime('now');



        if (!empty($prenom)) {
            $em = $this->getDoctrine()->getManager();

            $orga->setIdfosuer($idUser);
            $orga->setNom($nom);
            $orga->setPrenom($prenom);
            $orga->setAdresse($adresse);
            $orga->setCodepost($codepost);
            $orga->setVille($ville);
            $orga->setEmail($emailUser);
            $orga->setPhone($phone);
            $orga->setPays($pays);
            $orga->setPayscode($payscode);
            $orga->setOrga($organame);
            $orga->setEmailorga($orgaemail);
            $orga->setNotes($notes);
            $orga->setNbmembers($nbmembers);
            $orga->setLattitude($lat);
            $orga->setLongitude($lng);
            $orga->setOrigine($origine);
            $orga->setDateinscr($dateinscr);


            $em->persist($orga);
            $em->flush($orga);

            $contactId = $orga->getId();

            $user->setOrga($orga);
            $em->persist($user);
            $em->flush($user);



            $contact->setIds($idUser);
            $contact->setIdf($contactId);
            $contact->setType("orga");
            $contact->setNom($nom);
            $contact->setPrenom($prenom);
            $contact->setAdresse($adresse);
            $contact->setCodpost($codepost);
            $contact->setVille($ville);
            $contact->setPhone($phone);
            $contact->setEmail($emailUser);
            $contact->setPays($pays);
            $contact->setPayscode($payscode);
            $contact->setSociety($organame);
            $contact->setEmailsociety($orgaemail);
            $contact->setNotes($notes);
            $contact->setNbmembers($nbmembers);
            $contact->setLatitude($lat);
            $contact->setLongitude($lng);
            $contact->setOrigine($origine);

            $orgaDoc->setIds($idUser);
            $orgaDoc->setIdf($contactId);
            $orgaDoc->setNom($nom);
            $orgaDoc->setPrenom($prenom);
            $orgaDoc->setAdresse($adresse);
            $orgaDoc->setCodpost($codepost);
            $orgaDoc->setVille($ville);
            $orgaDoc->setPhone($phone);
            $orgaDoc->setEmail($emailUser);
            $orgaDoc->setPays($pays);
            $orgaDoc->setPayscode($payscode);
            $orgaDoc->setSociety($organame);
            $orgaDoc->setEmailsociety($orgaemail);
            $orgaDoc->setNotes($notes);
            $orgaDoc->setNbmembers($nbmembers);
            $orgaDoc->setLatitude($lat);
            $orgaDoc->setLongitude($lng);
            $orgaDoc->setOrigine($origine);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($contact);
            $dm->persist($orgaDoc);
            $dm->flush();

            $mongoId = $contact->getId();

            $user->setIdmongo($mongoId);
            $em->persist($user);
            $em->flush($user);

            $userManager = $this->get('fos_user.user_manager');
            $userol = $userManager->findUserBy(['id' => $idUser]);
            $userol->addRole("ROLE_ORGA");
            $userManager->updateUser($userol);



            return $this->redirectToRoute('fos_user_security_logout');
        }

        return $this->redirectToRoute('fos_user_security_logout');
    }
}
