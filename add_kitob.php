<?php
include 'inc/db.php';
 require_once 'function.php';

include 'inc/tepa.php';
 $turi = '';

if(isset($_POST['save'])){
//print_r($_POST);
//exit;
	if($_POST['namee']==''){
    $error= "Please enter name of the book";
	}
	elseif($_POST['textt']==''){
    $error = " Please enter about book";
	}
	elseif($_POST['short']==''){
    $error = " Kitob haqida (qisqacha) to'ldirilmagan!";
	}
	elseif($_POST['yil']==''){
    $error = " Please enter published year of the book";
	}
	elseif($_POST['mu']==''){
    $error = " Please enter author of the book";
	}
	elseif($_POST['tur']==''){
    $error = " Please enter type of the book";
	}


	else {
  $title = mysqli_real_escape_string($con, $_POST['namee']);
  $text = mysqli_real_escape_string($con, $_POST['textt']);
  $short = mysqli_real_escape_string($con, $_POST['short']);
  $tur = (int) $_POST['tur'];
  $yil = mysqli_real_escape_string($con, $_POST['yil']);
  $mu = mysqli_real_escape_string($con, $_POST['mu']);
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $apple = explode(".",$_FILES['imagek']['name']);
      $file_ext=strtolower(end($apple));


	  $errorsk= array();
      $file_namek = $_FILES['imagek']['name'];
      $file_sizek =$_FILES['imagek']['size'];
      $file_tmpk =$_FILES['imagek']['tmp_name'];
      $apple = explode(".",$_FILES['imagek']['name']);
      $file_extk=strtolower(end($apple));

      
      $expensions= array("jpeg","jpg","png");
	  $expensionsk= array("pdf","docx","png");
      
      /*
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Only JPG and PNG files are allowed";
      }
	  if(in_array($file_extk,$expensionsk)=== false){
         $errorsk[]="Only pdf files are allowed";
      }*/
      
      
      if($file_size > 2097152){
         $errors[]='Maximum 2 MB is allowed';
      }
	
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmpk,"kitoblar/".$file_namek);
		 
		 move_uploaded_file($file_tmp,"screen/".$file_name);
		  
         
      $query = "INSERT INTO kitoblar(nomi,mualif,short,text,img,yil,b_id,url) 
            VALUES('".$title."', '".$mu."', '".$short."', '".$text."','".$file_name."', '".$yil."', '".$tur."', '".$file_namek."')";
    
    $natija = mysqli_query($con, $query);
    if(!$natija){
      die(mysqli_error($con));
    }
	echo "<script> alert('Information is inserted in the database'); </script>";
       }
      else{
         print_r($errors);
		 print_r($errorsk);
      }
  
  
     
  }
}
echo '
			<div id="templatemo_content_right">
			<h1>Add book</h1>

';
if(isset($error)) echo '<font color="red">'.$error.'</font>'; 
echo '<form  method="post" action="" enctype="multipart/form-data">
     <b> Name of the book:</b><br>
      <input type="text" name=\'namee\' class="form-control"
      id="inputEmail3"><br><br>
	  <b> Published year:</b><br>
      <input type="number" name=\'yil\' class="form-control"
      id="inputEmail3"><br><br>
	 
	  <b> Author of the book:</b><br>
      <input type="text" name=\'mu\' class="form-control"
      id="inputEmail3"><br><br>
	   <b> About book (shortly):</b><br>
      <input type="text" name=\'short\' class="form-control"
      id="inputEmail3"><br><br>
	 
	 
	  	  <b> About book (in details): </b><br>
     
	  <textarea type="text" name=\'textt\' class="form-control"
      id="inputEmail3"></textarea><br><br>
	  
	  	  <b> Image of the book: </b><br>
	              <input type="file" name="image" /><br>

				  <b> Book: </b><br>
	              <input type="file" name="imagek" />
			<br><br>';
						 	        echo '<select name="tur">
                                   <option value=\'\'>-Choose type of the book-</option>
                                   '.createDropDownAuthors($turi).'</select>
                         		  <br><br>';
                         
			echo '
      <button name="save" type="submit" class="btn btn-success">
        Save
      </button>
</form>
</section>
';



include 'inc/past.php';

