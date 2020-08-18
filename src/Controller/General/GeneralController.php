<?php

namespace App\Controller\General;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\General\Langue;

class GeneralController extends AbstractController{

    /**
     * L'index du site
     */
    public function ClientIndex()
    {
        return $this->render('General/Page/index.html.twig');
    }

    /**
     * L'index de l'administration
     */
    public function AdminIndex()
    {
        return $this->render('General/Admin/Page/index.html.twig');
    }

}

?>