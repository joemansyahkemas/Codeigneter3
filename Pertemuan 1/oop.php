<?php 
class kendaraan { 
	var $jumlahRoda; 
	public $warna; 
	public $bahanBakar; 
	public $harga; 
	private $merek; 
	function statusHarga() {
		if ($this->harga > 50000000) $status = 'Mahal'; else $status = 'Murah'; 
		return $status; 
	} 
	function setMerek($x) { 
	 $this->merek = $x; 
    }
    function getMerek(){
        return $this->merek;
    }
	function setHarga($x) {
	 $this->harga = $x;
    }
    function __construct($x,$y){
        $this->merek = $x;
        $this->harga = $y;
    }
}
	$kendaraan1 = new kendaraan('yamaha','1000000'); 
	// $kendaraan1->setMerek('yamaha mio','Scoopy');
	// $kendaraan1->setHarga(300000000);
    // echo $kendaraan1->statusHarga(); 
    echo $kendaraan1->getMerek();
    // echo number_format($kendaraan1->harga);
