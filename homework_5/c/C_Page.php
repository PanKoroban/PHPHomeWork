<?php
//
// Конттроллер страницы.
//


class C_Page extends C_Base
{
	//
	// нет конструктора в C_BASE, поэтому убрали конструктор из текущего класса
	//
	
	public function action_index(){
		$this->title .= '::LogIn';
        if ($this->IsPost()){
        $obj = new M_User;
        $text = $obj->auth($_POST['login'],$_POST['pass']);
        }
		$this->content = $this->Template('v/v_auth.php', array('text' => $text));
	}

    public function action_lk(){
        $this->title .= '::LK';
        $text = $_SESSION['name']."'s account.";
        $this->content = $this->Template('v/v_lk.php', array('text' => $text));
    }

    public function action_reg(){
        $this->title .= '::Registration';
        if ($this->IsPost()){
            $text = M_User::reg($_POST['login'], $_POST['pass'], $_POST['name']);
        }
        $this->content = $this->Template('v/v_reg.php', array('text' => $text));
    }

    public function action_logout(){
        $this->title .= '::LogOut';
        if ($this->IsPost()){
            $text = M_User::logout();
        }
        $this->content = $this->Template('v/v_logout.php', array('text' => $text));
    }

}
