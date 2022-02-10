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
        //print_r($text);
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));
    }

    public function action_buy()
    {
        $this->title .= '::Корзина';
        $text = M_Basket::see();
        //print_r($text);
        $i = 0;
        for ($i; $i < count($text); ++$i){
           M_Basket::buy($_GET['name'], $_GET['surname'], $_GET['address'], $text[$i]["goods_id"], $text[$i]["id"]);
        }
        $text = M_Basket::see();
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));
    }


}