<?
header('Content-Type: text/html; charset=utf-8');
$host = $_SERVER['HTTP_HOST'];
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('Europe/Madrid');

?>
<?
if (isset($_REQUEST['id'])){
	$idv=$_REQUEST['id'];
}
if (isset($_REQUEST['pub'])){
	$pub=$_REQUEST['pub'];
}
if (isset($_REQUEST['priv'])){
	$priv=$_REQUEST['priv'];
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <h3>Test escritura base de datos</h3> 
</html>
<?

$user="jeparcac_egc";
$pass="kqPTE8dLz3GVtks";
$server="localhost";
$db="jeparcac_egc";
$con=mysqli_connect($server,$user,$pass,$db);

$sql = "INSERT INTO keysvotes (idvotation, publicKey, privateKey) VALUES ('".$idv."', '".$pub."', '".$priv."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>