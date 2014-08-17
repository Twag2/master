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
                    <li><a data-toggle="modal" data-target="#settings">Settings</a></li>
                    <li><a href="">TWoya</a></li>
                    <li><a href="">mAma</a></li>
                    <li><a href="">v maGa2ine</a></li>
                </ul>
            </div>
        </div>
</nav>
<div class="container">
    <div class="row thumbnail">
        <div class="col-xs-2"><img src="http://placehold.it/120x120" class="img-circle img-responsive"></div>
        <div class="col-xs-4">
            <h4>Погоняло</h4>
            <h5>Имя</h5>
            <h5 id="status">Статус</h5>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-center">
            <a class="navbar-btn btn btn-default" href="profile"><span class="glyphicon glyphicon-home"></a>
            <a class="navbar-btn btn btn-default"><span class="glyphicon glyphicon-tasks"></a>
            <a class="btn-lg btn btn-success">Действие</a>
            <a class="navbar-btn btn btn-default"><span class="glyphicon glyphicon-globe"></a>
            <a class="navbar-btn btn btn-default"><span class="glyphicon glyphicon-star"></a>
        </div>
    </div>
</nav>


<div class="container">
    <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" role="form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Настройки</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Ник:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" id="menu_settings_nick">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Имя:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" id="menu_settings_name">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok"></span> Сохранить</button>
                        <button class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Отмена</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>