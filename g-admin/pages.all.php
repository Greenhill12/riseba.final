<?php
$pTitle=" < All Pages";
?>

<?php require "templates/header.php"; ?>

<?php require "templates/navbar.php"; ?>

<div class="container">
    <div class="columns">
        <div class="four-fifths column">
            <h3 class="heading-inline">Pages</h3>
        </div>
        <div class="one-fifth column center-text">
            <a href="page.add.php" class="btn btn-success">Add New</a>
        </div>
    </div>
    <table class="table table-hover">
        <tr>
            <th><div class="text-left">Title</div></th>
            <th><div class="text-center">Author</div></th>
            <th><div class="text-center">Date</div></th>
            <th><div class="text-center">Location</div></th>
        </tr>

        <?php require "data/pages.php";

            $pages = getPages();

            foreach($pages as $page){
        ?>

        <tr>
            <td>
                <div class="text-left">
                    <div><?=$page["post_title"];?></div>
                    <div>
                        <span class="small">
                            <a href="page.edit.php?page=<?=$page["id"];?>">Edit</a>
                            <span> | <span>
                        </span>
                        <span class="small">
                            <a href="#">View</a>
                            <span> | <span>
                        </span>
                        <span class="small">
                            <?php
                                $modalId=$page["id"];
                                $modalTitle="Delete Page";
                                $modalType="page";
                                $modalBody=$page["post_title"];
                                $modalDelete="page.delete.php?page=";

                                require "templates/modal.php";
                            ?>
                        </span>
                    </div>
                </div>
            </td>
            <td><div class="text-center"><?=$page["post_author"];?></div></td>
            <td><div class="text-center"><?=$page["post_date"];?></div></td>
            <td><div class="text-center"><?=$page["post_location"];?></div></td>
        </tr>
    <?php
            }
        ?>
    </table>
</div>

<?php require "templates/footer.php"; ?>