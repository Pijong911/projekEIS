<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Coba extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Dicoba",
            "name" => "Hafiz"
        ];

        echo view('index', $data);
    }
}
