<?php
$pTitle=" < All Users";
?>

<?php require "templates/header.php"; ?>

<?php require "templates/navbar.php"; ?>

<div class="container">
    <div class="columns">
        <div class="four-fifths column">
            <h3 class="heading-inline">Users</h3>
        </div>
        <div class="one-fifth column center-text">
            <a href="user.add.php" class="btn btn-success">Add New</a>
        </div>
    </div>
    <table class="table table-hover">
        <tr>
            <th class="text-left">Username</th>
            <th class="text-center">Name</th>
            <th class="text-center">Phone</th>
            <th class="text-center">Email</th>
            <th class="text-center">Role</th>
        </tr>

<?php require "data/users.php";

$users = getUsers();

foreach($users as $user){

?>
        <tr class="clickable-row" data-href="#">
            <td class="text-left">
                <div><?=$user["username"];?></div>
                <div>
                    <span class="small">
                        <a href="user.edit.php?user=<?=$user["id"];?>">Edit</a>
                        <span> | <span>
                    </span>
                    <span class="small">
                        <?php
                            $modalId=$user["id"];
                            $modalTitle="Delete User";
                            $modalType="user";
                            $modalBody=$user["username"];
                            $modalDelete="user.delete.php?user=";

                            require "templates/modal.php";
                        ?>
                    </span>
                </div>
            </td>
            <td class="text-center"><?=$user["name"]." ".$user["surname"];?></td>
            <td class="text-center"><?=$user["phone"];?></td>
            <td class="text-center"><?=$user["mail"];?></td>
            <td class="text-center"><?=$user["role"];?></td>
        </tr>

<?php
}
?>

    </table>
</div>

<?php require "templates/footer.php"; ?>