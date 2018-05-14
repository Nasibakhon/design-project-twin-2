<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Library</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="izlash.php" class="current">Search</a></li>
            <li><a href="all.php" class="current">All Books</a></li>            
            <li><a href="about.php" class="current"> About</a></li> 
			<li><a href="admin.php" class="current"> Admin panel</a></li> 

    	</ul>
    </div> <!-- end of menu -->
    
   <div id="templatemo_k">
		<img src="images/bg2.png" width="100%">
		<!--<div id="templatemo_special_offers" style="float:left;">
        <b>	<p>	
Library
        </b>	</p>
		
        </div>
        <div id="templatemo_new_books" style="float:right;">
		<b><p>
		
		</p></b>
        </div> -->
    </div> <!-- end of header -->
    
    <div id="templatemo_content" >
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
			            	<h1>Types of the Books</h1>
                <ul>

			<?php
			$que = 'select * from bolimlar order by `name` DESC';
            $result = mysqli_query($con, $que);

			while($row=mysqli_fetch_array($result)){
                    echo '<li><a href="bolimlar.php?id='.$row['id'].'">'.$row['name'].'</a></li><hr>';
                  }  
				?>
				            	</ul>

            </div>
			<div class="templatemo_content_left_section">
            	<h1>Mostly read Book</h1>
                <ul>			<?php
			$que = 'select * from kitoblar order by `read` DESC';
            $result = mysqli_query($con, $que);

			while($row=mysqli_fetch_array($result)){
                    echo '<li><a href="view.php?id='.$row['id'].'">'.$row['nomi'].'</a></li><hr>';
                  }  
				?>
    	</ul>
            </div>
            
        </div> <!-- end of content left -->
        