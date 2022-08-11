<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Model\DataObject\Product;
use Symfony\Component\HttpFoundation\Request;

class ContentController extends FrontendController
{

    public function defaultAction(Request $request)
    {
        return [];
    }

    public function productAction(Request $request)
    {
        $products=new Product\Listing();
        $products=$products->getData();


        dd($products);

        return $this->render('content/product.html.twig',['products'=>$products]);
    }


    public function searchAction(Request $request)
    {
        dd($request->query);
        return $this->render('content/search.html.twig');
    }
}
