<?php 
$db = mysqli_connect('localhost', 'root', '', 'crud_bootstrap');

function show($tabel, $where = null){
	global $db;
	$comand = "SELECT * FROM $tabel";
	if ($where != null) {
		$comand .= " WHERE $where";
	}
	$query = mysqli_query($db, $comand) or die ($db->error);
	$row = array();
	while ($rows = mysqli_fetch_array($query, MYSQLI_BOTH)) {
		$row[] = $rows;
	}
	return $row;
	mysqli_close($db);
 }

 ?>
