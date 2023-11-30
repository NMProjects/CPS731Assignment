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

if ($_SESSION['login'] == true) {

$uname = $_SESSION["user"]; 
$school = $_POST["courseSchool"];
$prof = $_POST["profName"];
$difficulty = $_POST["profDifficultyInputsNumber"];
$clarity = $_POST["profClarityInputsNumber"];
$helpfulness = $_POST["profHelpfulnessInputsNumber"]; 
$review = $_POST["profReview"]; 

$query = "INSERT INTO PROFREVIEW (uname, school, profname, difficulty, clarity, helpfulness, review) 
VALUES ('$uname','$school', '$profname', $difficulty, $clarity, $helpfulness, '$review')";
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);

//echo $query;
oci_close($conn);

echo "Your review has been submitted: <br>
Professor:  $prof <br>
School: $school <br>
Difficulty: $difficulty<br>
Clarity:  $enjoyment<br>
Helpfulness: $material<br>
Review: $review<br>";

}else{
    echo "You must be logged in";
    echo '<br><br><a href="login.html">Login</a>';

}
?>
<br>
<a href="main.html">Home   </a><br><br>


</body>
</html> 
