<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Grand Unified Sound Change Database</title>
	<style type="text/css" media="screen">
* {
	margin: 0px;
	padding: 0px;
	font-family: FreeSerif, Charis SIL, Cambria, Times New Roman, serif
}
body, html {
	padding: 3px;

	font-size: 11pt;
}

consonants {
	width: 70%;
	float: left;
	margin-left: auto;
	margin-right: auto;
}
vowels {
	width: 20%;
	margin-left: auto;
	margin-right: auto;
}

table {
	border-collapse: collapse;
	margin: 2px;
}

th {
	text-align: left;
	font-size: 10pt;
}
td {
	font-size: 12pt;
	border: 1px solid black;
	padding: 1px 2px;
}
	</style>
</head>
<body>
<?php
$source = $_POST["source"];
$result = $_POST["result"];
$env = $_POST["env"];
$attest = $_POST["attest"];
$notes = $_POST["notes"];

$db = new SQLite3("sc.db") or die("Can't open database file!");

$incomplete = false;
$duplicate = false;
for($i=0;$i<count($_POST["source"]);$i++){
	$entry = implode("\t",[$source[$i],$result[$i],$env[$i],$attest[$i],$notes[$i]])."\n";
	$source_safe = SQLite3::escapeString($source[$i]);
	$result_safe = SQLite3::escapeString($result[$i]);
	$env_safe = SQLite3::escapeString($env[$i]);
	$attest_safe = SQLite3::escapeString($attest[$i]);
	$notes_safe = SQLite3::escapeString($notes[$i]);
	$line = $db->query("SELECT * FROM sc WHERE source = '".$source_safe."' AND result = '".$result_safe."' AND env = '".$env_safe."';")->fetchArray(SQLITE3_ASSOC);
	if($source[$i] == "" and $result[$i] == "" and $env[$i] == "" and $attest[$i] == "" and $notes[$i] == ""){
		// do nothing
	}elseif($source[$i] == "" or $result[$i] == "" or $env[$i] == "" or $attest[$i] == ""){
		echo("The following entry was incomplete and has not been filed: ");
	}elseif($line and strpos($line["attest"],$attest[$i]) !== false){
		echo("The following entry already exists and has not been filed: ");
	}elseif($line){
		$db->exec("UPDATE sc SET attest = '".$line["attest"].",".$attest_safe."' WHERE id = ".$line["id"].";");
		echo("Updated entry ".$line["id"].": ");
	}else{
		$db->exec("INSERT INTO sc(source,result,env,attest,notes) VALUES ('".$source_safe."','".$result_safe."','".$env_safe."','".$attest_safe."','".$notes_safe."');");
		echo("Added entry: ");
	}
	echo($entry."<br />");
}
?>
</body>
</html>
