<?php
class DBKorisnik extends Tabela{

// ATRIBUTI
public $IDKorisnika; // auto increment u bazi podataka
public $Tip;
public $KorisnickoIme;
public $Sifra;
public $Stari_IDKorisnika; // potrebno zbog izmene

// metode

// ------- konstruktor - uzima se iz klase roditelja - Tabela

// ------- preostale metode

public function UcitajSveKorisnike()
{
		$SQL = "select * from prijava";
		$this->UcitajSvePoUpitu($SQL);
} // kraj metode

public function DaLiPostojiKorisnik($loginusername,$loginpassword)
{
	$postoji="";
	$SQLKorisnik = "SELECT * FROM `".$this->OtvorenaKonekcija->KompletanNazivBazePodataka."`.`prijava` WHERE USERNAME='".$loginusername."' AND PASSWORD='".$loginpassword."'";
    $this->UcitajSvePoUpitu($SQLKorisnik);
	$this->PrebaciKolekcijuUListu($this->Kolekcija);
	if ($this->BrojZapisa>0)
	{
		$postoji="DA";
	}  			
	else 
	{
		$postoji="NE";
	}
	return $postoji;
}



public function DajIDPrijavljenogKorisnika($loginusername,$loginpassword)
{
	$id=0;
	$SQLKorisnik = "SELECT * FROM `".$this->OtvorenaKonekcija->KompletanNazivBazePodataka."`.`prijava` WHERE USERNAME='".$loginusername."' AND PASSWORD='".$loginpassword."'";
    $this->UcitajSvePoUpitu($SQLKorisnik);
	$this->PrebaciKolekcijuUListu($this->Kolekcija);
	if ($this->BrojZapisa>0)
	{
		// postoji zapis
		foreach ($this->ListaZapisa as $VrednostCvoraListe)
		{
			$id=$VrednostCvoraListe[0];
		}
	} 
	// else - ostaje 0

	return $id;
}

public function DajTipPrijavljenogKorisnika($loginusername,$loginpassword)
{
	$id=0;
	$SQLKorisnik = "SELECT * FROM `".$this->OtvorenaKonekcija->KompletanNazivBazePodataka."`.`prijava` WHERE USERNAME='".$loginusername."' AND PASSWORD='".$loginpassword."'";
    $this->UcitajSvePoUpitu($SQLKorisnik);
	$this->PrebaciKolekcijuUListu($this->Kolekcija);
	if ($this->BrojZapisa>0)
	{
		// postoji zapis
		foreach ($this->ListaZapisa as $VrednostCvoraListe)
		{
			$tip=$VrednostCvoraListe[3];
		}
	} 
	// else - ostaje 0

	return $tip;
}    
    
public function DajImePrijavljenogKorisnika($loginusername,$loginpassword)
{
	$korisnik="";
	$SQLKorisnik = "SELECT * FROM `".$this->OtvorenaKonekcija->KompletanNazivBazePodataka."`.`prijava` WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";
    $this->UcitajSvePoUpitu($SQLKorisnik);
	$this->PrebaciKolekcijuUListu($this->Kolekcija);
	if ($this->BrojZapisa>0)
	{
		// postoji zapis
		foreach ($this->ListaZapisa as $VrednostCvoraListe)
		{
			$korisnik=$VrednostCvoraListe[1];
			
		}
	}  			
	else 
	{
		$korisnik='NEPOZNAT KORISNIK';
	}
	return $korisnik;
}
    
public function SnimiNovo()
{
	$AktivanSQLUpit = "";
	$this->IzvrsiAktivanSQLUpit($AktivanSQLUpit);
}

// brisanje 
public function Obrisi()
{
	$AktivanSQLUpit = "DELETE from ";
	$this->IzvrsiAktivanSQLUpit($AktivanSQLUpit);
}

public function ObrisiSve()
{
	$AktivanSQLUpit = "DELETE from ";
	$this->IzvrsiAktivanSQLUpit($AktivanSQLUpit);
}

public function IzmeniVrednostPolja()
{	

	// transformisemo datum u formu pogodnu za insert into 
    //	$DatumskaVrednost=date_create($this->Datum_PoslednjePromene);
    //	$DatumUnosa=date_format($DatumskaVrednost,"Y-m-d");  

	// konacan upit
	$AktivanSQLUpit = "UPDATE  SET " ;
	$this->IzvrsiAktivanSQLUpit($AktivanSQLUpit);
} // kraj metode
} // kraj klase
?>