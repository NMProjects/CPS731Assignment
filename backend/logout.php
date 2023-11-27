<?php
session_start();

?>

<!DOCTYPE html>
<html>
<body>

<?php
session_unset();
session_destroy();
echo "You are now logged out:";
?>

</body>
</html>