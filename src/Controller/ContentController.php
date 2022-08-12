<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Category;
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

        $categories= new Category\Listing();
        $categories= $categories->getData();

//        dd($products,$categories);

        return $this->render('content/product.html.twig',['products'=>$products,'categories'=>$categories]);
    }


    public function searchAction(Request $request)
    {
        dd($request->query);
        return $this->render('content/search.html.twig');
    }
}
