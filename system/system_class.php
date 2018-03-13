<?php

class system_class {

	public function make_view($view_name){
		include("./views/header.php");
		include("./views/forms/".$view_name.".php");
		include("./views/footer.php");
	}

}
