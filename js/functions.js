function changeLanguage(language){
	location.href = "./?lang="+language;
}

function step2(){
	if(jQuery("#name").val() === "") { jQuery("#name_error").slideDown(); return 0;}
	if(jQuery("#last_name").val() === "") { jQuery("#last_name_error").slideDown(); return 0;}
	jQuery("#name_panel").slideUp();
	jQuery("#contacts_panel").slideDown();
	jQuery("#password_panel").hide();	
}

function step1(){
	jQuery("#name_panel").slideDown();
        jQuery("#contacts_panel").slideUp();
}

function step3(){
	jQuery("#avatar_panel").slideUp();
	if(jQuery("#phone").val() === "") { jQuery("#phone_error").slideDown(); return 0;}
        if(jQuery("#email").val() === "") { jQuery("#email_error").slideDown(); return 0;}
	eMail = jQuery("#email").val();
	if(eMail.indexOf('@') == -1 ){ jQuery("#email_error").slideDown(); return 0;}
	jQuery.post("/?ajax=email_check",{email:eMail},function(data){
		if(data == "ok"){
			jQuery("#password_panel").slideDown();
			jQuery("#contacts_panel").slideUp();
		} else {
			alert("Такой e-mail есть в базе");
		}
	});
}

function step4(){
	if(jQuery("#password").val() === "") { jQuery("#password_error").slideDown(); return 0;}
	if(jQuery("#password").val() === jQuery("#repassword").val()){
		jQuery("#password_panel").slideUp();
		jQuery("#avatar_panel").slideDown();
	} else {
		document.getElementById("password").value = "";
		document.getElementById("repassword").value = "";
		alert("Пароли не совпадают!");
	}
}

function avatarPreview(input){
  if ( input.files && input.files[0] ) {
    if ( input.files[0].type.match('image.*') ) {
      var reader = new FileReader();
      reader.onload = function(e) { $('#image_preview').attr('src', e.target.result); }
      reader.readAsDataURL(input.files[0]);
    } else console.log('is not image mime type');
  } else console.log('not isset files data or files API not supordet');
}

