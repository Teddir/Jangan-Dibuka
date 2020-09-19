<?php
class baju 
{
    public $warna,
           $ukuran;
    
    public function __construct($warno, $ukur)
    {
        $this->warna = $warno;
        $this->ukuran = $ukur;
    }

    public function __destruct()
    {
        echo "baju q berwarna ".$this->warna. "ukuran". $this->ukuran;
    }
}
$baj = new baju("merah", "XL");