 <?php

session_start();

  $ImePacijenta=$_POST['ImePacijenta'];
  $PrezimePacijenta=$_POST['PrezimePacijenta'];
  $DatumRodjenja=$_POST['DatumRodjenja'];
  $TelefonPacijenta=$_POST['TelefonPacijenta'];
 

      //KONEKCIJA KA SERVERU

// koristimo klasu za poziv procedure za konekciju
require "klase/BaznaKonekcija.php";
require "klase/BaznaTabela.php";
$KonekcijaObject = new Konekcija('klase/BaznaParametriKonekcije.xml');
$KonekcijaObject->connect();
if ($KonekcijaObject->konekcijaDB) // uspesno realizovana konekcija ka DBMS i bazi podataka
    {
require "klase/DBPacijent.php";

$PacijentObject = new DBPacijent($KonekcijaObject, 'pacijent');
$PacijentObject->IMEPACIJENTA=$ImePacijenta;
$PacijentObject->PREZIMEPACIJENTA=$PrezimePacijenta;
$PacijentObject->DATUMRODJENJA=$DatumRodjenja;
$PacijentObject->TELEFONPACIJENTA=$TelefonPacijenta;
$greska=$PacijentObject->DodajNovogPacijenta();
       
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