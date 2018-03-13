<?php

class system_class {

	public function make_view($view_name){
		include("./views/header.php");
		include("./views/forms/".$view_name.".php");
		include("./views/footer.php");
	}

	public function check_post_data(){
		foreach($_POST as $name=>$items){
			$_POST[$name] = strip_tags($_POST[$name]);
			$_POST[$name] = htmlentities($_POST[$name], ENT_QUOTES, "UTF-8");
			$_POST[$name] = htmlspecialchars($_POST[$name], ENT_QUOTES);
		}	
	}

	public function connect(){
		$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		return $link;
	}

	public function disconnect($link){
		mysqli_close($link);
	}

}
