<?php

namespace App\Controllers;

use App\Models\Kampus;
use App\Models\Learners;
use App\Models\Manager;

class Auth extends BaseController
{
    function __construct()
    {
        $this->session = session();
    }

    public function login()
    {
        $mlearner = new Learners();
        $mkampus = new Kampus();
        $mmasnager = new Manager();
        $dataLearner = $mlearner->where(array('email' => $_POST['email']))->first();
        $dataKampus = $mkampus->where(array('email' => $_POST['email']))->first();
        $dataManager = $mmasnager->where(array('email' => $_POST['email']))->first();
        if (!empty($dataLearner)) {
            $login_data = $dataLearner;
        } elseif (!empty($dataKampus)) {
            $login_data = $dataKampus;
        } elseif (!empty($dataManager)) {
            $login_data = $dataManager;
        } else {
            $data['error'] = 'Email atau Password Salah';
        }
        if (!empty($login_data)) {
            $verify_pass = password_verify($_POST['password'], $login_data['password']);
            if ($verify_pass) {
                session()->set(array(
                    'NAMA' => $login_data['nama'],
                    'EMAIL' => $login_data['email'],
                    'ROLE' => $login_data['role'],
                    'LOGGED_IN' => TRUE
                ));
                $data['login'] = 'accepted';
            } else {
                $data['error'] = 'Email atau Password Salah';
            }
        } else {
            $data['error'] = 'Email atau Password Salah';
        }
        echo json_encode($data);
    }

    public function logout()
    {
        $array_items = array('NAMA', 'EMAIL', 'ROLE', 'LOGGED_IN');
        $this->session->remove($array_items);
        return redirect()->to(base_url());
    }
}
