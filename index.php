<?php 
      include 'inc/db.php'; 
      include 'inc/tepa.php'; 
 ?>
 
<?php		

            
			$que = 'select * from `kitoblar` order by `id` DESC';
			$result = mysqli_query($con, $que);
			echo '<div id="templatemo_content_right">';
				        echo '<h1>New books</h1>';

			while($row=mysqli_fetch_array($result)){

        echo '
        	<div class="templatemo_product_box">
            	<h1>'.$row['nomi'].'  <span>('.$row['mualif'].')</span></h1>
   	      <img src="screen/'.$row['img'].'" alt="'.$row['nomi'].'" width="100px" height="150" />
                <div class="product_info">
                	<p>'.$row['short'].'</p>
                    <div class="buy_now_button"><a href="view.php?id='.$row['id'].'">View more</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
 ';
			
			}
			
?>    
 <?php include 'inc/past.php'; ?>