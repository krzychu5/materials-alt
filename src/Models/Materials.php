<?php

namespace App\Models;
use App\Models\MaterialsUnit;
final class Materials
{
    public $kod;
    public $nazwa;
    public $materialsUnit;
    public $idGroup;

    public function newMaterials($nazwa, $kod, $unit, $idGroup)
    {
      $this->setMaterialsName($nazwa);
      $this->setMaterialsKod($kod);
      $this->setMaterialsIdGroup($idGroup);
      if(!empty($unit) && !is_null($unit->getMaterialsUnitName()) && !is_null($unit->getMaterialsUnitSkrot()))
      {
        $this->materialsUnit = $unit;
      }
    }

    public function setMaterialsName($nazwa)
    {
      $this->nazwa = $nazwa;
    }

    public function getMaterialsName()
    {
      return $this->nazwa;
    }

    public function setMaterialsKod($kod)
    {
      $this->kod = $kod;
    }

    public function getMaterialsKod()
    {
      return $this->kod;
    }
    public function setMaterialsIdGroup()
    {
      return $this->idGroup;
    }
}
