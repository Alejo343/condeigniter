<?php

namespace App\Controllers;

use App\Models\WarehouseModel;

class Warehouses extends BaseController
{
    public function index()
    {
        $warehousemodel = new WarehouseModel();
        $data['warehouses'] = $warehousemodel->findAll();

        return view('warehouses/index', $data);
    }
}
