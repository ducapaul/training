<?php
/**
 * Created by PhpStorm.
 * User: Duca
 * Date: 1/27/14
 * Time: 3:49 PM
 */

if(isset($_GET['changeValue']))
{

    $changeValue = true;

}else{

    $changeValue = false;

}

function __autoload($classname)
{

    $filename = "./clase/".$classname.".php";
    include_once($filename);

}

$obiect = new MasinaMore("Rosie","250","5");



//Modificare specificatii in cazul in care este trimisa prin $_GET['changeValue'] valoarea 1
if($changeValue)
{

    $obiect->changeCuloare("Verde");
    $obiect->changePutere("266");
    $obiect->changeLocuri("3");

}//End modificare specificatii


echo "<pre>";

    //Afisare specificatii din obiectul Masina
    echo "<strong>&bull; Afisare specificatii din obiectul Masina</strong><br/><br/>";
    $obiect->showAllSpecs();

    echo "<hr/>";

    //Afisare obiectul MasinaMore care il extinde pe obiectul Masina
    echo "<strong>&bull; MasinaMore Obiect:</strong> <br/><br/> ";
    print_r($obiect);

    echo "<hr/>";

    //Mai multe detalii
    echo "<strong>&bull; Mai multe detalii:</strong> <br/><br/>";
    $obiect->showMore();

echo "</pre>";