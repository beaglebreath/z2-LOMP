<?php
// Make a MySQL Connection
mysql_connect("localhost", "", "") or die(mysql_error());
mysql_select_db("clint") or die(mysql_error());

// Retrieve all the data from the "customers" table
$result = mysql_query("SELECT * FROM customers")
or die(mysql_error());

// store the record of the "customers" table into $row
$row = mysql_fetch_array( $result );
// Print out the contents of the entry

echo "  Name: ".$row['name'];
echo "Street: ".$row['street'];
echo "  City: ".$row['city'];
echo " State: ".$row['state'];
echo "   Zip: ".$row['zip'];

?>
