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
        $goods = M_PDO::Select("SELECT DISTINCT goods_id from basket where status=1", []); //список товаров со статусом "в корзине"
        $query = "SELECT b.goods_id as goods_id, g.name as name, count(b.id) as count, (count(b.id)*price) as price FROM basket b
            INNER JOIN goods g on b.goods_id = g.id
            WHERE b.status=1 and b.goods_id=:goods_id and session_id=:sid";
        foreach ($goods as $good){
            $check[] = M_PDO::Select($query, ["goods_id" => $good['goods_id'], "sid" => $sid]);
        }
        return $check;
    }

    static function buy($n,$s,$a,$g,$c,$u){
        $sid= session_id();
        M_PDO::insert("INSERT INTO orders(name, surname, address, goods_id, count, user_id) VALUES (:name, :surname, :address, :goods_id, :count, :u)",
            [':name'=> $n, ':surname'=>$s, ':address'=>$a, ':goods_id'=>$g, 'count' => $c, ':u'=> $u]);

        M_PDO::update('UPDATE basket SET status=2 WHERE session_id=:sid and status = 1', [':sid'=>$sid]);

    }

    static function del($id){
        $sid= session_id();
        M_PDO::delete('DELETE FROM basket WHERE session_id = :sid and goods_id = :id and status = 1', [':sid' => $sid, ':id' => $id]);
    }


    static function sub($id){
        $sid= session_id();
        M_PDO::delete('DELETE FROM basket WHERE goods_id=:id and status=1 and session_id=:sid limit 1', [':sid' => $sid, ':id' => $id]);
    }

}