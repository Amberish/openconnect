/*class for signup validation*/
ValidateRegistrationForm = Class.create();

ValidateRegistrationForm.prototype = {

	initialize :  function(){
		this.pattern = new Object({
			"username" : "\^([a-zA-Z0-9.]+)\$",
			"fullname" : "\^([a-zA-Z ]+)\$",
			"email" : "\^([a-zA-Z0-9._]+)[@]([a-zA-Z]{3,8})[.](([a-zA-Z]{3,4})|(([a-zA-Z]{2})[.]([a-zA-Z]{2,3})))\$",
			"password"  : "\^([a-zA-Z0-9_!@#$%^&*=]+)\$"
		});
		this.errCount = 0;
	},

	setErr : function(type, field){
		switch(type){
			case "blank":
				this.err = field + " can't be blank!";
				break;
			case "invalid" :
				this.err = field + " is not valid!"
				break;
			default:
				this.err = "";
		}
	},

	getErr : function(){
		return this.err;
	},

	customErr : function(error){
		this.err = error;
	},

	setWelcomeMsg : function(name){
		this.welcomeMsg = "We are pleased to welcome you, " + name + "!";
	},

	getWelcomeMsg : function(name){
		return this.welcomeMsg;
	},

	checkUsername : function(uname){
		var pattern = this.pattern.username;
		if(uname.match(pattern)){
			this.uname = uname;
			return true;
		}else{
			if(uname == ""){
				this.setErr("blank", "Username");
			}else{
				this.setErr("invalid", "Username");	
			}			
			return false;
		}
	},

	checkFullname : function(fname){
		var pattern = this.pattern.fullname;
		if(fname.match(pattern)){
			this.fname = fname;
			this.setWelcomeMsg(fname);
			return true;
		}else{
			if(fname == ""){
				this.setErr("blank", "Fullname");
			}else{
				this.setErr("invalid", "Fullname");	
			}			
			return false;
		}
	},

	checkEmail : function(email){
		var pattern = this.pattern.email;
		if(email.match(pattern)){
			this.email = email;
			return true;
		}else{
			if(email == ""){
				this.setErr("blank", "Email");
			}else{
				this.setErr("invalid", "Email");	
			}			
			return false;
		}
	},

	checkPassword : function(pass){
		var pattern = this.pattern.password;
		if(pass.match(pattern) && pass.length >= 6){
			this.pass = pass;
			return true;
		}else{
			if(pass == ""){
				this.setErr("blank", "Password");
			}else if(pass.length < 6){
				this.customErr("Password should be atleast 6 characters long.");
			}else{
				this.setErr("invalid", "Password");	
			}			
			return false;
		}
	},

	compPass : function(confPass){
		if(this.pass == confPass){
			return true;
		}else{
			this.customErr("Password didn't match!");					
			return false;
		}
	},

	checkTermsCondition : function(){
		if(jQ('#input-terms-and-condition').checked){
			return true;
		}else{
			return false;
		}
	},

	checkField : function(fieldName, fieldValue){
		switch(fieldName){
			case "username" :
						return this.checkUsername(fieldValue);						
			case "fullname" :
						return this.checkFullname(fieldValue);						
			case "email" :
						return this.checkEmail(fieldValue);						
			case "password" : 
						return this.checkPassword(fieldValue);
			case "confirm-password" :
						return this.compPass(fieldValue);
		}
	}
};

function checkSignupElement(regFormObj, field, elObj){
	
		var errClassName = "err-" + field; 
		if(!regFormObj.checkField(field, elObj.val())){		
			if(!jQ('.' + errClassName).length){	
				var el = jQ("<p style='margin: 0px;' class='alert alert-danger " + errClassName + "'><small></small></p>");
				el.find('small').html(regFormObj.getErr());
				elObj.after(el);
			}else if(jQ('.' + errClassName).text() != regFormObj.getErr()){
				jQ('.' + errClassName).find('small').html(regFormObj.getErr());
			}
			regFormObj.errCount++;
		}else{
			if(field == "fullname"){
				if(!jQ('.welcome-msg').length){	
					var el = jQ("<p style='margin: 0px;' class='alert alert-success welcome-msg'><small></small></p>");
					el.find('small').html(regFormObj.getWelcomeMsg());
					elObj.after(el);
				}else if(jQ('.welcome-msg').text() != regFormObj.getWelcomeMsg()){
					jQ('.welcome-msg').find('small').html(regFormObj.getWelcomeMsg());
				}
			}

			jQ('.' + errClassName).remove();

			if(regFormObj.errCount != 0)
				regFormObj.errCount--;
		}
}

/*Validating signup form*/
jQuery(document).ready(function(jQ){	
	
	var regFormObj = new ValidateRegistrationForm();
	var fields = ["username", "fullname", "email", "password", "confirm-password"];

	/*This is for individual element check on blur.*/
	jQ.each(fields, function(index, field){
		jQ('#input-' + field).blur(function(){
			var elObj = jQ(this); /*Current element to inspect.*/
			checkSignupElement(regFormObj, field, elObj);
		});
	});	

	/*When someone tries to submit for without filling details*/
	jQ('#sign-up').click(function(e){
		e.preventDefault();
		console.log(regFormObj.errCount);
		if(regFormObj.errCount == 0){

			var regFormObj2 = new ValidateRegistrationForm();
			jQ.each(fields, function(index, field){
				var elObj = jQ('#input-' + field);
				checkSignupElement(regFormObj2, field, elObj);
			});
			console.log(regFormObj2.errCount);
			if(regFormObj2.errCount == 0){
				jQ('form[name="signup-form"]').submit();	
			}		 	
		}
	});
});




ValidateLoginForm = Class.create();

ValidateLoginForm.prototype = {
	initialize : function(){
		this.errCount = 0;
	},

	setErr : function(error){
		this.err = error;
	},

	getErr : function(){
		return this.err;
	},

	checkUnameEmail : function(fieldValue){
		if(fieldValue != ""){
			this.uname = fieldValue;
			return true;
		}else{
			this.setErr("Username or Email can't be blank!");
			return false;
		}
	},

	checkPassword : function(pass){
		if(pass != ""){
			this.pass = pass;
			return true;
		}else{
			this.setErr("Password can't be blank!");
			return false;
		}
	},

	checkField : function(fieldName, fieldValue){
		switch(fieldName){
			case "username":
				return this.checkUnameEmail(fieldValue);
			case "password":
				return this.checkPassword(fieldValue);
		}
	}
}

function checkSigninElement(signinFormObj, field, elObj){
	var errClassName = "err-" + field; 
	if(!signinFormObj.checkField(field, elObj.val())){		
		if(!jQ('.' + errClassName).length){	
			var el = jQ("<p style='margin: 0px;' class='alert alert-danger " + errClassName + "'><small></small></p>");
			el.find('small').html(signinFormObj.getErr());
			elObj.after(el);
		}else if(jQ('.' + errClassName).text() != signinFormObj.getErr()){
			jQ('.' + errClassName).find('small').html(signinFormObj.getErr());
		}
		signinFormObj.errCount++;
	}else{
		jQ('.' + errClassName).remove();

		if(signinFormObj.errCount != 0)
			signinFormObj.errCount--;
	}
}

jQ(document).ready(function(){
	var signinFields = ["username", "password"];
	var signinFormObj = new ValidateLoginForm();

	/*This is for individual element check on blur.*/
	jQ.each(signinFields, function(index, field){
		jQ('#input-' + field + '-signin').blur(function(){
			var elObj = jQ(this); /*Current element to inspect.*/
			checkSigninElement(signinFormObj, field, elObj);
		});
	});

	jQ('#signin').click(function(e){
		e.preventDefault();				
		jQ.each(signinFields, function(i, field){
			var elObj = jQ("#input-" + field + "-signin");
			checkSigninElement(signinFormObj, field, elObj);
		});
		if(signinFormObj.errCount == 0){
			jQ('form[name="signin-form"]').submit();	
		}	
	});	
});