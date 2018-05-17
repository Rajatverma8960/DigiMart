<?php
//Include GP config file
include_once 'gpConfig.php';

//Unset token and user data from session
unset($_SESSION['token']);
unset($_SESSION['userData']);

//Reset OAuth access token
$gClient->revokeToken();

//Destroy entire session
//session_destroy();
?>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
<?php
//Redirect to homepage
header("Location:index.php");
?>