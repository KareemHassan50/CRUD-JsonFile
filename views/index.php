<?php
require "../Curd.php";
$Users = getallusers();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
    <style>
        td {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="">
                    <form action="./formadduser.php" method="get">
                        <input type="submit" value="Add User" class="btn btn-outline-success">
                    </form>
                </div>
                <table class='table table-bordered mt-2'>
                    <tr>
                        <td>#</td>
                        <td>name</td>
                        <td>address</td>
                        <td>phone</td>
                        <td>gender</td>
                        <td colspan="3">Actions</td>
                    </tr>
                    <?php foreach ($Users as $user) : ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['address'] ?></td>
                            <td><?= $user['phone'] ?></td>
                            <td><?= $user['gender'] ?></td>
                            <td>
                                <form action="./fromUpdate.php" method="get">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <input type="submit" value="Update" class="btn btn-outline-primary">
                                </form>
                            </td>
                            <td>
                                <form action="./show.php" method="get">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <input type="submit" value="Show" class="btn btn-outline-info">
                                </form>
                            </td>
                            <td>
                                <form action="./delete.php" method="get">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <input type="submit" value="Delete" class="btn btn-outline-danger">
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>