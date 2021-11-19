<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailLevel;

class DetailLevelController extends BaseController
{
    public $detaillevel;
    public function __construct()
    {
        $this->detaillevel= new DetailLevel();
    }
    public function index()
    {
        $data = $this->detaillevel-> findAll();
        // dd($data);
        return view('detaillevel/index.php', compact('data'));
    }
}
