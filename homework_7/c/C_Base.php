<?php
//
// ������� ���������� �����.
//
abstract class C_Base extends C_Controller
{
	protected $title;		// ��������� ��������
	protected $content;		// ���������� ��������
    protected $keyWords;


     protected function before(){
		$this->title = 'Lesson7';
		$this->content = '';
	}
	
	//
	// ��������� �������� ��������
	//	
	public function render()
	{
		$vars = array('title' => $this->title, 'content' => $this->content);
		$page = $this->Template('v/v_main.php', $vars);				
		echo $page;
	}	
}
