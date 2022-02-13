<?php
include_once ("../m/M_Basket.php");
include_once ("../m/M_PDO.php");
use PHPUnit\Framework\TestCase;
class createcatalogTest extends TestCase {

    public function testsee()
    {
        $my = M_Basket::see();
        $this->assertEquals(NULL, $my);
    }

}

