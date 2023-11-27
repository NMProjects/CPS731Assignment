<?php
session_start();
?>
<?php
$conn = oci_connect('ethorley', '17172113',
'(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl)))');
if ($conn){ 
}else{
    print("Connection Failed ");
    $m = oci_error();
    print($m['message']);
  }

  $showDivFlag = false;

if ($_SESSION['login'] == true) {

$uname = $_SESSION["user"]; 
$coursecode = $_POST["courseCode"];
$difficulty = $_POST["courseDifficultyInputsNumber"];
$enjoyment = $_POST["courseEnjoymentInputsNumber"];
$material = $_POST["courseMaterialInputsNumber"]; 
$review = $_POST["courseReview"]; 
$grade = $_POST["courseGrade"]; 

$query = "INSERT INTO COURSEREVIEW (uname, coursecode, difficulty, enjoyment, material, review, grade) 
VALUES ('$uname','$coursecode', $difficulty, $enjoyment, $material, '$review', $grade)";
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);

//echo $query;
oci_close($conn);

echo "Your review has been submitted: <br>
Course:  $coursecode <br>
Difficulty: $difficulty<br>
Enjoyment:  $enjoyment<br>
Material: $material<br>
Review: $review<br>
Grade: $grade";
}else{
    echo "You must be logged in";
}
?>



</body>
</html> 
