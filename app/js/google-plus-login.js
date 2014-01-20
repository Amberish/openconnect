<!-- Place this asynchronous JavaScript just before your </body> tag -->
/*Use jQ in place of $*/
jQuery(document).ready(function(jQ){
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/client:plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

jQ('.btn-google-plus').click(googleButtonCallback);
});


function googleButtonCallback(){
	var parameters = {
						'clientid' : '1041645441787-42ltm6m0eq8ooko3j63olt2b7rq4cl82.apps.googleusercontent.com', 
						'cookiepolicy' : 'single_host_origin', 
						'callback' : 'signinCallback', 
						'requestvisibleactions' : 'http://schemas.google.com/AddActivity', 
						'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email'
					};
	gapi.signin.render(this, parameters);
}





//Callback for signin
function signinCallback(authResult) {
  if (authResult['status']['signed_in']) {
    // Update the app to reflect a signed in user

    // This sample assumes a client object has been created.
	// To learn more about creating a client, check out the starter:
	//  https://developers.google.com/+/quickstart/javascript
	gapi.client.load('plus','v1', function(){
	 var request1 = gapi.client.plus.people.list({
	   'userId': 'me',
	   'collection': 'visible'
	 });
	 var request2 = gapi.client.plus.people.get({
	   'userId': 'me'
	 });
	 request1.execute(function(resp) {
	   console.log('Num people visible:' + resp.totalItems);	   
	 });
	 request2.execute(function(resp) {
	 	jQ('#so-username').val((resp.name.givenName).toString().toLowerCase() + '.' + (resp.name.familyName).toString().toLowerCase() + Math.ceil((Math.random()*10000)));
        jQ('#so-fullname').val(resp.displayName);
        jQ('#so-image-loc').val(resp.image.url);
        jQ('#so-profile-url').val(resp.url);
        jQ('#so-signup-method').val("Google+");

	   console.log('ID: ' + resp.id);
	   /*console.log('Display Name: ' + resp.displayName);
	   console.log(resp.name);
	   console.log('Image URL: ' + resp.image.url);
	   console.log('Profile URL: ' + resp.url);
	   console.log('Email: ' + resp.email);*/
	   gapi.client.load('oauth2', 'v2', function(){
			gapi.client.oauth2.userinfo.get().execute(function(resp){			
				jQ('#so-email').val(resp.email);
				jQ('.form-sending-info').submit();
			});	
		});

	 });	 
	});

	
	
  } else {
    // Update the app to reflect a signed out user
    // Possible error values:
    //   "user_signed_out" - User is signed-out
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatically log in the user
    console.log('Sign-in state: ' + authResult['error']);
  }
}