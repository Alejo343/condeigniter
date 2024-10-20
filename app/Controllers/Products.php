<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Products extends BaseController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new ProductsModel();
        helper('form');
    }

    public function index()
    {
        $productsModels = new ProductsModel();

        $db = db_connect();

        $products = $db->table('products')
            ->select('products.id, products.code, products.name, products.stock, warehouse.name AS warehouse, products.status')
            ->join('warehouse', 'products.id_warehouse = warehouse.id')
            ->get()
            ->getResultArray();

        return view('products/index', ['products' => $products]);
    }

    public function showID($productId)
    {
        $productsModels = new ProductsModel();
        $product = $productsModels->find($productId);

        if (!$product) {
            throw PageNotFoundException::forPageNotFound('El producto no existe');
        }

        $data = ["title" => "Producto " . $product['name'], "product" => $product];

        return view('products/show_id', $data);
    }

    public function create()
    {
        helper('form');
        return view('products/create');
    }

    public function showProd($nameProd, $productId)
    {
        return view('products/show_prod');
    }
}
