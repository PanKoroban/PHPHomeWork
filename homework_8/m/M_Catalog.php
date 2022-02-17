<?php
class M_Catalog
{


    static function create_catalog()
    {
        $check = M_PDO::Select('SELECT * FROM goods', []);
        return $check;
        }
}

