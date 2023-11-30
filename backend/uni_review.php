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
$review = $_POST["profReview"]; 

$query = "INSERT INTO UNIREVIEW (uname, school, review) 
VALUES ('$uname','$school', '$review')";
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);

//echo $query;
oci_close($conn);

echo "Your review has been submitted: <br>

School: $school <br>
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
