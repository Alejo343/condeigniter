<?php

namespace App\Controllers;

class Products extends BaseController
{

    public function index()
    {
        echo '<h1>Products</h1>';
        //echo sesi
        //print this session json
        print_r($this->session);
    }

    //show
    public function showID($productId)
    {
        // echo '<h2>Product ID: ' . $productId . '</h2>';
        return view('show_id');
    }
    public function showProd($nameProd, $productId)
    {
        // echo '<h1>Producto: ' . $nameProd . '</h1>';
        // echo '<h2>ID Producto: ' . $productId . '</h2>';
        return view('products/show_prod');
    }
}
