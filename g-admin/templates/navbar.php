<?php
        if (!isset($_SESSION["username"])){
            header("location: g-login/index.php");
        }        
?>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="pictures/green-grey-mini.png" alt="be green"/>
                <img src="pictures/green-mini.png" alt="be green"/>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/PROJECT/index.php"><span class="glyphicon glyphicon-home"></span> Home page</a></li>
                <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage <span class="caret"></span></a>
                    <ul class="dropdown-menu inverse-dropdown">
                        <li><a href="pages.all.php"><span class="glyphicons glyphicons-more-items"></span> All Pages</a></li>
                        <li><a href="users.all.php"><span class="glyphicons glyphicons-group"></span> All Users</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="settings.php"><span class="glyphicons glyphicons-settings"></span> Settings</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <?php if(isset($_SESSION["username"])){ ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION["username"];?> <span class="caret"></span></a>
                        <ul class="dropdown-menu inverse-dropdown">
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Edit profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-lock"></span> Log out</a></li>
                    </ul>
                    <?php } ?>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>