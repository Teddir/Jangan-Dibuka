<?php   //class dalam pengimplemasinya tidak dinamis

class Perpus {
    public $judul,
           $isbn,
           $denda;
    
    public function minjam() {
        $tgl = ("01-12-2020");
        return
        "============================================================"."\n".
        "|WAKTU PEMINJAMAN     | NAMA BUKU       | NO ISBN          |"."\n".
        "============================================================"."\n".
        "TANGGAL = ".$tgl."  | ".$this->judul.  "   | "  .$this->isbn."\n".
        "------------------------------------------------------------"."\n".
        "|          Note = Peminjaman Hanya berlaku 1 hari          |"."\n".
        "------------------------------------------------------------"."\n".
        "============================================================"."\n";
    }

    public function balik() {
        $tgl = ("03-12-2020");
        return
        "============================================================"."\n".
        "|WAKTU PENGEMBALIAN   | NAMA BUKU       | NO ISBN          |"."\n".
        "============================================================"."\n".
        "TANGGAL = ".$tgl."  | ".$this->judul.  "   | "  .$this->isbn."\n".
        "------------------------------------------------------------"."\n".
        "|          Note = Peminjaman Hanya berlaku 1 hari          |"."\n".
        "------------------------------------------------------------"."\n".
        "============================================================"."\n";
    }

    public function denda() {
        return
        "================================================="."\n".
        "|CATATAN PERPUSTAKAAN                         |"."\n".
        "================================================="."\n".
        "-------------------------------------------------"."\n".
        "Denda (TIDAK MENGEMBALIKAN BUKU) :"."\n".
        "-------------------------------------------------"."\n".
        "Lebih 1 satu hari = ".$this->denda."\n".
        "================================================="."\n";
    }
}



class Orang {
    public $nama,
           $Kelas;

    public function orang1(){
        return
        "============================================================"."\n".
        "| PEMINJAM      | NAMA        | KELAS                      |"."\n".
        "============================================================"."\n".
        " NOMER 1        | ".$this->nama.  "       | "  .$this->Kelas."\n".
        "------------------------------------------------------------"."\n".
        "|          Note = Peminjaman Hanya berlaku 1 hari          |"."\n".
        "------------------------------------------------------------"."\n".
        "============================================================"."\n";



    }
    
}
$siswaa = new Orang();
$siswaa->nama = "Rer wahdani";
$siswaa->Kelas = "IX";

$siswaa1 = new Orang();
$siswaa1->nama = "Rerrr dani";
$siswaa1->Kelas = "IX";

$buku = new Perpus();
$buku->judul = "Bhs indonesia";
$buku->isbn = "37218-321-123-1312";

$buku1 = new Perpus();
$buku1->judul = "Bhs inggris";
$buku1->isbn = "3243-23423-23-322-1";

echo $siswaa->orang1();
echo "\n";
echo $buku->minjam();
echo "\n";
echo $buku->balik();

class Perpus {           // pembaharuan
    public $judul,
           $Isbn;

    public function minjam() {
        return
        
        "============================================================"."\n".
        "|TANGGAL             | NAMA BUKU       | NO ISBN          |"."\n".
        "============================================================"."\n".
        "TANGGAL = ".$tgl."  | ".$this->judul.  "   | "  .$this->isbn."\n".
        "TANGGAL = ".$tgl1."  | ".$this->judul1.  "     | "  .$this->isbn1."\n".
        "------------------------------------------------------------"."\n".
        "|          Note = Peminjaman Hanya berlaku 1 hari          |"."\n".
        "------------------------------------------------------------"."\n".
        "============================================================"."\n";
        
    }
    public function balik() {
        $tgl = ("03-12-2020");
        $tgl1 = ("12-98-2020");
        return
        "============================================================"."\n".
        "|WAKTU PENGEMBALIAN   | NAMA BUKU       | NO ISBN          |"."\n".
        "============================================================"."\n".
        "TANGGAL = ".$tgl."  | ".$this->judul.  "   | "  .$this->isbn."\n".
        "TANGGAL = ".$tgl1."  | ".$this->judul1. "     | "  .$this->isbn1."\n".
        "------------------------------------------------------------"."\n".
        "|          Note = Peminjaman Hanya berlaku 1 hari          |"."\n".
        "------------------------------------------------------------"."\n".
        "============================================================"."\n";
    }
    public function denda() {
        return
        "================================================="."\n".
        "|CATATAN PERPUSTAKAAN                         |"."\n".
        "================================================="."\n".
        "-------------------------------------------------"."\n".
        "Denda (TIDAK MENGEMBALIKAN BUKU) :"."\n".
        "-------------------------------------------------"."\n".
        "Lebih 1 satu hari = ".$this->denda."\n".
        "================================================="."\n";
    }
}
class Orang {
    public $nama,
           $Kelas,
           $nama1,
           $Kelas1;
    public function orang1(){
        return
        "============================================================"."\n".
        "| PEMINJAM      | NAMA              | KELAS                |"."\n".
        "============================================================"."\n".
        " NOMER 1        | ".$this->nama.  "       | "  .$this->Kelas."\n".
        " NOMER 2        | ".$this->nama1.  "      | "  .$this->Kelas1."\n".
        "------------------------------------------------------------"."\n".
        "|          Note = Peminjaman Hanya berlaku 1 hari          |"."\n".
        "------------------------------------------------------------"."\n".
        "============================================================"."\n";
    }  
}

$siswaa = new Orang(); $siswaa->nama = "Rer wahdani"; $siswaa->nama1 = "Onigiri waso"; $siswaa->Kelas = "IX"; $siswaa->Kelas1 = "X";
$buku = new Perpus(); $buku->judul = "Bhs indonesia"; $buku->isbn = "37218-321-123-1312"; $buku->judul1 = "Bhs inggris"; $buku->isbn1 = "3243-23423-23-322-1";
echo $siswaa->orang1();
echo "\n";
echo $buku->minjam();
echo "\n";
echo $buku->balik();



