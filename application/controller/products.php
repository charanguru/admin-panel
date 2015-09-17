<?php

/**
 * Created by PhpStorm.
 * User: Charan
 * Date: 9/17/2015
 * Time: 4:58 PM
 */
class Products extends Controller
{
    public function index()
    {
        $products = $this->model->getAllProducts();

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }
}