<?php
class C_Admin extends C_Base
{

    public function action_index()
    {
        $this->title .= '::Управление товарами';
        $text = M_Admin::create_catalog();
        $this->content = $this->Template('v/v_admin.php', array('text' => $text));
    }

    public function action_change()
    {
        $text = M_Admin::select_goods($_GET['id']);
        $this->title .= '::Измененеи товара';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!$_POST['name']){
                $name = $text['name'];
            } else $name = strip_tags($_POST['name']);
            if(!$_POST['disc']){
                $disc = $text['disc'];
            } else $disc = strip_tags($_POST['disc']);
            if(!$_POST['price']){
                $price = $text['price'];
            } else $price = strip_tags($_POST['price']);
        M_Admin::change_goods($_GET['id'], $name, $disc, $price);
        }
        $this->content = $this->Template('v/v_admin_good.php', array('text' => $text));
    }
    public function action_new()
    {
        $this->title .= '::Создание товара';
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $n = strip_tags($_POST['name']); $d = strip_tags($_POST['disc']); $p = strip_tags($_POST['price']);
            M_Admin::new_goods($n,$p,$d);
        }
        $this->content = $this->Template('v/v_admin_new.php', array());
    }
    public function action_del(){
        M_Admin::del($_GET['id']);
    }

    public function action_orders(){
        $res = M_Admin::create_orders();
        $this->content = $this->Template('v/v_admin_orders.php', array('res'=> $res[0], 'deliv' => $res[1]));
    }

    public function action_deliver(){
        M_Admin::deliver($_GET['id'], 1);
    }
    public function action_finish(){
        M_Admin::deliver($_GET['id'], 2);
    }


}