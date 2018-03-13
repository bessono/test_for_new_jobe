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
	if(jQuery("#phone").val() === "") { jQuery("#phone_error").slideDown(); return 0;}
        if(jQuery("#email").val() === "") { jQuery("#email_error").slideDown(); return 0;}
	jQuery("#password_panel").slideDown();
	jQuery("#contacts_panel").slideUp();
}
