<?php

class Mahasiswa {

    //properti
    
    // access modifier; typy property

    public string $nim;
    public string $nama;
    public string $umur;

    // method

    public function setNama(string $a)  {
        $this->nama = $a;
    }

    public function getNama()   {
        return $this->nama;
    }
}

// instance 

$mhsw = new Mahasiswa();

$mhsw->setNama("Budi");

echo $mhsw->getNama();