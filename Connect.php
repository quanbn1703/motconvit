<?php
$conn_string="host=ec2-3-216-129-140.compute-1.amazonaws.com port=5432 dbname=df3msp37s1gl0j user=uwtumgtublfpuc password=331ca4c4a9ac4d344cc381fc220d562a1ba4c091726eef15616036d1268e4ee8";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM vhquan WHERE username='".$username."' AND _password='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
