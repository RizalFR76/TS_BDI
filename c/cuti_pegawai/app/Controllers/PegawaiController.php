<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pegawai;

class PegawaiController extends BaseController
{
    public $pegawai;
    public function __construct()
    {
        $this->pegawai= new Pegawai();
    }
    public function index()
    {
        //
        $data = $this->pegawai-> findAll();
        // dd($data);
        return view('pegawai/index.php', compact('data'));

    }
}
