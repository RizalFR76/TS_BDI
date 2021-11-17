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
    public function tambah()
    {
        return view('menu/tambah_menu.php');
    }

    public function tambah_menu()
    {
        $this->menu->insert([
            'nama' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis'),
            'harga' => $this->request->getPost('harga'),
            'penyajian' => $this->request->getPost('penyajian'),
        ]);
        return redirect('menu')->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $data = $this->menu->find($id);
        // dd($data);
        return view('menu/edit_menu.php',compact('data'));
    }
    public function updateMenu($id)
    {
        $this->menu->update($id,[
            'nama' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis'),
            'harga' => $this->request->getPost('harga'),
            'penyajian' => $this->request->getPost('penyajian'),
        ]);
        return redirect('menu')->with('success', 'Data Update Successfully');
    }
    public function deleteMenu($id){

        $this->menu->delete($id);

        return redirect('menu')->with('success', 'Data deleted Successfully');
    }
}
