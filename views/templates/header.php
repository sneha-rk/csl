<!DOCTYPE html>
<html>
<head>
    <title>The CrowdSourced Library</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        .navbar{
            }
        .navbar-xs {}
        .btn-1 {
            border: none;
        }
        .navbar-xs .navbar-nav > li > a {  padding-top: 5px; padding-bottom: 5px; line-height: 50px; }
        .input-mysize {   
           height: 15px;
           font-size: 15px;
           line-height: 15px;
           width: 250px;
        }
        .button-mysize {
            height:34px;
        }
        .white {
            color: gray;
        }
        .dropdown-menu1 {
            width: 200px !important;
        }
    </style>
</head>
<body>
     <!-- min-height:60px; height: 60px; height:70px;
            padding-top:5px;
        }-->
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
            <a class="navbar-brand" href="index.php">CrowdSourced Library</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- <li><a href="views/about.php">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>

                    <form class="navbar-form" role="search" method="get" id="search-form" name="search-form">
                                <div class="btn-group pull-left" style="margin-right:10px;">
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Mumbai <span class="caret"></span></a>
                                        <div class="dropdown-menu multi">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="dropdown-menu"><li><a href="#"><strong>Mumbai</strong></a></li></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>      
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="2 BHK Flat, Pune Real Estate, Pest Control..." id="query" name="query" value="">
                                        <div class="input-group-btn">
                                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>
                                </div>
                            </form>
                </li> -->
            </ul>
            <!-- THIS IS THE SEARCH FUNCTION-->
            <form class="navbar-form navbar-left" action="search.php" role="search" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for book..." id="query" name="query" value="">
                    <div class="input-group-btn">
                    <button type="submit" class="btn btn-1 button-mysize" style="display:hide"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right input-mysize">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user_name'].'<span class="caret"></span>'; ?></a>
                    <ul class="dropdown-menu dropdown-menu1">
                        <li><a href="#">Settings <span class="glyphicon glyphicon-cog pull-right white"></span></a></li>
                        <li><a href="#">Notifications <span class="glyphicon glyphicon-envelope pull-right white"></span></a></li>
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