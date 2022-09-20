<?php

	 require('MainFanc.php');
	 $user = new login();

	

?>


  <link rel="stylesheet" href="style.css">

<h1>Welcome <?php $user->authenticate($username,null);?> To your Profile</h1>
<br>



