<?php
// book jadvali uchun funksiyalar

function get_bolim(){
	global $con;
	$query = 'select * from bolimlar order by name';
	$result = mysqli_query($con, $query);
	
	if(!$result){
	  die(mysqli_error($con));
	}

	return $result;
}

function createDropDownAuthors($atr){
	$select = '';
    $author_result = get_bolim();
	$text = "";
	while ($row = mysqli_fetch_array($author_result)) {
    	$select = ($row['id']==$atr) ? 'selected': '';
         $text .= "<option ".$select." value='".$row['id']."'>".$row['name']."</option>";
    }
    return $text;
}
?>