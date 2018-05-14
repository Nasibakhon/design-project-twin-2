<?php 
      include 'inc/db.php'; 
       include 'inc/tepa.php'; 
	   
      $id=isset($_GET['id'])?(int) $_GET['id']:0;
	  $que = 'select * from `kitoblar` where `id`='.$id;
      $result = mysqli_query($con, $que);
	  $row=mysqli_fetch_array($result);
?>        
        <div id="templatemo_content_right">
        	<?php
			
            echo '<h1>'.$row['nomi'].' <span>('.$row['mualif'].')</span></h1>
            <div class="image_panel"><img src="screen/'.$row['img'].'" alt="'.$row['nomi'].'" width="100" height="150" /></div>
          <h2>'.$row['nomi'].'</h2>
            <ul>
	            <li>Author: '.$row['mualif'].'</li>
            	<li>Published Year: '.$row['yil'].'</li>
				<li>About:</li>
             </ul>
			 
            <p>'.$row['text'].'</p>
			<div class="buy_now_button"><a href="kitoblar/'.$row['url'].'">Download</a></div>

		    
             <div class="cleaner_with_height">&nbsp;</div>';
		       $query = "UPDATE `kitoblar` SET `read`=`read`+1 WHERE id=".$row['id']."";
			  $natija = mysqli_query($con, $query);

            ?>
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
 <?php include 'inc/past.php'; ?>