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
        //var_dump($text);
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));
    }

    public function action_buy()
    {
        $this->title .= '::Корзина';
        $text = M_Basket::see();
//        print_r($text);
//        echo ($text[1][0]["goods_id"]);
        $i = 0;
        for ($i; $i < count($text); ++$i){
           M_Basket::buy($_GET['name'], $_GET['surname'], $_GET['address'], $text[$i][0]["goods_id"], $text[$i][0]["count"]);
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