<?php
class C_Good extends C_Base{

    public function action_index(){
        $this->title .= '::'.M_Good::select_name($_GET['id']);
        $text = M_Good::select_all($_GET['id']);

        $this->content = $this->Template('v/v_good.php', array('text' => $text));
    }
}