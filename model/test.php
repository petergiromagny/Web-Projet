<?php
session_start();

$username = $_SESSION['username'];
$mail = $_SESSION['email'];
$usertype = $_SESSION['usertype'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>salut</title>
</head>
<body>
<?php
    if(isset($_SESSION['email']) && isset($_SESSION['username'])){
        echo "<h1>Wesh ".$username."</h1>";
        if(isset($_SESSION['usertype']) && $usertype == 0){
            echo "<button>delete</button>";
        }
        else{
            echo "vous n'avez pas les droits pour supp";
        }
    }else{
        echo "fdp";
    }
?>
</body>
</html>