<form action="./?action=set_user_data" method="post" enctype="multipart/form-data">
<div class="main_panel">
	<div class="panel">
	New user form registration.<br>
	Your language:
	<select onchange="changeLanguage(this.value)">
		<option value="eng">Englesh</option>
		<option value="ru">Russian</option>
	</select>
	</div>
<!-- ================================================================== -->	
	<div id="name_panel" class="panel">
	<a href="./?action=login">I have account</a>
		<table>
			<tr>
			<td>Your first name:</td>
			<td>
			<span class="error_panel" id="name_error">Name please</span><br>		
			<input type="text" id="name" name="name" onkeyup="jQuery('#name_error').slideUp();">
		
			</td>
			</tr>
			<tr>                                    			
                        <td>Your last name:</td>
                        <td>
			<span class="error_panel" id="last_name_error">Name please</span><br>	
			<input type="text" id="last_name" name="last_name" onkeyup="jQuery('#last_name_error').slideUp();"></td>
                        </tr>
		</table>
	<div class="buttons_panel">
		<input type="button" value="Next" onclick="step2();">
	</div>
	</div>
<!-- ================================================================== -->
	<div id="contacts_panel" class="panel" style="display:none;">
		Your contact information
		<table>
			<tr>
			<td>Phone</td>
			<td>
			<span class="error_panel" id="phone_error">is empty</span><br>
			<input type="text" id="phone" name="phone" onkeyup="jQuery('#phone_error').slideUp();"></td>
			</tr>
			<tr>
                	<td>e-main</td>
                	<td>
			<span class="error_panel" id="email_error">e-mail is needet</span><br>
			<input type="text" id="email" name="email" onkeyup="jQuery('#email_error').slideup();"></td>
                	</tr>
		</table>
	<div class="buttons_panel">
		<input type="button" value="Back" onclick="step1();">
		<input type="button" value="Next" onclick="step3();" >
	</div>
	</div>
<!-- ================================================================== -->
	<div id="password_panel" class="panel" style="display:none;">
                Your password
		<table>
		<tr>
		<td>Password:</td>
		<td>
		<span class="error_panel" id="password_error">Password can not be empty</span>
		<input type="password" id="password" name="password" onkeyup="jQuery('#password_error').slideUp();"></td>
		</tr>
		<tr>
		<td>Retype:</td>                      	
		<td><input type="password" id="repassword" name="repassword" onclick="checkPasswords();"></td>
		</tr>
		</table>
	<div class="buttons_panel">
		<input type="button" value="Back" onclick="step2();">
                <input type="button" value="Next" onclick="step4();" >
	</div>
	</div>
<!-- ================================================================== -->
	<div id="avatar_panel" class="panel" style="display:none;">
		Your photo or avatar picture
		<br>
		<img class="avatar" alt="" id="image_preview" src="">
  		<div><input type="file" id="image" name="image" onchange="avatarPreview(jQuery(this)[0]);"></div>
  		<div class="buttons_panel">
    		<input type="button" value="Back" onclick="step3();">
    		<input type="submit" value="Finish">
  		</div>
	</div>

<!-- ================================================================== -->
</div>
</form>

