
<?php 
      include 'inc/db.php'; 
      include 'inc/tepa.php'; 
	  $izlash=isset($_GET['text'])? $_GET['text']:0;

 ?>
 
<?php		

            if($izlash){
			
            $que = "select * from `kitoblar`  where `nomi` LIKE '%".$_GET['text']."%'";
			$result = mysqli_query($con, $que);
			echo '<div id="templatemo_content_right">';
				        echo '<h1>Please enter name of the book: '.$_GET['text'].'</h1>';
            $i=0;
			while($row=mysqli_fetch_array($result)){

        echo '
        	<div class="templatemo_product_box">
		
            	<h1>'.$row['nomi'].'  <span>('.$row['mualif'].')</span></h1>
		
   	      <img src="screen/'.$row['img'].'" alt="'.$row['nomi'].'" width="100px" height="150" />//layout for this image
                <div class="product_info">
                	<p>'.$row['short'].'</p>
                    <div class="buy_now_button"><a href="view.php?id='.$row['id'].'">batfasil</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
 ';
			$i++;
			}
			
			if($i==0) { echo '<b> Not found</b>';}
			}
			else
			{
			
			echo '          
							<div id="templatemo_content_right">
						
				            <h1>Seach</h1>
			                <form action="" method="GET">
							<input type="text"  name= "text" value="">
							<input type="submit"  value="Search">
						    </form>';
			
			}
			
?>    
 <?php include 'inc/past.php'; ?>
