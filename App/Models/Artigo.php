<?php

namespace App\Model;
class Artigo
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fecthAll()
    {
        $query = "SELECT * FROM artigos";
        return $this->db->query($query);
    }
} 