<?php

namespace App\Models;

use CodeIgniter\Model;

class TempModel extends Model
{
    public function add_cont($ffdb, $data)
    {

        $sql = "Select * From codes where codeid = 'W'";

        $query = $ffdb->query($sql);

        return $query;
    }

    public function update_cont($ffdb)
    {
        $sql = "Update codes set cname = 'Raja' where codeid = '1'";

        $query = $ffdb->query($sql);

        return $query;
    }

    public function select_contInfo($ffdb)
    {
        $sql = "SELECT * FROM tbl_folio_master";

        $query = $ffdb->query($sql);

        return $query;
    }
}    
