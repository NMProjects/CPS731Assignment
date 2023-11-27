
<?php 
$conn = oci_connect('ethorley', '17172113',
'(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl)))');
if ($conn){ 
    print("SOMETHING");
}else{
    print("Connection Failed ");
    $m = oci_error();
    print($m['message']);
  }
$uname = filter_var($_POST["uname"], FILTER_SANITIZE_EMAIL);
$pword = $_POST["pword"];
$cryptpass = crypt($pword, 'tmu');

echo $uname;

$query = "INSERT INTO USERS (email, pword) VALUES ('$uname', '$cryptpass')";
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);
echo "$uname registered";
print "<br>";

oci_close($conn);

?>


