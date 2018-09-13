<!--
required variables:

    $heading = "<page heading>";
    $buttonName = "<button name>";
    $inputValue = "<value for first input field>";
    $textareaValue = "<value for text area field>";

replace: <...>

-->

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
            <input type="text" class="form-control" id="title" name="title2" value="<?=$inputValue;?>">
            <textarea name="textarea" class="jqte-test form-control">
                <?=$textareaValue;?>
            </textarea>
            <label for="postLocation">Post location: </label>
            <div class="radio">
                <label><input type="radio" name="postLocation" value="top" checked>Top</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="postLocation" value="left">Left</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="postLocation" value="right">Right</label>
            </div>

            <script>
                $('.jqte-test').jqte();
                
                // settings of status
                var jqteStatus = true;
                $(".status").click(function()
                {
                    jqteStatus = jqteStatus ? false : true;
                    $('.jqte-test').jqte({"status" : jqteStatus})
                });
            </script>
        </div>
    </form>
</div>