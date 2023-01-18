<?php

namespace App\Controllers;

use App\Models\Kampus;
use App\Models\Learners;

class Registrasi extends BaseController
{

  function __construct()
  {
    $this->validation = \Config\Services::validation();
  }

  public function index()
  {
    $data = [
      "page_title" => "Kampus Bersama"
    ];
    return view('front_page', $data);
  }

  function registrasi_learner()
  {
    $config = [
      'inputNamaMahasiswa' => [
        'label' => 'Nama Lengkap',
        'rules' => 'required'
      ],
      'inputEmailMahasiswa' => [
        'label' => 'Email',
        'rules' => 'required|valid_email|is_unique[user_learner.email]',
        'errors' => ['is_unique' => '{field} Sudah terdaftar']
      ],
      'inputPhoneMahasiswa' => [
        'label' => 'Telp/HP',
        'rules' => 'required|numeric|is_unique[user_learner.telp]',
        'errors' => ['is_unique' => '{field} Sudah terdaftar']
      ],
      'inputPasswordMahasiswa' => [
        'label' => 'Password',
        'rules' => 'required',
      ],
      'ulangiPasswordMahasiswa' => [
        'label' => 'Konfirmasi Password',
        'rules' => 'required|matches[inputPasswordMahasiswa]'
      ],
      'inputAlamatMahasiswa' => [
        'label' => 'Alamat',
        'rules' => 'required',
      ],
      'inputProvinsiMahasiswa' => [
        'label' => 'Provinsi',
        'rules' => 'required',
      ],
      'inputKabupatenMahasiswa' => [
        'label' => 'Kabupaten',
        'rules' => 'required',
      ],
      'inputKecamatanMahasiswa' => [
        'label' => 'Kecamatan',
        'rules' => 'required',
      ],
      'inputZipMahasiswa' => [
        'label' => 'Kode Pos',
        'rules' => 'required|numeric'
      ],
    ];
    $this->validation->setRules($config);
    if (!$this->validation->withRequest($this->request)->run()) {
      $notempty = array();
      foreach ($_POST as $name => $val) {
        if (!empty($val)) {
          if (in_array($name, ["inputPhoneMahasiswa", "inputZipMahasiswa"])) {
            if (is_numeric($val)) {
              array_push($notempty, $name);
            }
          } else {
            array_push($notempty, $name);
          }
        }
      }
      $data['notempty'] = $notempty;
      $data['validation'] = $this->validation->getErrors();
    } else {
      $input = array(
        'nama' => $_POST['inputNamaMahasiswa'],
        'email' => $_POST['inputEmailMahasiswa'],
        'telp' => $_POST['inputPhoneMahasiswa'],
        'password' => password_hash($_POST['inputPasswordMahasiswa'], PASSWORD_BCRYPT),
        'role' => 'LEARNER',
        'alamat_detail' => $_POST['inputAlamatMahasiswa'],
        'alamat_kecamatan' => $_POST['inputKecamatanMahasiswa'],
        'alamat_kabupaten' => $_POST['inputKabupatenMahasiswa'],
        'alamat_provinsi' => $_POST['inputProvinsiMahasiswa'],
        'kode_pos' => $_POST['inputZipMahasiswa'],
        'verifikasi' => 0
      );
      $mlearner = new Learners();
      $data['insert'] = $mlearner->save($input);
      if ($data['insert'] == true) {
        $dataUser = $mlearner->where(array('email' => $_POST['inputEmailMahasiswa']))->first();
        session()->set(array(
          'NAMA' => $dataUser['nama'],
          'EMAIL' => $dataUser['email'],
          'ROLE' => "LEARNER",
          'LOGGED_IN' => TRUE
        ));
        $data['login'] = 'accepted';
      }
    }
    echo json_encode($data);
  }

  function registrasi_kampus()
  {
    $config = [
      'inputNamaKampus' => [
        'label' => 'Nama Lengkap',
        'rules' => 'required'
      ],
      'inputEmailKampus' => [
        'label' => 'Email',
        'rules' => 'required|valid_email|is_unique[user_learner.email]',
        'errors' => ['is_unique' => '{field} Sudah terdaftar']
      ],
      'inputPhoneKampus' => [
        'label' => 'Telp/HP',
        'rules' => 'required|numeric|is_unique[user_learner.telp]',
        'errors' => ['is_unique' => '{field} Sudah terdaftar']
      ],
      'inputPasswordKampus' => [
        'label' => 'Password',
        'rules' => 'required',
      ],
      'ulangiPasswordKampus' => [
        'label' => 'Konfirmasi Password',
        'rules' => 'required|matches[inputPasswordKampus]'
      ],
      'inputAlamatKampus' => [
        'label' => 'Alamat',
        'rules' => 'required',
      ],
      'inputProvinsiKampus' => [
        'label' => 'Provinsi',
        'rules' => 'required',
      ],
      'inputKabupatenKampus' => [
        'label' => 'Kabupaten',
        'rules' => 'required',
      ],
      'inputKecamatanKampus' => [
        'label' => 'Kecamatan',
        'rules' => 'required',
      ],
      'inputZipKampus' => [
        'label' => 'Kode Pos',
        'rules' => 'required|numeric'
      ],
    ];
    $this->validation->setRules($config);
    if (!$this->validation->withRequest($this->request)->run()) {
      $notempty = array();
      foreach ($_POST as $name => $val) {
        if (!empty($val)) {
          if (in_array($name, ["inputPhoneKampus", "inputZipKampus"])) {
            if (is_numeric($val)) {
              array_push($notempty, $name);
            }
          } else {
            array_push($notempty, $name);
          }
        }
      }
      $data['notempty'] = $notempty;
      $data['validation'] = $this->validation->getErrors();
    } else {
      $input = array(
        'nama' => $_POST['inputNamaKampus'],
        'email' => $_POST['inputEmailKampus'],
        'telp' => $_POST['inputPhoneKampus'],
        'password' => password_hash($_POST['inputPasswordKampus'], PASSWORD_BCRYPT),
        'role' => 'KAMPUS',
        'alamat_detail' => $_POST['inputAlamatKampus'],
        'alamat_kecamatan' => $_POST['inputKecamatanKampus'],
        'alamat_kabupaten' => $_POST['inputKabupatenKampus'],
        'alamat_provinsi' => $_POST['inputProvinsiKampus'],
        'kode_pos' => $_POST['inputZipKampus'],
        'verifikasi' => 0
      );
      $mkampus = new Kampus();
      $data['insert'] = $mkampus->save($input);
      if ($data['insert'] == true) {
        $dataUser = $mkampus->where(array('email' => $_POST['inputEmailKampus']))->first();
        session()->set(array(
          'NAMA' => $dataUser['nama'],
          'EMAIL' => $dataUser['email'],
          'ROLE' => "KAMPUS",
          'LOGGED_IN' => TRUE
        ));
        $data['login'] = 'accepted';
      }
    }
    echo json_encode($data);
  }
}
