<?php

class main_programm extends system_class {

	public function init(){
		
		if(isset($_GET['lang'])){
			$_SESSION['lang'] = $_GET['lang'];
		}
		if((isset($_GET['ajax'])) && ($_GET['ajax'] == "email_check")){
			$this->check_email();
			exit(0);
		}
		if((isset($_GET['action'])) && ($_GET['action'] == "check_login")){
			$this->check_login();
			exit(0);
		}
		if((isset($_GET['action'])) && ($_GET['action'] == "login")){
			$this->make_view("login_form");
			exit(0);
		}
		if((isset($_GET['action'])) && ($_GET['action'] == "set_user_data")){
			$this->set_user_data();
		} else {
			$this->make_view("main_form");
		}
	}

	public function set_user_data(){
		$this->check_post_data();
		$img_link = $this->upload_avatar();	
		$link = $this->connect();
		$_POST['password'] = md5($_POST['password']);
		if(!mysqli_query($link,"INSERT INTO users SET name='".$_POST['name']."',
							last_name='".$_POST['last_name']."',
							phone='".$_POST['phone']."',
							email='".$_POST['email']."',
							password='".$_POST['password']."',
							avatar='".$img_link."'
")) {
		$this->view_output['result'] = "Error";
} else {
		$this->view_output['result'] = "Ok";
}
		$this->disconnect($link);
		$this->view_output['img_link'] = $img_link;
		$this->make_view("finish_form");
	}


	public function upload_avatar(){
		if(isset($_FILES['image']['name'])){
			$file_data = explode(".",$_FILES['image']['name']);
			if(!isset($file_data[1])) {return "/img/default.png";}
			if(($file_data[1] != "jpg") && ($file_data[1] != "png") && ($file_data[1] != gif)){
				exit("Формат файла не поддерживается");
			}
			$file_name = rand(11111,99999).date("is").".".$file_data[1];
			
            	if($_FILES['image']['tmp_name'] == ""){
                	return "/img/default.png";
            	} else {
                	copy($_FILES['image']['tmp_name'],IMG_PATH.$file_name);
			return "/img/".$file_name;
            	}
		}		
	}
	
	public function check_login(){
		$this->check_post_data();
		$_POST['password'] = md5($_POST['password']);
		$link = $this->connect();
		$query = mysqli_query($link,"SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'");
		$result = mysqli_fetch_array($query);
		if(isset($result['name'])){
		$this->view_output = "
		<table>
		<tr>
			<td><img style='width:50px;' src='.".$result['avatar']."'></td>
			<td>".$result['name']." ".$result['last_name']."</td>
		</tr>
		<tr>
			<td>Телефон</td>
			<td>".$result['phone']."</td>
		<tr>
		<tr>
			<td>e-mail</td>
			<td>".$result['email']."</td>
		</tr>
		</table>
		";
		} else {
			$this->view_output = "Введены не верные данные";
		}
		$this->disconnect($link);
		$this->make_view("user_form");
	}

	public function check_email(){
		$this->check_post_data();
		$link = $this->connect();
		$query = mysqli_query($link,"SELECT * FROM users WHERE email='".$_POST['email']."'");
		$result = mysqli_num_rows($query);
		
		if($result <= 0) {
			print "ok";
		} else {
			print "error";
		}
		$this->disconnect($link);
	}
}	
