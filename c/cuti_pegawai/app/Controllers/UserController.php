<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public $user;
    public function __construct()
    {
        $this->user= new User();
    }
    public function index()
    {
        //
        $data = $this->user-> findAll();
        // dd($data);
        return view('user/index.php',compact('data'));

    }
}
