<?php

namespace App\Models;

use CodeIgniter\Model;

class WarehouseModel extends Model
{
    protected $table = 'warehouse';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'descrption'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
