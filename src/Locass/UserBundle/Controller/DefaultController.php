<?php

namespace Locass\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
            $idmongo = $user->getIdmongo();
        }



        if ($application == 'AdminAssault'){ // SuperAdministrateur ou administrateur connexion autorisée
            return $this->render('LocassUserBundle:Default:index.html.twig');
        }
        elseif ($application == 'Salles'){ // Gestionnaire de Salles
            if (!is_null($idmongo)) {
                return $this->redirectToRoute('locass_salles_homepage');
            };


            return $this->render('LocassUserBundle:Default:newsalle.html.twig');

        }
        elseif ($application == 'Bands'){ // Groupe, Musicien...
            if (!is_null($idmongo)) {
                return $this->redirectToRoute('locass_bands_homepage');
            };


            return $this->render('LocassUserBundle:Default:newband.html.twig');
        }
        elseif($application == 'Orga'){ // Organisateur de concerts Assos, Orga, Tourneur, Manager...
            if (!is_null($idmongo)) {
                return $this->redirectToRoute('locass_orga_homepage');
            };



            return $this->render('LocassUserBundle:Default:neworga.html.twig');


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

        $username = $user->getUsername();


        $contact = new Contacts();
        $salledoc = new SalleDocument();



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
        $enable = false;
        $dateinscr = new \DateTime('now');

        $random = random_bytes(40);
        $tokenemail = base64_encode($random);

        $somePayload = [
            'lat' => $lat,
            'lon' => $lng
        ];



        if (!empty($prenom)) {
            $em = $this->getDoctrine()->getManager();

            $contact->setIds($idUser);
            $contact->setType("salle");
            $contact->setEmail($emailUser);
            $contact->setUsername($username);
            $contact->setNom($nom);
            $contact->setPrenom($prenom);


            $salledoc->setIds($idUser);
            $salledoc->setAdresse($adresse);
            $salledoc->setCodpost($codepost);
            $salledoc->setVille($ville);
            $salledoc->setPhone($phone);
            $salledoc->setPays($pays);
            $salledoc->setPayscode($payscode);
            $salledoc->setSociety($sallename);
            $salledoc->setEmailsociety($salleemail);
            $salledoc->setConfirmtoken($tokenemail);
            $salledoc->setNotes($notes);
            $salledoc->setNbmembers($nbmembers);
            $salledoc->setEnable($enable);
            $salledoc->setDateinscr($dateinscr);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($contact);
            $dm->persist($salledoc);
            $dm->flush();

            $mongoId = $contact->getId();

            $mongoIdsalleDoc = $salledoc->getId();
            $restClient = $this->container->get('circle.restclient');
            $domainurl = $this->container->getParameter('resturl');

            $restClient->put($domainurl . '/localpitsymf/newsalle/creategeoloc/'.$mongoIdsalleDoc, http_build_query($somePayload));

            $user->setIdmongo($mongoId);
            $em->persist($user);
            $em->flush($user);


            return $this->redirectToRoute('locass_user_homepage');
        }
        return $this->render('fos_user_security_logout');
    }
    public function createbandAction(Request $request)
    {
        $user = $this->getUser();

        $idUser = $user->getId();

        $emailUser = $user->getEmail();

        $username = $user->getUsername();


        $contact = new Contacts();
        $bandDoc = new BandDocument();



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
        $enable = false;
        $dateinscr = new \DateTime('now');

        $random = random_bytes(40);
        $tokenemail = base64_encode($random);



        $somePayload = [
            'lat' => $lat,
            'lon' => $lng
        ];



        if (!empty($prenom)) {
            $em = $this->getDoctrine()->getManager();


            $contact->setIds($idUser);
            $contact->setType("band");
            $contact->setEmail($emailUser);
            $contact->setUsername($username);
            $contact->setNom($nom);
            $contact->setPrenom($prenom);


            $bandDoc->setIds($idUser);
            $bandDoc->setAdresse($adresse);
            $bandDoc->setCodpost($codepost);
            $bandDoc->setVille($ville);
            $bandDoc->setPhone($phone);
            $bandDoc->setPays($pays);
            $bandDoc->setPayscode($payscode);
            $bandDoc->setSociety($bandname);
            $bandDoc->setEmailsociety($bandemail);
            $bandDoc->setConfirmtoken($tokenemail);
            $bandDoc->setStyle($style);
            $bandDoc->setNotes($notes);
            $bandDoc->setNbmembers($nbmembers);
            $bandDoc->setEnable($enable);
            $bandDoc->setDateinscr($dateinscr);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($bandDoc);
            $dm->persist($contact);
            $dm->flush();

            $mongoId = $contact->getId();

            $mongoIdbandDoc = $bandDoc->getId();
            $restClient = $this->container->get('circle.restclient');
            $domainurl = $this->container->getParameter('resturl');

            $restClient->put($domainurl . '/localpitsymf/newband/creategeoloc/'.$mongoIdbandDoc, http_build_query($somePayload));

            $user->setIdmongo($mongoId);
            $em->persist($user);
            $em->flush($user);

            return $this->redirectToRoute('locass_user_homepage');
        }
        return $this->render('fos_user_security_logout');
    }

    public function createorgaAction(Request $request)
    {
        $user = $this->getUser();

        $idUser = $user->getId();

        $emailUser = $user->getEmail();

        $username = $user->getUsername();


        $contact = new Contacts();
        $orgaDoc = new OrgaDocument();



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
        $enable = false;
        $dateinscr = new \DateTime('now');

        $random = random_bytes(40);
        $tokenemail = base64_encode($random);

        $somePayload = [
            'lat' => $lat,
            'lon' => $lng
        ];



        if (!empty($prenom)) {
            $em = $this->getDoctrine()->getManager();

            $contact->setIds($idUser);
            $contact->setType("orga");
            $contact->setEmail($emailUser);
            $contact->setUsername($username);
            $contact->setNom($nom);
            $contact->setPrenom($prenom);


            $orgaDoc->setIds($idUser);
            $orgaDoc->setAdresse($adresse);
            $orgaDoc->setCodpost($codepost);
            $orgaDoc->setVille($ville);
            $orgaDoc->setPhone($phone);
            $orgaDoc->setPays($pays);
            $orgaDoc->setPayscode($payscode);
            $orgaDoc->setSociety($organame);
            $orgaDoc->setEmailsociety($orgaemail);
            $orgaDoc->setConfirmtoken($tokenemail);
            $orgaDoc->setNotes($notes);
            $orgaDoc->setNbmembers($nbmembers);
            $orgaDoc->setEnable($enable);
            $orgaDoc->setDateinscr($dateinscr);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($contact);
            $dm->persist($orgaDoc);
            $dm->flush();

            $mongoId = $contact->getId();

            $mongoIdorgaDoc = $orgaDoc->getId();
            $restClient = $this->container->get('circle.restclient');
            $domainurl = $this->container->getParameter('resturl');

            $restClient->put($domainurl . '/localpitsymf/neworga/creategeoloc/'.$mongoIdorgaDoc, http_build_query($somePayload));


            $user->setIdmongo($mongoId);
            $em->persist($user);
            $em->flush($user);


            return $this->redirectToRoute('locass_user_homepage');
        }

        return $this->redirectToRoute('fos_user_security_logout');
    }
}
