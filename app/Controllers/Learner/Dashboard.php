<?php

namespace App\Controllers\Learner;

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
            "page_title" => "Dashboard Mahasiswa",
            "session" => $this->session->get()
        ];
        return view('learner/dashboard', $data);
    }
}
