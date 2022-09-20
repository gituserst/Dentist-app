 <?php

session_start();

  $IDZubara=$_POST['IDZubara'];
  $IDPacijenta=$_POST['IDPacijenta'];
  $Datum=$_POST['Datum'];
  $Vreme=$_POST['Vreme'];
 

      //KONEKCIJA KA SERVERU

// koristimo klasu za poziv procedure za konekciju
require "klase/BaznaKonekcija.php";
require "klase/BaznaTabela.php";
$KonekcijaObject = new Konekcija('klase/BaznaParametriKonekcije.xml');
$KonekcijaObject->connect();
if ($KonekcijaObject->konekcijaDB) // uspesno realizovana konekcija ka DBMS i bazi podataka
    {
require "klase/DBPregled.php";

$PregledObject = new DBPregled($KonekcijaObject, 'pregleda');
$PregledObject->IDZUBARA=$IDZubara;
$PregledObject->IDPACIJENTA=$IDPacijenta;
$PregledObject->DATUM=$Datum;
$PregledObject->VREME=$Vreme;
$greska=$PregledObject->DodajNoviPregled();
       
} // od if db selected

      // ZATVARANJE KONEKCIJE KA DBMS
 $KonekcijaObject->disconnect();

// prikaz uspeha aktivnosti

if ($greska) {
echo "Greska $greska";
     }
else
{

header ('Location:index.php');
}

 
?>