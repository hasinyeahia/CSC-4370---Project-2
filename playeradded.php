<html>
<head>
<title>Add Player</title>
</head>
<body>
<?php
 
 if(isset($_POST['submit'])){
    $rank = 0;
    $f_name = trim($_POST['first_name']);
    $l_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $uname = trim($_POST['username']);
    $score = 0;

}
    require_once('connect.php');
    $query = "INSERT INTO playersss (rank, first_name, last_name, email, username, score) VALUES ('$rank',?,?,?,?,'$score')";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $f_name, $l_name, $email, $uname);
    mysqli_stmt_execute($stmt);
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    if($affected_rows == 1){
        echo 'Player Entered';
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
    } else {
        echo 'Error Occurred<br />';
        echo mysqli_error();
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
        }
?>
    
<form action="http://localhost/tictac/playeradded.php" method="post">
 
<b>Add a New Player</b>
 
<p>First Name:
<input type="text" name="first_name" size="30" value="" />
</p>
    
<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
</p>>
    
<p>Email:
<input type="text" name="email" size="30" value="" />
</p>
    
<p>UserName:
<input type="text" name="username" size="30" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>


</form>
</body>
</html>
