<?php

namespace App\Models;

final class MaterialsUnit
{
    public $nazwa;
    public $skrot;

    public function setMaterialsUnitName($nazwa){
      $this->nazwa = $nazwa;
    }
    public function getMaterialsUnitName(){
      return $this->nazwa;
    }

    public function setMaterialsUnitSkrot($skrot){
      $this->skrot = $skrot;
    }
    public function getMaterialsUnitSkrot(){
      return $this->skrot;
    }

}
