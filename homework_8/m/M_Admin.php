<?php
class M_Admin
{
    static function create_catalog()
    {
        $check = M_PDO::Select('SELECT * FROM goods', []);
        return $check;
    }

    static function change_goods($id, $n, $d, $p)
    {
            M_PDO::update("UPDATE goods SET name=:n,disc=:d,price=:p WHERE id=:id", [':n'=>$n, ':d'=>$d, ':p'=>$p, ':id'=>$id,]);
            Header('Location:index.php?c=admin');

    }

    static function select_goods($id)
    {
        $check = M_PDO::Select('SELECT * FROM goods WHERE id = :id', ['id'=>$id]);
        return $check[0];
    }

    static function new_goods($n, $p, $d)
    {
        M_PDO::insert("INSERT INTO goods(name, disc, category_id, is_activ, price, img_url) VALUES (:n, :d, :c, :i, :p, :img)",
        [':n' => $n, ':d' => $d, ':c' => 1, ':i' => 1, ':p' => $p, ':img' => 'images/test.jpg']);
        header('Location:index.php?c=admin');
    }
    static function del($id)
    {
        M_PDO::delete("DELETE FROM goods WHERE id=:id",[':id'=>$id]);
        header('Location:index.php?c=admin');
    }

    static function create_orders()
    {
        $check[0] = M_PDO::Select('SELECT o.*, g.name as g_name FROM orders o inner join goods g on g.id = o.goods_id where status = 0', []);
        $check[1] = M_PDO::Select('SELECT o.*, g.name as g_name FROM orders o inner join goods g on g.id = o.goods_id where status = 1', []);
        return $check;
    }

    static function deliver($id, $status){
        M_PDO::update("UPDATE orders SET status=:s WHERE id=:id",[':id'=>$id, ':s'=>$status]);
        header('Location:index.php?c=admin&act=orders');
    }


}