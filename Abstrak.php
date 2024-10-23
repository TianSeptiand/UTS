<?php
interface Bangundatar {
    public function HitungLuas();
}
class Persegi implements Bangundatar {
    private $sisi;
    public function _construct($sisi){
        $this->sisi = $sisi; 
        }
    
    public function HitungLuas() {
        return pow($this->sisi, 2);
    }
}
class Segitiga implements Bangundatar {
    private $alas;
    private $tinggi;
    public function _construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function HitungLuas(){
        return(0.5 * $this->alas * $this->tinggi);
    }
}
class Lingkaran implements Bangundatar {
    private $luas;
    private $keliling;
    public function _construct($luas, $keliling) {
        $this->luas = $luas;
        $this->keliling = $keliling;
    }
    public function HitungLuas(){
        return(0.6 * $this->luas * $this->keliling);
    }
}
$persegi = new Persegi(4);
echo "Luas Persegi = ".$persegi->HitungLuas()."<br>";
$segitiga = new Segitiga(4,5);
echo "Luas Segitiga = ".$segitiga->HitungLuas()."<br>";
$lingkaran = new Lingkaran(5,6);
echo "Luas Lingkaran = ".$lingkaran->HitungLuas()."<br>";
?>