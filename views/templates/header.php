<!DOCTYPE html>
<html>
<head>
    <title>CROWDSOURCED LIBRARY homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        .navbar{
            height:70px;
            padding-top:5px;
        }
        .navbar-xs { min-height:60px; height: 60px; }
        .navbar-xs .navbar-nav > li > a {  padding-top: 5px; padding-bottom: 5px; line-height: 50px; }
        .input-mysize {   
           height: 15px;
           font-size: 15px;
           line-height: 20px;
           width: 250px;
        }
        .white {
            color: gray;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-xs navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">CrowdSourced Library</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="views/about.php">About</a></li>
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li> -->
            </ul>
            <!-- THIS IS THE SEARCH FUNCTION-->
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search for a book">
                </div>
                <span class="glyphicon glyphicon-search white"></span>
            </form>
            <ul class="nav navbar-nav navbar-right input-mysize">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user_name']; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Settings <span class="glyphicon glyphicon-cog pull-right white"></span></a></li>
                        <li><a href="index.php?logout">Logout<span class="glyphicon glyphicon-log-out pull-right white"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br>
<br>
<br>
<br>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>