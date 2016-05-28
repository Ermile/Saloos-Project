<?php
namespace mvc;

class view extends \lib\mvc\view
{
	function _construct()
	{
		// define default value for global

		$this->data->site['title']   = T_("Saloos");
		$this->data->site['desc']    = T_("Free PHP Framework & CMS!");
		$this->data->site['slogan']  = T_("Saloos is a cirsium vulgare for php programmers! :)");

		$this->data->page['desc']    = T_("Saloos is a cirsium vulgare for php programmers! :)");

		// if(! ($this->url('sub') === 'cp' || $this->url('sub') === 'account') )
		// 	$this->url->MainStatic       = false;

		/*
		// add language list for use in display
		$this->global->langlist		= array(
												'fa_IR' => 'فارسی',
												'en_US' => 'English',
												'de_DE' => 'Deutsch'
												);


		// if you need to set a class for body element in html add in this value
		$this->data->bodyclass      = null;
		*/

		if(method_exists($this, 'options')){
			$this->options();
		}
	}
}
?>