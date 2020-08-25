<?php 

//GINA INDRIANI
class keselamatan

{
	public $a;
	public $b;
	public $c;
	public $d;
	public $e;
	
	public function keselamatan_1()
	{

		return " Human Error (kesalahan manusia).";
	}
	public function keselamatan_2()
	{
		return " tidak memakai alat pelindung diri (APD).";
	}
	public function keselamatan_3()
	{
		return " memjalankan alat tidak sesuai standar oprasional prosedur (S0P).";
	}
	public function keselamatan_4()
	{
		return " kecerobohan dalam bekerja. ";
	}
	public function keselamatan_5()
	{
		return " selalu mengabaikan aspek K3. ";
	}
}



$keselamatan = new keselamatan();
$keselamatan -> a = "Human Error (kesalahan manusia)." ;
$keselamatan -> b = "tidak memakai alat pelindung diri (APD).";
$keselamatan -> c = " memjalankan alat tidak sesuai standar oprasional prosedur (S0P).";
$keselamatan -> d = "kecerobohan dalam bekerja.";
$keselamatan -> e = "selalu mengabaikan aspek K3";

echo "penyebab terjadinya kecelakaan kerja : ";
echo "<br>";
echo "1. " .$keselamatan-> a;
echo "<br>";
echo "2. " . $keselamatan -> b;
echo "<br>";
echo "3. " .  $keselamatan -> c;
echo "<br>";
echo "4. " . $keselamatan -> d;
echo "<br>";
echo "5. " . $keselamatan -> e;
echo "<br>";







?>