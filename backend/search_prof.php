<?php 
$conn = oci_connect('ethorley', '17172113',
'(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl)))');
if ($conn){ 
}else{
    print("Connection Failed ");
    $m = oci_error();
    print($m['message']);
}
function printTable($stid){

    print '<table border="1">';
    // Fetch each column name
    
    $ncols = oci_num_fields($stid);
    echo "<tr>\n";
    for ($i = 1; $i <= $ncols; ++$i) {
        $colname = oci_field_name($stid, $i);
        echo "  <th><b>".htmlentities($colname, ENT_QUOTES)."</b></th>\n";
    }
    echo "</tr>\n";
    // Fetch each row in an associative array
    
    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
       print '<tr>';
       foreach ($row as $item) {
           print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
       }
       print '</tr>';
    }
    print '</table>';
}

$profname = filter_var($_POST["profName"], FILTER_SANITIZE_MAGIC_QUOTES);

$query2 = "select school, difficulty, clarity, helpfulness, review
from profreview where profname ='". $profname . "'";


$query1= "Select AVG(difficulty) AS \"Average Difficulty\", AVG(clarity) AS \"Average Clarity\", AVG(helpfulness) AS \"Average Helpfulness\"
from profreview where profname ='". $profname . "'";

echo $profname;
echo ": <br>";
$stid = oci_parse($conn, $query1);
$r = oci_execute($stid);
printTable($stid);

echo "Recent Reviews :<br>";
$stid = oci_parse($conn, $query2);
$r = oci_execute($stid);
printTable($stid);

oci_close($conn);

echo '<br><br><a href="view_prof.html">Back</a>';
echo '<br><br><a href="main.html">Home</a>';

?>
