<?php
session_start();
?>

<html>
<body>

User: <?php echo $_SESSION["user"]; ?><br>
Course: <?php echo $_POST["courseCode"]; ?><br>
Difficulty <?php echo $_POST["courseDifficultyInputsNumber"]; ?><br>
Enjoyment: <?php echo $_POST["courseEnjoymentInputsNumber"]; ?><br>
Material: <?php echo $_POST["courseMaterialInputsNumber"]; ?><br>
Review: <?php echo $_POST["courseReview"]; ?><br>
Grade: <?php echo $_POST["courseGrade"]; ?>

</body>
</html> 
