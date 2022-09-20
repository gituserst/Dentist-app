<?php
class DBLecenje extends Tabela 
{
// ATRIBUTI
private $bazapodataka;
private $UspehKonekcijeNaDBMS;
//


public $IDPacijenta;
public $IDZubara;
public $IDPregleda;
public $NazivLecenja;
public $OpisLecenja;
public $Cena;
    

// METODE

// konstruktor

public function DodajNovoLecenje()
{
	$SQL = "INSERT INTO `lecenje` (IDPacijenta, IDZubara, IDPregleda, NazivLecenja, OpisLecenja, Cena) VALUES ('$this->IDPacijenta', '$this->IDZubara', '$this->IDPregleda', '$this->NazivLecenja','$this->OpisLecenja', '$this->Cena')";
	$greska=$this->IzvrsiAktivanSQLUpit($SQL);
	
	return $greska;
}




}
?>