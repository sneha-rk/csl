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
<?php
    if(isset( $_POST['submit']) && isset( $_POST['bookname']) && isset( $_POST['authorname'])) { 
        include_once("views/templates/db_conx.php");
        $book_name = $_POST['bookname'];
        $author_name = $_POST['authorname'];
        $owner = $_SESSION['user_id'];
        $SQL = "INSERT INTO books (book_name, author_name, user_id) VALUES ('$book_name', '$author_name', '$owner')";
        $result = mysqli_query($db_conx, $SQL);
        if($result) {
                header('Location: /?status=success');
            }
            else {
                header('Location: /?status=error');
            }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Share a Book</title>
    <style>
        .wrapper{
            width:1000px;
            min-height: 500px;
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
        .u-form-group{
            width:100%;
            margin-bottom: 15px;
        }
        .u-form-group input[type="text"]{
            width: 50%;
            height:45px;
            outline: none;
            border: 1px solid #ddd;
            padding: 0 10px;
            border-radius: 3px;
            color: #333;
            font-size:1.5rem;
            -webkit-transition:all 0.1s linear;
            -moz-transition:all 0.1s linear;
            transition:all 0.1s linear;
        }
        .u-form-group input:focus{
            border-color: #358efb;
        }
        .u-form-group #share
        {
            width:50%;
            background-color: #1CB94E;
            border: none;
            outline: none;
            color: #fff;
            font-size: 14px;
            font-weight: normal;
            padding: 14px 0;
            border-radius: 3px;
            text-transform: uppercase;
        }

    </style>
</head>
<body id="body">
<?php include("views/templates/header.php"); ?>
<div class="wrapper">

    <h1>Thank you for deciding to share a book!</h1>
    <p>Please fill book details and share if and only if you have the book :P</p>
    <br>

    <br>

    <form method="POST">

        <div class="u-form-group">
            <input name="bookname" type="text" placeholder="Book Name"/>
        </div>
        <div class="u-form-group">
            <input name="authorname" type="text" placeholder="Author Name"/>
        </div>
        <div class="u-form-group">
            <input id="submit" name="submit" type="submit" value="Add book to library">
        </div>
    </form>
     <br>

</div>

</body>
</html>