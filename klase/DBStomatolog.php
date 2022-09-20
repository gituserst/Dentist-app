<?php
class DBStomatolog extends Tabela 
{
// ATRIBUTI
private $bazapodataka;
private $UspehKonekcijeNaDBMS;
//

public $ImeZubara;
public $PrezimeZubara;
public $Specijalizacija;
public $TelefonZubara;
public $Email;
    

// METODE

// konstruktor

public function DodajNovogZubara()
{
	$SQL = "INSERT INTO `zubar` (ImeZubara, PrezimeZubara, Specijalizacija, TelefonZubara, Email) VALUES ('$this->ImeZubara', '$this->PrezimeZubara', '$this->Specijalizacija', '$this->TelefonZubara', '$this->Email',)";
	$greska=$this->IzvrsiAktivanSQLUpit($SQL);
	
	return $greska;
}



}
?>