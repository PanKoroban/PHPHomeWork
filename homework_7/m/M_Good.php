<?php
class M_Good
{

    static function select_all($id)
    {
        $check = M_PDO::Select('SELECT * FROM goods WHERE id = :id', ['id'=>$id]);
        //print_r($check);
        return $check[0];
    }

    static function select_name($id)
    {
        $check = M_PDO::Select('SELECT name FROM goods WHERE id = :id', ['id'=>$id]);
        return $check[0]['name'];
    }
}