
<?php 
$conn = oci_connect('ethorley', '17172113',
'(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl)))');
if ($conn){ 
}else{
    print("Connection Failed ");
    $m = oci_error();
    print($m['message']);
  }
$uname = filter_var($_POST["uname"], FILTER_SANITIZE_EMAIL);
$pword = $_POST["pword"];
$cryptpass = crypt($pword, 'tmu');

$query = "SELECT PWORD FROM USERS WHERE EMAIL = '$uname'";
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);
print "<br>";
while($row=oci_fetch_array($stid)){
  $storedPassword = $row[0];
  echo $cryptpass == $storedPassword;
}

print "<br>";

oci_close($conn);

?>


