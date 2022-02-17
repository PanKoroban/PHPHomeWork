<?php
class C_Basket extends C_Base
{

    public function action_add()
    {
        $this->title .= '::Корзина';
        $text = M_Good::select_all($_GET['id']);
        M_Basket::add($_GET['id']);
        $text = M_Basket::see();
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));
    }

    public function action_see()
    {
        $this->title .= '::Корзина';
        $text = M_Basket::see();
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));
    }

    public function action_buy()
    {
        $this->title .= '::Корзина';
        $sid = session_id();
        $text = M_Basket::see();
        $i = 0;
        if($_SESSION['auth'] != 1) {
            $n = strip_tags($_GET['name']); $s = strip_tags($_GET['surname']); $a = strip_tags($_GET['address']); $u = NULL;;
        } else {
            $check = M_PDO::Select("SELECT * FROM users WHERE session_id=:sid", [':sid' =>$sid]);
            $n = $check[0]['name']; $s = $check[0]['surname']; $a = $check[0]['address']; $u = $check[0]['id'];
        }
        for ($i; $i < count($text); ++$i){
            M_Basket::buy($n, $s, $a, $text[$i][0]["goods_id"], $text[$i][0]["count"], $u);
        }
        $text = M_Basket::see();
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));
    }

    public function action_del(){
        M_Basket::del($_GET['id']);
        $text = M_Basket::see();
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));
    }

    public function action_sub(){
        M_Basket::sub($_GET['id']);
        $text = M_Basket::see();
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));
    }



}