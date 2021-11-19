<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Cuti;

class CutiController extends BaseController
{
    public $cuti;
    public function __construct()
    {
        $this->cuti= new Cuti();
    }
    public function index()
    {
        //
        $data = $this->cuti-> findAll();
        // dd($data);
        return view('cuti/index.php');

    }
}
