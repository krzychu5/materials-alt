<?php

namespace App;

final class MaterialsGroup
{
    public $idGroup;
    public $nazwa;
    public $parent;
    public $material;

    public function newGroup($nazwa, $parent, $material){
      $this->nazwa = $nazwa;
      $this->parent = $parent;
      $this->material = $material;
    }

    //odwołał bym sie do bazy u zmmienił to po id/uuid
    public function setGroup($id, $nazwa, $parent, $material){
      $this->nazwa = $nazwa;
      $this->parent = $parent;
      $this->material = $material;
    }
    // zmiana rodzica grupy
    public function setParentGroup($id, $parent){
      $this->parent = $parent;
    }



}
