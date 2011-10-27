<?php
	
	$ak=$_POST["ak"];
	$id=$_POST["id"];
	
	
$conn = oci_connect('mantas', 'fluffy', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message' + 'what the hell'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM RINKEJAI WHERE AK='$ak' AND PAZYMEJIMO_NR='$id'");
oci_execute($stid);

if ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
	echo 1;
}
else {
	echo 0;
}
	oci_free_statement($stid);
	oci_close($conn);
?>