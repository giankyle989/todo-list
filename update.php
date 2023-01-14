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
        
    <?php
    $id = $_GET['ID'];
    include 'dbhandler.php';
    $Rdata = mysqli_query($conn, "SELECT * FROM todos WHERE id = $id ");
    $data = mysqli_fetch_array($Rdata);
    ?>

    <div class="main-section">
        <div class="add-todo-section">
                <form action="updateConfig.php" method="POST">
                    <input name="todoItem" value="<?php echo $data['title'];?>" type="text" placeholder="This field is required" required>
                    <button type="submit">Update &nbsp; <span>&#43;</span></button>
                    <input type="hidden" name="ID" value="<?php echo $data['id']?>">
                </form>
        </div>
    </div>
        
        <script src="" async defer></script>
    </body>
</html>