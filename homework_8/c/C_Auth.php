<?php
class C_Auth extends C_Base
{
    const salt = 'asdasdasdas18ssdaaasda';

    public function action_reg()
    {
        $this->title .= '::Регистрация';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = strip_tags($_POST['login']);$sid = session_id();$name = strip_tags($_POST['name']);$surname = strip_tags($_POST['surname']);$address = strip_tags($_POST['address']);
            $pass = md5($self->salt . strip_tags($_POST['pass']));
            $res = M_Auth::reg($name, $surname, $address, $login, $pass, $sid);
        }
        $this->content = $this->Template('v/v_auth.php', array('res' => $res));
    }

    public function action_login()
    {
        $this->title .= '::Авторизация';
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = strip_tags($_POST['login']);
            $pass = md5($self->salt . strip_tags($_POST['pass']));
            $res = M_Auth::login($login, $pass);
        }
        $this->content = $this->Template('v/v_auth.php', array('res' => $res));
    }

    public function action_logout(){
        M_Auth::logout();
    }

}