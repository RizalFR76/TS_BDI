<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenisCuti;

class JenisCutiController extends BaseController
{
    public $jeniscuti;
    public function __construct()
    {
        $this->jeniscuti= new JenisCuti();
    }
    public function index()
    {
        //
        $data = $this->jeniscuti-> findAll();
        // dd($data);
        return view('jeniscuti/index.php', compact('data'));

    }
}
