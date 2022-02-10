<?php
class M_Basket
{
    static function add($id)
    {
        //$check = M_PDO::Select('SELECT * FROM goods WHERE id = :id', ['id'=>$id]);
        $sid= session_id();
        M_PDO::insert("INSERT INTO basket(session_id, goods_id, status) VALUES (:sid, :id, 1)", [':id'=> $id, ':sid'=>$sid]);
    }

    static function see(){
        $sid= session_id();
        $check = M_PDO::Select('SELECT b.id, name, price, goods_id FROM basket b inner join goods g on b.goods_id = g.id where session_id = :sid and status = 1', [':sid'=>$sid]);
        return $check;
    }

    static function buy($n,$s,$a,$g,$id){
        M_PDO::insert("INSERT INTO orders(name, surname, address, goods_id) VALUES (:name, :surname, :address, :goods_id)",
            [':name'=> $n, ':surname'=>$s, ':address'=>$a, ':goods_id'=>$g]);
        M_PDO::update('UPDATE basket SET status=2 WHERE id = :id', [':id'=>$id]);

    }


}