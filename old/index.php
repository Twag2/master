<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Twag2 by Malakhov&Prokopyev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

</head>
<body>
<div class="navbar navbar-inverse navbar-static-top navbar">
  <div class="container">
                <a class="navbar-brand" href="index.php">
                    Twag2
                </a>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="">
            <div class="col-xs-2">
                <a data-toggle="dropdown"><img src="http://placehold.it/120x120" class="center-block img-circle img-responsive"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Change</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xs-6">
            <h4 id="profile_nick">Nick</h4>
            <h5 id="profile_name">Name</h5>
            <h6 id="profile_status">I'm fine</h6>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <img src="http://maps.googleapis.com/maps/api/staticmap?center=Novosibirsk&amp;zoom=12&amp;size=640x100&amp;scale=2&amp;sensor=true"
                     class="center-block img-responsive">
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-center">
            <a class="navbar-btn btn btn-default" href="index.php">Profile</a>
            <a class="navbar-btn btn btn-default">Feed</a>
            <a class="btn-lg btn btn-success">Action</a>
            <a class="navbar-btn btn btn-default">News</a>
            <a class="navbar-btn btn btn-default">Trend</a>
        </div>
    </div>
</div>
</body>

</html>