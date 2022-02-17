<?php
class C_Orders extends C_Base
{

    public function action_index()
    {
        $this->title .= '::Мои заказы';
        $res = M_Orders::order();
        $this->content = $this->Template('v/v_orders.php', array('status_0' => $res[0], 'status_1' => $res[1], 'status_2' => $res[2]));
    }
}