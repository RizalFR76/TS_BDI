<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Level;

class LevelController extends BaseController
{
    public $level;
    public function __construct()
    {
        $this->level= new Level();
    }
    public function index()
    {
        //
        $data = $this->level-> findAll();
        // dd($data);
        return view('level/index.php', compact('data'));

    }
}
