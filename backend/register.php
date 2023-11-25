<html>
<body>
<?php echo $_POST["uname"]; ?><br>
<?php 
    $pword = $_POST["pword"];
    $cryptpass = crypt($pword, PASSWORD_BCRYPT);
    echo $cryptpass;

?>

</body>
</html>
