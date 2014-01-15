<!-- Place this asynchronous JavaScript just before your </body> tag -->
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/client:plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

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
	   console.log('ID: ' + resp.id);
	   console.log('Display Name: ' + resp.displayName);
	   console.log(resp.name);
	   console.log('Image URL: ' + resp.image.url);
	   console.log('Profile URL: ' + resp.url);
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