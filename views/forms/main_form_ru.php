<div class="main_panel">

	Форма регистрации новых пользователей.<br>
	Укажите ваш язык:
	<select onchange="changeLanguage(this.value)">
		<option value="ru">Русский</option>
		<option value="eng">Английский</option>
	</select>
<!-- ================================================================== -->	
	<div id="name_panel" class="panel">
		<table>
			<tr>
			<td>Укажите ваше Имя:</td>
			<td><input type="text" name="name"></td>
			</tr>
			<tr>                                    			
                        <td>Укажите ваше Отчество:</td>
                        <td><input type="text" name="last_name"></td>
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
			<td><input type="text" name="phone"></td>
			</tr>
			<tr>
                	<td>e-main</td>
                	<td><input type="text" name="phone"></td>
                	</tr>
		</table>
	<div class="buttons_panel">
		<input type="button" value="Назад" onclick="step1();">
		<input type="button" value="Далее" onclick="step3();" >
	</div>
	</div>
<!-- ================================================================== -->

</div>

