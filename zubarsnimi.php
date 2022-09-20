 <?php

session_start();

  $ImeZubara=$_POST['ImeZubara'];
  $PrezimeZubara=$_POST['PrezimeZubara'];
  $Specijalizacija=$_POST['Specijalizacija'];
  $TelefonZubara=$_POST['TelefonZubara'];
  $Email=$_POST['Email'];
 

      //KONEKCIJA KA SERVERU

// koristimo klasu za poziv procedure za konekciju
require "klase/BaznaKonekcija.php";
require "klase/BaznaTabela.php";
$KonekcijaObject = new Konekcija('klase/BaznaParametriKonekcije.xml');
$KonekcijaObject->connect();
if ($KonekcijaObject->konekcijaDB) // uspesno realizovana konekcija ka DBMS i bazi podataka
    {
require "klase/DBStomatolog.php";

$ZubarObject = new DBStomatolog($KonekcijaObject, 'zubar');
$ZubarObject->ImeZubara=$ImeZubara;
$ZubarObject->PrezimeZubara=$PrezimeZubara;
$ZubarObject->Specijalizacija=$Specijalizacija;
$ZubarObject->TelefonZubara=$TelefonZubara;
$ZubarObject->Email=$Email;
$greska=$ZubarObject->DodajNovogZubara();
       
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