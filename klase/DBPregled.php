<?php
class DBPregled extends Tabela 
{
// ATRIBUTI
private $bazapodataka;
private $UspehKonekcijeNaDBMS;
//

public $IDZUBARA;
public $IDPACIJENTA;
public $DATUM;
public $VREME;
    

// METODE

// konstruktor

public function DodajNoviPregled()
{
	$SQL = "INSERT INTO `pregleda` (IDZubara, IDPacijenta, Datum, Vreme) VALUES ('$this->IDZUBARA', '$this->IDPACIJENTA', '$this->DATUM', 
		'$this->VREME')";
	$greska=$this->IzvrsiAktivanSQLUpit($SQL);
	
	return $greska;
}



}
?>1