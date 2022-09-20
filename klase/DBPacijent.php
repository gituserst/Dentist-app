<?php
class DBPacijent extends Tabela 
{
// ATRIBUTI
private $bazapodataka;
private $UspehKonekcijeNaDBMS;
//

public $IMEPACIJENTA;
public $PREZIMEPACIJENTA;
public $DATUMRODJENJA;
public $TELEFONPACIJENTA;
    

// METODE


public function DodajNovogPacijenta()
{
	$SQL = "INSERT INTO `pacijent` (ImePacijenta, PrezimePacijenta, DatumRodjenja, TelefonPacijenta) VALUES ('$this->IMEPACIJENTA', '$this->PREZIMEPACIJENTA', '$this->DATUMRODJENJA', '$this->TELEFONPACIJENTA')";
	$greska=$this->IzvrsiAktivanSQLUpit($SQL);
	
	return $greska;
}





}
?>