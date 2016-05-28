<?php
namespace content\home;

class view extends \mvc\view
{
	function config()
	{
		$this->include->css          = false;
		// $this->include->css_ermile   = false;
		$this->include->js           = false;
		$this->include->js_main      = false;
	}
}
?>