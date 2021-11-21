<?php
use App\ControlerMaterials;
use App\Models\MaterialsUnit;
use App\Models\Materials;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
  public function testMaterialsUnit(){
    $materialsUnit = new MaterialsUnit;
    $materialsUnit->setMaterialsUnitName('kilogram');
    $materialsUnit->setMaterialsUnitSkrot('kg');
    $this->assertEquals($materialsUnit->getMaterialsUnitName(),'kilogram');
    $this->assertEquals($materialsUnit->getMaterialsUnitSkrot(),'kg');
    // $this->testMaterials($materialsUnit);
    return $materialsUnit;
  }
  public function testMaterials(){
    $materialsUnit = $this->testMaterialsUnit();
    $materials = new Materials;
    $materials->newMaterials('Papier', 'pap', $materialsUnit);
    $this->assertEquals($materials->getMaterialsName(),'Papier');
    $this->assertEquals($materials->getMaterialsKod(),'pap');
    $this->assertEquals($materials->materialsUnit->getMaterialsUnitName(),'kilogram');
    $this->assertEquals($materials->materialsUnit->getMaterialsUnitSkrot(),'kg');
  }
}
