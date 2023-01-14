<?php
require 'dbhandler.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="main-section">
            <div class="add-todo-section">
                <form action="insert.php" method="POST">
                    <input name="todoItem" type="text" placeholder="This field is required" required>
                    <button type="submit">Add &nbsp; <span>&#43;</span></button>
                </form>
            </div>

            <?php
            $todos = mysqli_query($conn, "SELECT * FROM todos ORDER BY id ASC");
            ?>
            <div class="show-todo-section">
                <?php
                while($row = mysqli_fetch_array($todos)){
                ?>

                    <div class="todo-item">
                        <span class="remove-to-do"><a class="anchor" href="delete.php? ID=<?php echo $row['id']?>">x</a></span>

                        <h2><?php echo $row ['title'] ?></h2>
                        <small>Created : <?php echo $row ['date_time'] ?></small>
                        <a class="update" href="update.php? ID=<?php echo $row['id']?>">
                            <button class="btn">Update</button>
                        </a>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
        
    </body>
</html>