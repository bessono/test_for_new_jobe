<?php

class main_programm extends system_class {

	public function init(){
		if(!isset($_GET['lang'])){
			$_GET['lang'] = "ru";
		}
		if((isset($_GET['lang'])) && ($_GET['lang'] != "ru") && ($_GET['lang'] != "eng")){
			$_GET['lang'] = "ru";
		}
		$this->make_view("main_form_".$_GET['lang']);
	}

		

}
