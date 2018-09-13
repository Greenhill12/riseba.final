<div class="container">
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <div class="columns">
                <div class="four-fifths column">
                    <h3 class="heading-inline"><?=$heading;?></h3>
                </div>
                <div class="one-fifth column center-text">
                    <button type="submit" class="btn btn-success" name="update"><?=$buttonName;?></button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputUser" class="col-sm-2 control-label">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUser" name="user" placeholder="Username" value=<?=$userUsername;?>>
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Your Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" value=<?=$userName;?>>
            </div>
        </div>
        <div class="form-group">
            <label for="inputSurname" class="col-sm-2 control-label">Your Surname:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSurname" name="surname" placeholder="Surname" value=<?=$userSurname;?>>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Your Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="mail" placeholder="Email" value=<?=$userMail;?>>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">Your Phone Number:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Phone number" value=<?=$userPhone;?>>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="password1" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword2" class="col-sm-2 control-label">Retype password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword2" name="password2" placeholder="Password again">
            </div>
        </div>
        <div class="form-group">
            <label for="postLocation">User rights: </label>
            <div class="radio">
                <label><input type="radio" name="userRights" value="administrator">Administrator</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="userRights" value="user" checked>User</label>
            </div>
    </form>
</div>