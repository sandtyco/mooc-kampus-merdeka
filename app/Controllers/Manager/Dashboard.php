<?php

namespace App\Controllers\Manager;

use CodeIgniter\Controller;


class Dashboard extends Controller
{

    function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        if ($this->session->get('NAMA') == null)  return redirect()->to(base_url());
        $data = [
            "page_title" => "Dashboard Manager",
            "session" => $this->session->get()
        ];
        return view('manager/dashboard', $data);
    }
}
