<?php

namespace App\Models;

use CodeIgniter\Model;

class RFQModel extends Model
{
    protected $table      = 'rfq';
    protected $primaryKey = 'no_rfq';
    protected $allowedFields = ['product', 'production_type', 'qty', 'customer_id', 'date_rfq', 'pic'];

    protected $useTimestamps = false;
}
