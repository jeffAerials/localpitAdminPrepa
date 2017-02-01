<?php

namespace Locass\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LocassUserBundle extends Bundle
{
    public function getParent(){
        return "FOSUserBundle";
    }
}
