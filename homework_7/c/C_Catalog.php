<?php
class C_Catalog extends C_Base{

    public function action_index(){
        $this->title .= '::Каталог';
        $text = M_Catalog::create_catalog();

        $this->content = $this->Template('v/v_catalog.php', array('text' => $text));
    }
}
