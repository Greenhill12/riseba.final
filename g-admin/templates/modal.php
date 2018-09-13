<!--
required variables:

    $modalId="<variable for modal id>";
    $modalTitle="<modal title>";
    $modalType="<part of modal contet>";
    $modalBody="<variable for modal content>";
    $modalDelete="<link for delete page>";

replace: <...>

-->

<a data-toggle="modal" href="#myModal<?=$modalId;?>">Delete</a>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal<?=$modalId;?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?=$modalTitle;?></h4>
        </div>
        <div class="modal-body">
            <p>Are You sure to delete <?=$modalType;?> "<b><?=$modalBody;?></b>"?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?=$modalDelete;?><?=$modalId;?>" role="button">Delete</a>
        </div>
    </div>
</div>