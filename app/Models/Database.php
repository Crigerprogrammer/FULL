<?php 

namespace App\Models;

class Database{
    protected $db;

    public function __construct()
    {
        $this->db = new \mysqli('localhost', '2fa', '4vY&Coap*dG9c&R#CL$xa8n3zauHo8', 'twofactor');
    }

    public function __destruct()
    {
        $this->db->close();
    }
}
