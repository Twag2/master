<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Twag2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/profile.js"></script>

</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">

    <div class="navbar-header">
        <a class="navbar-brand" href="#">Twag2</a>
    </div>
    <div class="navbar-right">
        <div class="dropdown">
            <button type="button" class="navbar-btn btn btn-link dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></button>
            <ul class="dropdown-menu">
                <li><a href="">Change avatar</a></li>
                <li><a href="" id="click_settings">Settings</a></li>
                <li><a href="">Tvoya</a></li>
                <li><a href="">Mama</a></li>
                <li><a href="">V magazine</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-2"><img src="http://placehold.it/120x120" class="img-circle img-responsive"></div>
        <div class="col-xs-4">
        <h4>Nick</h4>
        <h5>Name</h5>
        <h5 id="status">Status</h5>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-center">
            <a class="navbar-btn btn btn-default" href="index2.php">Profile</a>
            <a class="navbar-btn btn btn-default">Feed</a>
            <a class="btn-lg btn btn-success">Action</a>
            <a class="navbar-btn btn btn-default">News</a>
            <a class="navbar-btn btn btn-default">Trend</a>
        </div>
    </div>
</nav>
<div class="container">
<div class="jumbotron hidden" id="menu_settings">
    <div class="container">
        <div class="text-center">
        <h2>Settings</h2>
        </div>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-xs-3 control-label">Nick:</label>
                <div class="col-xs-6">
                <input class="form-control" type="text" id="menu_settings_nick" value="Nick">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3 control-label">Name:</label>
                <div class="col-xs-6">
                <input class="form-control" type="text" id="menu_settings_name" value="Name">
                </div>
            </div>
            <div class="form-group pull-right">
                <button class="btn btn-success" id="menu_settings_save" type="submit"><span class="glyphicon glyphicon-ok"></span>Save</button>
                <button class="btn btn-danger" id="menu_settings_cancel"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </div>
        </form>
    </div>
</div>
</div>
</body>

</html>