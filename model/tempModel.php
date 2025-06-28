<?php

namespace App\Models;

use CodeIgniter\Model;

class TempModel extends Model
{
    public function add_cont($ffdb, $data)
    {
        $sql = $ffdb->table('tmp_tbl')
                ->insert($data);
        return $sql;
    }
}    