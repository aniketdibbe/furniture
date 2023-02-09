<?php

namespace App\Controller;

use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothes;


class ApiController extends FrontendController
{
     /**
     * @param Request $request
     * @return Response
     */
    /**
     * @Route("/apidata"), name="apidata", method={"GET"}) 
     */
    public function ApiAction(Request $request)
    {
        // do some authorization here ...

        $Clothes = new DataObject\Clothes\Listing();

        foreach ($Clothes as $key => $cloth) {
            $data[] = array(
                "gender" => $cloth->getGender(),
                // "description" => $cloth->getText(),
                // "tags" => $cloth->getTags()
            );
        }

        return $this->json(["success" => true, "data" => $data]);
    }
}
