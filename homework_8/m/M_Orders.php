<?php
class M_Orders
{
    static function order()
    {
        $sid = session_id();
        $check = M_PDO::Select("SELECT id FROM users WHERE session_id=:s", [':s' => $sid]);

        // будут совпадать session_id у разных пользователей, если используют одно устройство, надо сделать проверку на это и возможность отслеживать покупки не только по s_id.
        if ($check[1]['id']){
            return "Пока не доработана возможность использовать несколько аккаунтов на одном устройстве";
        }
        $res[0] = M_PDO::Select("SELECT * FROM orders o inner join goods g on g.id = o.goods_id where user_id = :uid and status = 0", [':uid' => $check[0]['id']]);
        $res[1] = M_PDO::Select("SELECT * FROM orders o inner join goods g on g.id = o.goods_id where user_id = :uid and status = 1", [':uid' => $check[0]['id']]);
        $res[2] = M_PDO::Select("SELECT * FROM orders o inner join goods g on g.id = o.goods_id where user_id = :uid and status = 2", [':uid' => $check[0]['id']]);
        return $res;
    }
}