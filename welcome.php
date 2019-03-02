<link rel="stylesheet" href="form.css">
<?php
session_start();
?>
<div class="body content">
<div class="welcome">
<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
    <img src="<?= $_SESSION['avatar'] ?>"><br />
    Welcome <span class="user"><?= $_SESSION['username'] ?></span>
    <?php
    $mysqli = new mysqli("localhost", "root", "root", "test",3307);
    $sql = "SELECT username, avatar FROM users";
    //$result = mysqli_result object
    $result = $mysqli->query( $sql );
    ?>
    <div id='registered'>
    <span>All Registered Users:</span>
    <?php
    //returns associative array of fetched row
    while( $row = $result->fetch_assoc() ){
        echo "<div class='userlist'><span>".$row['username']."</span><br />";
        echo "<img src='".$row['avatar']."'></div>";
    }
?>
</div>
</div>
<a href="http://localhost:81/form.php" class="previous">&laquo; LOG OUT</a>
</div>
