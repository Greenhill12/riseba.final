<?php
$pTitle=" < Settings";
?>

<?php require "templates/header.php"; ?>

<?php require "templates/navbar.php"; ?>

<div class="container">
    <div class="columns">
        <div class="four-fifths column">
            <h3 class="heading-inline">General settings</h3>
        </div>
        <div class="one-fifth column center-text">
            <a href="#" class="btn btn-success">Update</a>
        </div>
    </div>
</div>
<div class="container">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="siteTitle" class="col-sm-2 control-label">Site Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="siteTitle" placeholder="Site Title" value="">
            </div>
        </div>
    </form>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="siteFpnt" class="col-sm-2 control-label">Site Font</label>
            <div class="col-sm-10">
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fonts 
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Arial</a></li>
                        <li><a href="#">Calibri</a></li>
                        <li><a href="#">Segoe UI</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Times New Roman</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>

<?php require "templates/footer.php"; ?>