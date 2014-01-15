window.fbAsyncInit = function() {
FB.init({
  appId      : '219769758207290',
  status     : true, // check login status
  cookie     : true, // enable cookies to allow the server to access the session
  xfbml      : true  // parse XFBML
});

$('.fa-login').click(function(){
  FB.getLoginStatus(function(response){
    if (response.status === 'connected') {
      // the user is logged in and has authenticated your
      // app, and response.authResponse supplies
      // the user's ID, a valid access token, a signed
      // request, and the time the access token 
      // and signed request each expire
      var uid = response.authResponse.userID;
      var accessToken = response.authResponse.accessToken;
      var signedRequest = response.authResponse.signedRequest;
      
      FB.login(function(response) {
         if (response.authResponse) {
           console.log('Welcome!  Fetching your information.... ');
           FB.api( {
              method: 'fql.query',
              query: 'SELECT name, pic_square, email, username FROM user WHERE uid='+FB.getUserID()
            },
            function(response) {
              //Log.info('API Callback', response);
              $('.fb-info-container').html(
                '<img src="' + response[0].pic_square + '"> ' +
                response[0].name + '<br>'  + response[0].email + response[0].username +
                ' <button class="btn" onclick="FB.logout()">Logout</button>'
              );
              console.log($(response[0]));
            });

         } else {
           console.log('User cancelled login or did not fully authorize.');
         }
      }, {scope: 'email,,user_about_me,user_education_history'});
    } else if (response.status === 'not_authorized') {
      // the user is logged in to Facebook, 
      // but has not authenticated your app
      FB.login(function(response) {
         if (response.authResponse) {
           console.log('Welcome!  Fetching your information.... ');
           FB.api( {
              method: 'fql.query',
              query: 'SELECT name, pic_big, email, username FROM user WHERE uid='+FB.getUserID()
            },
            function(response) {
              //Log.info('API Callback', response);
              $('.fb-info-container').html(
                '<img src="' + response[0].pic_big + '"> ' +
                response[0].name + '<br>'  + response[0].email + response[0].username +
                ' <button class="btn" onclick="FB.logout()">Logout</button>'
              );
              console.log($(response[0]));
            });

         } else {
           console.log('User cancelled login or did not fully authorize.');
         }
      }, {scope: 'email,username'});
    } else {
      // the user isn't logged in to Facebook.
      FB.login(function(response) {
         if (response.authResponse) {
          testAPI();
         } else {
           console.log('User cancelled login or did not fully authorize.');
         }
      });
    }
  });  
});
}
 
function testAPI() {
  console.log('Welcome!  Fetching your information.... ');
  FB.api('/me', function(response) {
    console.log('Good to see you, ' + response.name + '.');
  });
}

