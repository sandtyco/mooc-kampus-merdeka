<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $data = [
            "page_title" => "Kampus Bersama",
            "session" => $this->session->get()
        ];
        return view('front_page', $data);
    }
}
