<?php

include_once("../m/M_Catalog.php");
include_once("../m/M_PDO.php");

use PHPUnit\Framework\TestCase;

class create_catalogTest extends TestCase
    /**
     *@dataProvider cartProvider
     */
{

    public function testcreate_catalog($expected)
    {
        $my = is_array(M_Catalog::create_catalog());
        $this->assertEquals($expected, $my);
    }

    public function cartProvider() {
        return [
            [true],
        ];
    }

}