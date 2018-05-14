<?php
include 'inc/db.php';
 require_once 'function.php';

include 'inc/tepa.php';
 $turi = '';

if(isset($_POST['save'])){
//print_r($_POST);
//exit;
	if($_POST['namee']==''){//adding  post request
    $error= "Please enter the name of the book";
	}


	else {
  $title = mysqli_real_escape_string($con, $_POST['namee']);
         
      $query = "INSERT INTO bolimlar(name) 
            VALUES('".$title."')";
    
    $natija = mysqli_query($con, $query);
    if(!$natija){
      die(mysqli_error($con));
    }
	echo "<script> alert('Information is inserted in the database'); </script>";
 
  }
}
echo '
			<div id="templatemo_content_right">
			<h1>Add type of the book</h1>

';
if(isset($error)) echo '<font color="red">'.$error.'</font>'; 
echo '<form  method="post" action="" enctype="multipart/form-data">
     <b> Add type of the book:</b><br>
      <input type="text" name=\'namee\' class="form-control"
      id="inputEmail3"><br><br>
	  	 <button name="save" type="submit" class="btn btn-success">
        Save
      </button>
</form>
</section>
';



include 'inc/past.php';

