 <?php

session_start();

  $IDPacijenta=$_POST['IDPacijenta'];
  $IDZubara=$_POST['IDZubara'];
  $IDPregleda=$_POST['IDPregleda'];
  $NazivLecenja=$_POST['NazivLecenja'];
  $OpisLecenja=$_POST['OpisLecenja'];
  $Cena=$_POST['Cena'];
 

      //KONEKCIJA KA SERVERU

// koristimo klasu za poziv procedure za konekciju
require "klase/BaznaKonekcija.php";
require "klase/BaznaTabela.php";
$KonekcijaObject = new Konekcija('klase/BaznaParametriKonekcije.xml');
$KonekcijaObject->connect();
if ($KonekcijaObject->konekcijaDB) // uspesno realizovana konekcija ka DBMS i bazi podataka
    {
require "klase/DBLecenje.php";

$LecenjeObject = new DBLecenje($KonekcijaObject, 'lecenje');
$LecenjeObject->IDPacijenta=$IDPacijenta;
$LecenjeObject->IDZubara=$IDZubara;
$LecenjeObject->IDPregleda=$IDPregleda;
$LecenjeObject->NazivLecenja=$NazivLecenja;
$LecenjeObject->OpisLecenja=$OpisLecenja;
$LecenjeObject->Cena=$Cena;
$greska=$LecenjeObject->DodajNovoLecenje();
       
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