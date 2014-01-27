<?php
class Masina
{

    public $culoare;
    public $putere;
    public $locuri;

    public function __construct($culoare, $putere, $locuri)
    {

        $this->culoare = $culoare;
        $this->putere = $putere."cp";
        $this->locuri = $locuri;

    }

    public function changeCuloare($value)
    {

        $this->culoare = $value;

    }

    public function changePutere($value)
    {

        $this->putere = $value."cp";

    }

    public function changeLocuri($value)
    {

        $this->locuri = $value;

    }

    function showAllSpecs()
    {

        echo "Masina are culoarea {$this->culoare}, o putere de {$this->putere} si {$this->locuri} locuri";

    }

}//End Clasa Masina

class MasinaMore extends Masina
{

    protected $rulaj = "150 000 km";
    protected $climatronic = "Da";
    protected $geamuriElectrice = "Nu";

    function showMore()
    {

        echo "Rulaj: ".$this->rulaj."<br/>";
        echo "Climatronic: ".$this->climatronic."<br/>";
        echo "Geamuri Electrice: ".$this->geamuriElectrice."<br/>";

    }

}//End clasa extinsa MasinaMore pentru Masina