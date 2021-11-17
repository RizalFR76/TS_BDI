<?php

namespace App\Controllers;

use App\Models\Menu;
use App\Controllers\BaseController;


class MenuController extends BaseController
{
    public $menu;
    public function __construct()
    {
        $this->menu =new Menu();
    }
    public function index()
    {
        $data = $this->menu->findAll();
        // dd($data);
        return view('menu/index.php',compact('data'));
    }
}
