<?php
include 'inc/db.php';

include 'inc/tepa.php';


$parol=1997;
$ppp=isset($_POST['parol'])?(int) $_POST['parol']:0;
echo '<div id="content" class="clearfix">
	<section id="posts" class="span-15 append-1">

';
if($ppp==$parol){
echo '
			<div id="templatemo_content_right">
	    <h1>  Welcome to the Admin page !!!   </h1>
 ';

echo '

				<a href="add_bolim.php"><font color="#000">Add type</font></a><hr>
				<a href="add_kitob.php"><font color="#000">Add book</font></a><hr>
			

		 

';
}
else 
{
echo '
			<div id="templatemo_content_right">
	    <h1>  Please enter the password   </h1>
';
echo '<form  method="post" action="">
      <input type="password" name=\'parol\' class="form-control"
      id="inputEmail3">
   <br><br>
      <button name="save" type="submit" class="btn btn-success">
        ok
      </button>
</form>
';
}
echo '</section>';


include 'inc/past.php';
?>