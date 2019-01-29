<?php
session_start();

$username = "alex";
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
<script>
    console.log('<?php
            echo $username;
        ?>');
</script>
<?php
    if(isset($_SESSION['email']) && isset($_SESSION['username'])){
        echo "<h1>Salut ".$username."</h1>";
        if(isset($_SESSION['usertype']) && $usertype == 0){
            echo "<button>delete</button>";
        }
        else{
            echo "vous n'avez pas les droits pour supp";
        }
    }else{
        echo "error";
    }
?>
</body>
</html>