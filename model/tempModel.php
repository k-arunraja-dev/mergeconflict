<?php

namespace App\Models;

use CodeIgniter\Model;

class TempModel extends Model
{
    public function add_cont($ffdb, $data)
    {
        $sql = $ffdb->table('tbl_master')
                ->insert($data);
        return $sql;
    }
}    