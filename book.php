<?php

require_once("config/db.php");

// load the login class
require_once("classes/Login.php");
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() != true) {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}

?>
<?php   include_once("views/templates/db_conx.php");
    $bid = $_GET['bid'];
    $sql = "SELECT user_name, book_name, author_name, available FROM books natural join users WHERE book_id ='$bid'";
    $result = mysqli_query($db_conx, $sql);
    $row=mysqli_fetch_row($result);
    $owner = $row[0];
    $book_name = $row[1];
    $author_name = $row[2];
    $available = $row[3]; 
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $book_name; ?></title>
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


    </style>
</head>
<body id="body">
<?php include("views/templates/header.php"); ?>
<div class="wrapper">
        <br>

        <br>
        <table class="table table-hover">
                <caption><?php echo $book_name; ?></caption>
                <tbody>
                    <tr>
                        <td>Author</td>
                        <td><?php echo $author_name?></td>
                    </tr>
                    <tr>
                        <td>Owner</td>
                        <td><?php echo $owner ?></td>
                    </tr>
                    <tr>
                        <td>Availability</td>
                        <td><?php 
                                if ($available == 1) {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                            ?></td>
                    </tr>
                </tbody>
              </table>
        <div>
        <!--<div class="list-group">
            <a href="#" class="list-group-item disabled">
                <h3>$s</h3>
            </a>
            <a href="#" class="list-group-item">blah</a>
            <a href="#" class="list-group-item">blah</a>
            <a href="#" class="list-group-item">blah</a>

        </div>-->
        <button type="button" class="btn btn-success">Request owner for book</button>
        <br>

</div>

</body>
</html>