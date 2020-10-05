<?php
class perhitungan{
	private $angka1;
	private $angka2;
	// public $hasil;
	function __construct($x, $y){
		$this->angka1 = $x;
		$this->angka2 = $y;			
	}
	function getAngka1(){
		if($this->angka1 > 5){
			return "Data yang ditampikan hanya dibawah 5";
		}else{
			return $this->angka1;
		}
	}
	function getAngka2(){
		return $this->angka2;
	}
	function pengurangan(){
		$hasil = $this->angka1 - $this->angka2;
		return $hasil;
	}
}
$operasi = new perhitungan(51,6);
echo $operasi->pengurangan();