<?php
class tumbuhan {
    // properties
    public $nama;
    public $akar;
    public $daun;
    public $batang;
    public $buah;
    public $bunga;
    public $fotosintesis;
    // method 1
    public function nama ($nama='1null'){
        $this->nama = $nama;
    }

    // method 2
    public function akar ($akar='2null'){
        $this->akar = $akar;
    }

    // method 3
    public function daun ($daun='3null'){
        $this->daun = $daun;
    }

    // method 4
    public function batang ($batang='4null'){
        $this->batang = $batang;
    }

    // method 5
    public function buah ($buah='5null'){
        $this->buah = $buah;
    }

    // method 6
    public function bunga ($bunga='6null'){
        $this->bunga = $bunga;
    }

    // method 7
    public function fotosintesis ($fotosintesis='7null'){
        $this->fotosintesis = $fotosintesis;
        return 'saya suka'. $fotosintesis;
    }

    public function get_data(){
        return[
            'nama'=>$this ->nama,
            'akar'=>$this ->akar,
            'daun'=>$this ->daun ,
            'batang'=>$this ->batang,
            'buah'=>$this ->buah ,
            'bunga'=>$this ->bunga,
            'fotosintesis'=>$this ->fotosintesis,
        ];

        
    }
}
?>