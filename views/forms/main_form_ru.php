<form action="/?action=set_user_data" method="post" enctype="multipart/form-data">
<div class="main_panel">
	<div class="panel">
	Форма регистрации новых пользователей.<br>
	Укажите ваш язык:
	<select onchange="changeLanguage(this.value)">
		<option value="ru">Русский</option>
		<option value="eng">Английский</option>
	</select>
	</div>
<!-- ================================================================== -->	
	<div id="name_panel" class="panel">
		<table>
			<tr>
			<td>Укажите ваше Имя:</td>
			<td>
			<span class="error_panel" id="name_error">Введите имя</span><br>		
			<input type="text" id="name" name="name" onkeyup="jQuery('#name_error').slideUp();">
		
			</td>
			</tr>
			<tr>                                    			
                        <td>Укажите ваше Отчество:</td>
                        <td>
			<span class="error_panel" id="last_name_error">Введите отчество</span><br>	
			<input type="text" id="last_name" name="last_name" onkeyup="jQuery('#last_name_error').slideUp();"></td>
                        </tr>
		</table>
	<div class="buttons_panel">
		<input type="button" value="Далее" onclick="step2();">
	</div>
	</div>
<!-- ================================================================== -->
	<div id="contacts_panel" class="panel" style="display:none;">
		Укажите контактные данные
		<table>
			<tr>
			<td>Ваш телефон</td>
			<td>
			<span class="error_panel" id="phone_error">Поле телефона пустое</span><br>
			<input type="text" id="phone" name="phone" onkeyup="jQuery('#phone_error').slideUp();"></td>
			</tr>
			<tr>
                	<td>e-main</td>
                	<td>
			<span class="error_panel" id="email_error">e-mail обязателен</span><br>
			<input type="text" id="email" name="email" onkeyup="jQuery('#email_error').slideup();"></td>
                	</tr>
		</table>
	<div class="buttons_panel">
		<input type="button" value="Назад" onclick="step1();">
		<input type="button" value="Далее" onclick="step3();" >
	</div>
	</div>
<!-- ================================================================== -->
	<div id="password_panel" class="panel" style="display:none;">
                Придумайте пароль
		<table>
		<tr>
		<td>Пароль:</td>
		<td>
		<span class="error_panel" id="password_error">Пароль не может быть пустым</span>
		<input type="password" id="password" name="password" onkeyup="jQuery('#password_error').slideUp();"></td>
		</tr>
		<tr>
		<td>Пароль:</td>                      	
		<td><input type="password" id="repassword" name="repassword" onclick="checkPasswords();"></td>
		</tr>
		</table>
	<div class="buttons_panel">
		<input type="button" value="Назад" onclick="step2();">
                <input type="button" value="Далее" onclick="step4();" >
	</div>
	</div>
<!-- ================================================================== -->
	<div id="avatar_panel" class="panel" style="display:none;">
		Загрузите аватар
		<br>
		<img class="avatar" alt="" id="image_preview" src="">
  		<div><input type="file" id="image" name="image" onchange="avatarPreview(jQuery(this)[0]);"></div>
  		<div class="buttons_panel">
    		<input type="button" value="Назад" onclick="step3();">
    		<input type="submit" value="Завершить">
  		</div>
	</div>

<!-- ================================================================== -->
</div>
</form>

