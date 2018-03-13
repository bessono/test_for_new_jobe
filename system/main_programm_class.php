<?php

class main_programm extends system_class {

	public function init(){
		if(!isset($_GET['lang'])){
			$_GET['lang'] = "ru";
		}
		if((isset($_GET['lang'])) && ($_GET['lang'] != "ru") && ($_GET['lang'] != "eng")){
			$_GET['lang'] = "ru";
		}
		if((isset($_GET['action'])) && ($_GET['action'] == "set_user_data")){
			$this->set_user_data();
		} else {
			$this->make_view("main_form_".$_GET['lang']);
		}
	}

	public function set_user_data(){
		$this->check_post_data();
		$img_link = $this->upload_avatar();	
		$link = $this->connect();
		if(!mysqli_query($link,"INSERT INTO users SET name='".$_POST['name']."',
							last_name='".$_POST['last_name']."',
							phone='".$_POST['phone']."',
							email='".$_POST['email']."',
							password='".$_POST['password']."',
							avatar='".$img_link."'
")) {
		$out_result = "Ошибка сохранения";
} else {
		$out_result = "Данные сохранены в базе";
}
		$this->disconnect($link);
	
		$this->make_view("finish_form");
	}


	public function upload_avatar(){
		if(isset($_FILES['image']['name'])){
			$file_data = explode(".",$_FILES['image']['name']);
			if(($file_data[1] != "jpg") && ($file_data[1] != "png") && ($file_data[1] != gif)){
				exit("Формат файла не поддерживается");
			}
			$file_name = rand(11111,99999).date("is").".".$file_data[1];
			
            	if($_FILES['image']['tmp_name'] == ""){
                	return "/img/default.png";
            	} else {
                	copy($_FILES['image']['tmp_name'],IMG_PATH.$file_name);
			return $file_name;
            	}
		}		
	}
}	
