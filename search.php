<?php
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() != true) {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}

?>
<br>
<!DOCTYPE html>
<html>
  <head>
    <title>The Crowd Sourced Library</title>
      <style>
          .wrapper{
             width:1000px;
              min-height: 550px;
              margin:0px auto;
              padding: 20px;
            background-color: rgba(255,255,255,0.8);

          }
         #body {
              margin:0;
              padding:0;
              background-image:  url("http://farm6.static.flickr.com/5051/5496507286_0dfd267fc0.jpg");
                overflow: auto;

          }
          .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
			  background-color: rgba(255,255,255,1);
			}


      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script >
      	jQuery(document).ready(function($) {
		    $(".clickable-row").click(function() {
		        window.document.location = $(this).data("href");
		    });
		});
      </script>
  </head>
 <body id="body">
    <?php include("templates/header.php") ?>
    <div class="wrapper">
        <div id="wrappertext">
        <h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
        <br>
        <button type="button" class="btn btn-success">Share a book and help us grow!</button>
        <br>
        <br>
        <div class="list-group">
        <table class="table table-hover">
        		<caption>Recently added books</caption>
			    <tbody>
			      	<?php	include_once("templates/db_conx.php");
						$sql_temp = "SELECT book_id, book_name, author_name FROM books WHERE available = 1 LIMIT 20";
					    $result = mysqli_query($db_conx, $sql_temp);

					    while ($row=mysqli_fetch_row($result))
					    {
					    	echo "<tr class='clickable-row' data-href='book.php/?bid=".$row[0]."'><td>".$row[1]."</td>";
					    	echo "<td>".$row[2]."</td></tr>";
					    }
				?>
			    </tbody>
			  </table>
		<div>
            </div>
    </div>
  </body>
</html>




