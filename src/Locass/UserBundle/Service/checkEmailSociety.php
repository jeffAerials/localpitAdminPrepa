<?php
/**
 * Created by PhpStorm.
 * User: Jean-François
 * Date: 11/03/2017
 * Time: 14:54
 */

namespace Locass\UserBundle\Service;

use Doctrine\ODM\MongoDB\DocumentManager;
use Locass\UserBundle\Document\Contacts;
use Locass\OrgaBundle\Document\OrgaDocument;
use Locass\BandsBundle\Document\BandDocument;
use Locass\SallesBundle\Document\SalleDocument;


class checkEmailSociety
{

    protected $dm;


    public function __construct(DocumentManager $documentManager)
    {
        $this->dm = $documentManager;

    }

    /**
     * Vérifie si le contact document possède une société principale validée
     *
     * @param string $idmongo
     * @return array
     */
    public function isEmailsocietyenabled ($idmongo)
    {

        $contact = $this->dm->getRepository('LocassUserBundle:Contacts')->find($idmongo);
        $type = $contact->getType();
        $idprinc = $contact->getIdprinc();
        if($type == "orga")
        {
            $society = $this->dm->getRepository('LocassOrgaBundle:OrgaDocument')->find($idprinc);
        }
        elseif ($type == "band")
        {
            $society = $this->dm->getRepository('LocassBandsBundle:BandDocument')->find($idprinc);
        }
        else
        {
            $society = $this->dm->getRepository('LocassSallesBundle:SalleDocument')->find($idprinc);
        }
        $enable = $society->getEnable();
        $name = $society->getSociety();
        $email = $society->getEmailsociety();
        $result = array(
            'enable' => $enable,
            'name'   => $name,
            'email'  => $email
        );

        return $result;
    }
}