<?php

namespace App;

final class MaterialsGroup
{
    public $nazwa;
    public $skrot;

    function __construct($nazwa, $skrot)
    {
        $this->nazwa = $nazwa;
        $this->skrot = $skrot;

    }


}
