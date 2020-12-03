<?php 
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <form action="/add.php" method="POST">
            <input type="text" class="form-control" name="task" id="task" placeholder="To do...">
            <button type="submit" name="sendTask" class="btn btn-success">Send</button>
        </form>
    

    <?php 
        $query = $pdo->query('SELECT * FROM tasks ORDER BY id DESC' );
        echo '<ul>';
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>'. $row->task .'</b><a href="/delete.php?id='.$row->id.'"><button>DELETE</button></a></li>';
        }
        echo '</ul>';
    ?>
    </div>
    
</body>
</html>