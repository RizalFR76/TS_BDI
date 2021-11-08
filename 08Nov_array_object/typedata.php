<?php
class mahasiswa {
    // properties
    public $nama;
    public $nim;
    // method 1
    public function set_nama ($nama = 'NULL'){
        $this->nama = $nama;
    }
    public function set_nim ($nim = 'NILL'){
        $this->nim = $nim;
    }
    // method 2
    public function get_nama (){
        return $this->nama;
    }
    public function get_data (){
        return $this->nama;
        return $this->nim;
    }
}
?>