<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
<?php
// connect to csdm- webdev server and sel ect database
$db = new mysqli(
"hostname",
"username",
"password",
"dbname"
);
// test if connection was established, and print any errors
if($db->connect_errno){
die("Connectfailed['.$db->connect_error.']");
}
?>

</p>
</body>
</html>